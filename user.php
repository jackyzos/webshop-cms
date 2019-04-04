<?php error_reporting(E_ALL);
define("TITLE", "Logga IN");
	include('inc/header.php');
	require_once("inc/connect.php");

    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<div id='produkt-list'>";  

 include('inc/session.php'); 
  if(isset($_SESSION['username'])) {   

    if ((isset($_GET['uid'])) && (!empty($_GET['uid'])) && is_numeric($_GET['uid'])){
        $id=$_GET['uid'];
       
    
        $query = "SELECT * FROM users where UserID=".$id."";  
        $result = mysqli_query($conn, $query);  
        

        if(mysqli_num_rows($result) > 0) {  

        while($row = mysqli_fetch_assoc($result)) {  
            
            if($id == $_SESSION['userid']){
             echo"<h1>MITT KONTO</h1>";
	          
             echo"<div id='leftlist'>"; 
             echo"<h3>Redigera din kontoinformation</h3>";
              echo"<a href='edit.php?id=$row[UserID]'>Redigera din information</a>";
             
                
                $sql = "SELECT * FROM orders WHERE UserID=".$_SESSION['userid']." ORDER BY OrderID DESC LIMIT 8";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $history = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        $history[] = $row;
                    }
                    echo"<h3>Mina Orderhistorik</h3>";
                    echo"<div id='kund-info'>";
                    echo"<table>
                            <tr>
                                <th>OrderID</th>
                                <th>Datum</th>
                                <th>Totalt Pris</th>
                            </tr>";
                    
                   foreach ($history as $item){
                      $OrderID = $item['OrderID'];
                      $OrderDate = $item['OrderDate'];
                       $TotaltPris = $item['TotaltPrice'];

                           
                    echo "<tr>";      
                    echo "<td>#".$OrderID."</td>";
                    echo "<td>".$OrderDate."</td>";
                    echo "<td>".number_format($TotaltPris, 0)." :-</td>";
                    echo "</tr>";
                       
                            }
                    echo"</table>";
                    echo"</div>";
                  }else {
                        echo"<h3>Din Orderhistorik är tomt</h3>";
                      }
                
                
             echo"<h3>Nyhetsbrev</h3>";
              echo"<a href='#'>Prenumerera</a>";
              echo"<a href='#'>Avsluta prenumerationen</a>";
              echo"<a href='logout.php'>Logga ut</a>";
              echo"</div>"; 
          
     
            }else{
                header("location: user.php?uid=".$_SESSION['userid']."");
            }
            }
        }else{
           echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERORR! Sidan hittade inte</div>"; //om din userID  är inte lika med SESSION ID hamnar du här
        }
     }else{
        echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERROR! Sidan hittade inte</div>"; //om inget UID hittad i URL hamnar du också här eller om ID är tomt
    }

}

       echo " </div>";
   echo " </div>";  

        mysqli_close($conn);
        
       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";


	include('inc/footer.php');
?>
<?php error_reporting(E_ALL);
define("TITLE", "Home Admin");
	include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){
     

                            echo"<div id='right'>";
                            echo"<h1>Alla Orders från kunder</h1>";
                
                $sql9 = "SELECT * FROM orders ORDER BY OrderID DESC";
                $result9 = mysqli_query($conn, $sql9);
                     echo "<table>
                              <tr>
                              <th>Order ID</th>
                              <th>Datum</th>
                              <th>Totalt Pris</th>
                              <th>User ID</th>
                              </tr>";
                if (mysqli_num_rows($result9) > 0) {
                    while($row9 = mysqli_fetch_array($result9)) {
                        
                    $OrderID = $row9['OrderID'];
                    $date = $row9['OrderDate'];
                    $totalt = $row9['TotaltPrice'];
                    $userID = $row9['UserID'];
                    
 
                              echo"<tr>
                              <td> #".$OrderID."</td>
                              <td> ".$date."</td>
                              <td> ".number_format($totalt, 0)." :-</td>
                              <td><a href='admin_user.php?action=editUser&id=".$userID."'> ".$userID."</a></td>
                              </tr>";
                               
                                }
                    }
        echo"</table>"; 

                            echo"</div>";


                    

 

include('inc/admin_footer.php');
 }else{
      $_SESSION['message'] = "Du har inte tillgång till denna sida";
                            header("location: ../admin.php");
 }
  


//logga ut from admin
if(isset($_GET["action"])){
  if($_GET["action"] == "signout"){
      
   // $userid = $_SESSION['userid'];
    session_destroy(); 
    unset($_SESSION['admin']);
    $_SESSION['message'] = "Your have Sign Out succed";
    header("location: ../admin.php");
}
    }
	
?>
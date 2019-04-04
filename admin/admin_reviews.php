<?php error_reporting(E_ALL);
define("TITLE", "Home Admin");
	include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){

                            echo"<div id='right'>";
                            echo"<h1>Alla Recentioner från kunder</h1>";
                
                $sql9 = "SELECT * FROM reviews 
                JOIN products ON
                products.ProductID = reviews.ProductID ORDER BY ID DESC ";
                $result9 = mysqli_query($conn, $sql9);
                     echo "<table>
                              <tr><th>Namn</th>
                              <th>Kommentar</th>
                              <th>Product Namn</th>
                              <th>Product ID</th>
                              </tr>";
                if (mysqli_num_rows($result9) > 0) {
                    while($row9 = mysqli_fetch_array($result9)) {
                        
                    $pro_id = $row9['ProductID'];
                    $pro_namn = $row9['ProductTitle'];
                    $namn = $row9['Name'];
                    $comment = $row9['Comment'];
                    

                              echo"<tr>
                              <td> ".$namn."</td>
                              <td> ".$comment."</td>
                              <td> ".$pro_namn."</td>
                              <td> ".$pro_id."</td>
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
      
    session_destroy(); 
    unset($_SESSION['admin']);
    $_SESSION['message'] = "Your have Sign Out succed";
    header("location: ../admin.php");
}
    }
	
?>
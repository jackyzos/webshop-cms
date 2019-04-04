<?php error_reporting(E_ALL);
define("TITLE", "Home Admin");
	include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){

                            echo"<div id='right'>";
                            echo"<h1>Records från databasen</h1>";
               
    
                $sql1 = "SELECT COUNT(*) FROM categories";
                $result1 = mysqli_query($conn, $sql1);
                $sql2 = "SELECT COUNT(*) FROM products";
                $result2 = mysqli_query($conn, $sql2);
                $sql3 = "SELECT COUNT(*) FROM users";
                $result3 = mysqli_query($conn, $sql3);
                $row1 = mysqli_fetch_array($result1);
                $row2 = mysqli_fetch_array($result2);
                $row3 = mysqli_fetch_array($result3);

                      echo "<table>
                      <tr><th>Categories</th>
                      <th>Products</th>
                      <th>Users</th>
                      </tr>
                      <tr><td> ".$row1[0] ."</td>
                      <td> ".$row2[0] ."</td>
                      <td> ".$row3[0] ."</td>
                      </tr>
                      </table>";

                    echo"</div>";
     
                            echo"<div id='right'>";
                            echo"<h1>Senaste recentioner från kunder</h1>";
                
                $sql9 = "SELECT * FROM reviews 
                JOIN products ON
                products.ProductID = reviews.ProductID ORDER BY ID DESC LIMIT 5";
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
                            echo"<div id='right'>";
                            echo"<h1>Senaste Orders från kunder</h1>";
                
                $sql9 = "SELECT * FROM orders ORDER BY OrderID DESC LIMIT 5";
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

    session_destroy(); 
    unset($_SESSION['admin']);
    $_SESSION['message'] = "Your have Sign Out succed";
    header("location: ../admin.php");
      exit;
}
    }
	
?>
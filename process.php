   <?php error_reporting(E_ALL);
define("TITLE", "Kundvagn");
	include('inc/header.php');  
        echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";

   
 
        if(!empty($_SESSION["username"])){
            if(!empty($_SESSION["userid"])){
            if(!empty($_SESSION["cart"])){ 
                if(isset($_POST["process"])){
                    //betala först spara användare ID i databasen ock hur mycket han har betalat en UNIK köp ID för man här
                    $totalPris=0;
                      
                     foreach($_SESSION["cart"] as $keys => $values)  
                               {  
                                 $totalPris = $totalPris + ($values["item_quantity"] * $values["item_price"]);  
                               } 

                      $sql = "INSERT INTO orders (TotaltPrice, OrderDate, UserID, PaymentID) VALUES ('".$totalPris."', '".date("Y-m-d H:i:s")."', '".$_SESSION['userid']."', '')";
                    $result = mysqli_query($conn, $sql); 
                    
 
                    if(!$result){
                        echo"erro no database";
                    }
                    $OrderID = mysqli_insert_id($conn); //denna ID sparas i ett annat tabelle som är din köp deteliar
                    $items=count($_SESSION['cart']);
                    //lägg varje varan i separat i tabellet i databasen
                    for($i=0;$i<$items;$i++){
                        $qty = $_SESSION['cart'][$i]['item_quantity']++;
                        $pro_id = $_SESSION['cart'][$i]['item_id'];
                        $price = $qty * $_SESSION['cart'][$i]['item_price'];

                        $sql2 = "INSERT INTO orderdetails (Quantity, TotaltPrice, OrderID, ProductID) VALUES ('".$qty."','".$price."', '".$OrderID."', '".$pro_id."')";
                        $result2 = mysqli_query($conn, $sql2);
                    }// doda hela SESSION så även om han går till backa inget kommer hittas
                    unset($_SESSION['cart']); 
                    echo"tack for din order din ORDERNUMMER #".$OrderID."";
                    
                    
                }
                
                          }else{// om kundvagnen är tomt
                                  echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>Kundvagnen är tom</div>";
                          }
                          }else{// om userid är tomt från session
                                  echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>userid hittat inte</div>";
                          }
            
                          }else{// om username är tomt från session
                                    
                                  echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>Du Måste Logga in</div>";
                          }
                          ?>  
                     

                
       <?php  
   

                    echo"</div>";


        mysqli_close($conn);
        


	include('inc/footer.php');
?>
                        
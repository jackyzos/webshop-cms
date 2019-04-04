   <?php error_reporting(E_ALL);
define("TITLE", "Kundvagn");
	include('inc/header.php');  
        echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";

 
 if(isset($_POST["add_to_cart"]))  //jag får data från formulär i produkt-info.php när användare lägger till (clickar på SUBMIT med namn add_to_cart)
 {  
      if(isset($_SESSION["cart"]))  //session bara för kundvagnen
      {  
           $item_array_id = array_column($_SESSION["cart"], "item_id");   
               
               if(array_key_exists ($_GET["id"], $item_array_id)) //jag försökt använda key exists i min array då hittar samma id i min array men funkar inte som jag tänkt men jag tror jag är nära med denna kod
                   {   
                       $prod_id =$_GET['id'];
                       $_SESSION['cart'][$prod_id]['item_quantity'] += 1;
                       // jag lyckas inte med detta när man lägger till samma varan till varukungen den funkar men bara visa produkter
                  

      } elseif(!in_array($_GET["id"], $item_array_id))  { //om produkten inte finns med i kundvafnen
                       
               $count = count($_SESSION["cart"]);
                  $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"], 
                     'item_img'               =>     $_POST["hidden_img"],
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["cart"][$count] = $item_array;  
               
           } 
      }  
      else  //annars kundvagnen står som det är
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],
                'item_img'               =>     $_POST["hidden_img"],
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  //cart?action
 {  
      if($_GET["action"] == "delete")  //cart?action=delete
      {  
           foreach($_SESSION["cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  //cart?action=delete&id=
                {  
                     unset($_SESSION["cart"][$keys]);  //de bort bara det valda produkten som finns med i sessionen eget ID
                     echo '<script>alert("Produkten är bort tagen från kundvagnen")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      } elseif($_GET["action"] == "delete_all") { //ta bort hela kundvagnen eller doda session shopping cart
   
    unset($_SESSION['cart']);
  
} 
     
 }  
 ?>  
  
                          <?php 
        if(!empty($_SESSION["username"])){
            if(!empty($_SESSION["cart"])){ 
                    echo"<h1>KUNDVAGN</h1>";
                echo"<div id='produkt-list'>";
                echo"<h2 class='fortsatt-handla-btn'><a href='cart.php?action=delete_all'>Toma hela Kundvagnen</a></h2>";
                    echo"<div id='kundvagn-list'>";
                    echo"<table>";
                    echo"<tr>";
                          echo"<th>Produkt Namn</th>";
                          echo"<th>Antal</th>";
                          echo"<th>Pris</th>";
                          echo"<th>Total Pris</th>";
                          echo"<th>Action</th>";
                          echo"</tr>";
                               $total = 0;  
                               foreach($_SESSION["cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td> <img src="img/<?php echo $values["item_img"]; ?>" width="66px" height="51" /><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td><?php echo $values["item_price"]; ?>  :-</td>  
                               <td><?php echo number_format($values["item_quantity"] * $values["item_price"]); ?> :-</td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                              <td></td> 
                              <td></td> 
                              
                               <td  align="right">Total</td>  
                               <td align="right"><?php echo number_format($total); ?> :-</td>  
                              <td></td> 
   
                          </tr>  
                          <?php 
                    echo"</table>";
        echo"</div>";
  echo"</div>";

//vill visa USER information innan han betalar

                             $query5 = "SELECT * FROM users where UserID=".$_SESSION['userid']."";  
                             $result5 = mysqli_query($conn, $query5);
                             $row5 = mysqli_fetch_array($result5);
                     echo"<div id='user-info'>";   
                echo"<p>Adress Information</p>";
                         echo"<lu>"; 
                            echo "<li>".$row5['Fname']." ".$row5['Ename']."</li>";
                            echo "<li>".$row5['Adress']."</li>";
                            echo "<li>".$row5['City']."</li>";
                            echo "<li>".$row5['ZipCode']."</li>";
                        echo"</lu>";
                        echo"<hr>";

             echo"<p>Kontakt Information</p>";
                        echo"<p></p>";
                         echo"<lu>"; 
                            echo "<li>".$row5['Phone']."</li>";
                            echo "<li>".$row5['Email']."</li>";
                        echo"</lu>";
                    echo"</div>";
                
                
                
                
                        echo"<div style='text-align:center;font-size:15px;font-weight:bold;color:red;'>Totalt Att Betala ".number_format($total)." :-</div>";
                        echo"<form method='post' action='process.php'>";
                        echo"<input type='submit' class='till-kassa-btn' name='process'  value='Betala' />";
                        echo"<form>";
                          }else{// om kundvagnen är tomt
                                  echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>Kundvagnen är tom</div>";
                          }
                }else{// om kundvagnen är tomt
                    echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>Du Måste Loggar in</div>";
                          }

                    echo"</div>";


        mysqli_close($conn);
        


	include('inc/footer.php');
?>
                        
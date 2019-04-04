<?php

function CountCartItems() {
    $itemCount=0;
    if(isset($_SESSION['cart']) and $_SESSION['cart'] >0){
       $itemCount = array_sum(array_column($_SESSION['cart'], 'item_quantity'));
       echo"<p><span class='kundvagn-text'>Kundvagn (".$itemCount.")</span></p>";
    }else{
           echo "<p><span class='kundvagn-text'>Din Kundvagn är tom (".$itemCount.")</span></p>"; 
    }
 }

function GetProductID() {
    if(isset($_SESSION['cart']) and $_SESSION['cart'] >0){
    $sql = "SELECT * FROM products WHERE ProductID = '".$ID."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result) ;
        $proID = $row['ProductID']; 
        $_SESSION['ProID'] = $proID;
    }else{
           echo "<p><span class='kundvagn-text'>Din Kundvagn är tom (".$_SESSION['ProID'].")</span></p>"; 
    }
 }
function Cartqty() {
    $itemCount=0;
    if(isset($_SESSION['cart']) and $_SESSION['cart'] >0){
       $qty = array_column($_SESSION['cart'], 'item_quantity');
        $_SESSION['qty'] = $qty;
       echo"<p><span class='kundvagn-text'>Kundvagn (".$_SESSION['qty'].")</span></p>";
    }else{
           echo "<p><span class='kundvagn-text'>Din Kundvagn är tom (".$_SESSION['qty'].")</span></p>"; 
    }
 }
?> 



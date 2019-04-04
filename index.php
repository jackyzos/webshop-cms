<?php
    error_reporting(E_ALL);
	define("TITLE", "Online Webbshop"); // namnet på sidan index.php
	include('inc/header.php');
?>

    <?php
    echo"<div id='bigimage'>";
    include('inc/big_image.php');
    echo"</div>";
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<h1>UTVALDA PRODUKTER</h1>";
	echo"<div id='produkt-list'>";
          
//****************************json start*******************************************// 

//koden att hämta data från databasen och skriva på .json fil som finns i inc/data.json
    $sql5 = "select * from products";
    $result5 = mysqli_query($conn, $sql5);

$Produts = array();

while($row5=mysqli_fetch_array($result5)) 
{ 
$proid=$row5['ProductID'];    
$title=$row5['ProductTitle']; 
$price=$row5['ProductPrice']; 

$Produts[] = array('name'=> $title, 'price'=> $price,'proid'=> $proid); // det kommer visas namn pris och ID

} 

$json_string = json_encode($Produts);

$file = 'inc/data.json';
file_put_contents($file, $json_string);

//****************************************json end**********************************// 



                $sql = "SELECT * FROM products ORDER BY ProductID DESC
LIMIT 12";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $produktItems = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        $produktItems[] = $row;
                    }
                   foreach ($produktItems as $produkt){
                      $price = $produkt['ProductPrice'];
                      $pro_id = $produkt['ProductID'];
                      $pro_img = $produkt['ProductImg'];
                      $pro_title = $produkt['ProductTitle'];

                            echo "<div class='box'>";
                            echo "<img src='img/".$pro_img."' alt='' height='90' width='175'/>";
                            echo "<p class='pro-title'>".$pro_title."</p>";
                            echo "<span class='pro-price'>".$price.":-</span>";
                            echo "<span class='buy-btn'><a href='produkt-info.php?id=".$pro_id."'>Buy Now</a></span>";
                            echo "</div>";
                       
                            }
                    
                  }else {
                        echo "Det finns inga Erbjudande Just nu";
                      }

       echo " </div>";
   echo " </div>";  

        mysqli_close($conn);
        
       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>

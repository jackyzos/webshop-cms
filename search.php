
<?php
	define("TITLE", "Search | JanGG Webbshop Online");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
        include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<h1>Sök Resultat</h1>";
    echo"<div id='produkt-list'>";

   if ((isset($_GET['item'])) && (!empty($_GET['item']))){
    $item = $_GET['item']; // eget URl får man när man clickar på Sök knappen
    $min_length = 3; // variable tilldelar med 3
    $output = NULL; 
    
            if(strlen($item) >= $min_length && (!($item === $output))) { // om användare matar in mer eller lika med 3 bokstäver och inte tom eller null annars kommer inte lyckas

                
                $item = htmlspecialchars($item); 
                // detta är för att ändra speciella tycken i webläsare exempel ' till &quot;

                $sql = "SELECT * FROM products
                    WHERE (`ProductTitle` LIKE '%".$item."%')" ; //%$item% är nyckel och % betyder allt om man söker efter Xbox i resultat kan också komma xBOX, Xbox spel, Xbox2  osv

                $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            
                            $produktItems = array();
                            while($row = mysqli_fetch_assoc($result)) {
                    
                              $produktItems[] = $row;

                     foreach ($produktItems as $produkt){ 
              
                    echo "<div class='box'>";
                    echo "<img src='img/".$produkt['ProductImg']."' alt='' height='90' width='175'/>";
                    echo "<p class='pro-title'>".$produkt['ProductTitle']."</p>";
                    echo "<span class='pro-price'>".$produkt['ProductPrice']." :-</span>"; 
                    echo "<span class='buy-btn'><a href='produkt-info.php?id=".$produkt['ProductID']."'>Buy Now</a></span>";
                    echo "</div>";
                     }  
                            }
                            
                }else{ // om man inget sökning matchar får vi detta meddelande
                    echo "Inget results för ".$item;
                }
                                                            }
        }else{ // allt annat inte stämmer får vi detta 
        echo "Mins 3 bokstäver att söka";
        } 

       echo "</div>";
   echo "</div>";
           
              
        mysqli_close($conn);


       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>

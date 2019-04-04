<?php
	define("TITLE", "Erbjudande | JanGG Webbshop Online");
	include('inc/header.php');

// =============== MIDDLE CONTAINER =============== 
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";

    echo "<div id='rightside'>";
    echo  "<h1>Erbjudande</h1>";
	echo  "<div id='produkt-list'>";

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        $produktItems[] = $row;
                    }
                   foreach ($produktItems as $produkt){
                      $price = $produkt['ProductPrice'];
                      $pro_id = $produkt['ProductID'];
                      $pro_img = $produkt['ProductImg'];
                      $pro_title = $produkt['ProductTitle'];
                       if($price >= 4000){ // denna funktion räknas ut priset på REA och sedan skriver ut det nya priset
                          $rea = 0.20 * $price; // rea pris gånger orginala prisen
                          $new_price = $price - $rea; //sedan orginala priset minus rea
              

                            echo "<div class='box'>";
                            echo "<img src='img/".$pro_img."' alt='' height='90' width='175'/>";
                            echo "<p class='pro-title'>".$pro_title."</p>";
                            echo "<span class='pro-price'><del>".$price." :-</del></span>";
                            echo "<span class='pro-price'>".$new_price.":-</span>";
                            echo "<span class='buy-btn'><a href='produkt-info.php?id=".$pro_id."'>Buy Now</a></span>";
                            echo "</div>";}
                            }
                  }else {
                        echo "Det finns inga Erbjudande Just nu";
                      }

       echo " </div>";
   echo " </div>";  

        mysqli_close($conn);
        
            echo "<ul id='pagenumber'>";
            echo "<li class='active'>1</li>";
            echo "<li><a href='#'>2</a></li>";
            echo "<li><a href='#'>3</a></li> ";
       echo " </ul>";
       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>
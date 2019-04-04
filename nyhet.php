<?php
	define("TITLE", "Nya Produkter");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->
    
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
        include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
        echo"<h1>NYHET</h1>";
    echo"<div id='produkt-list'>";

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $produktItems = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        $produktItems[] = $row;}
                    } else {
                             echo "No data";
                        } 
            $i = 0;
            foreach  ($produktItems as $produkt) { 
                if ($i++ > 3) break;
            	
            echo"<div class='large-box'>";
             echo"<img src='img/".$produkt['ProductImg']."' alt='produkt' height='140' width='166'/>";
             echo"<h3>".$produkt['ProductTitle']."</h3>";
             echo"<ul><li>pris:<h1>".$produkt['ProductPrice']."</h1></li></ul>";
             echo"<p>".$produkt['ProductDescription']."</p>";
            echo"<span class='buy-btn-small'><a href='produkt-info.php?id=".$produkt['ProductID']."'>BUY NOW</a></span>";
            echo"<span class='more-btn'><a href='produkt-info.php?id=".$produkt['ProductID']."'>MER</a></span>";
            echo"</div>";
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
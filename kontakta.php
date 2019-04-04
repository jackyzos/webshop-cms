<?php
	define("TITLE", "Kontakta Oss");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->

    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<h1>Kontakta Oss</h1>";
	echo"<div id='produkt-list'>";
                include('inc/form.php');
       echo " </div>";
   echo " </div>";  

       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>


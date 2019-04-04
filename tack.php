<?php
	define("TITLE", "Meddelande har Skickat");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
        include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<div id='kontakt-page'>";
    echo"<h1>Ditt meddelande är Skickat!</h1>";

                $name = $_POST['namn'];
                $email = $_POST['e-mail'];
                $mobile = $_POST['mobil'];
                $subject = $_POST['subjekt'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `contact` (Name, Email, Mobile, Subject, Message) VALUES ('$name', '$email', '$mobile', '$subject', '$message') ";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Couldn't enter data: ".$conn->error);

                }

                echo "<h3>Vi kommer snart att kontakta dig</h3>";

                $conn->close();
              
        echo"</div>";
    echo"</div>";
        echo"<p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo"</div>"; 


    //<!-- =============== MIDDLE CONTAINER END =============== -->

	include('inc/footer.php');

/* här har jag en fil som tar emot information där man sist klickade på submit och med hjälp av $_GET method hämtar jag data från andra fil där som är kopplat både form och action till denna fil "<form action="tack.php" method="get">" om man inte har detta rad i varan form då kommer inte funka

// annars är är det bara hämta olika input namn för varje input därefter GET method samlar allt ihåp och när användare har fylld alla information och  redo att klicka på sumbit då skickas allt information till tack.php genom action.*/


?>



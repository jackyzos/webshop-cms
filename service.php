<?php
	define("TITLE", "Service");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->
    
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<h1>Vanliga Frågor</h1>";
    echo"<div id='produkt-list'>";
    
                $sql = "SELECT * FROM service ORDER BY ID DESC
LIMIT 12";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $serviceItems = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        $serviceItems[] = $row;}
                    
                    } else {
                             echo "0 results";
                        } 
                    
                    foreach ($serviceItems as $Items){
                        
              
            echo"<h1>".$Items['Title']."</h1>";
            echo"<p>".$Items['full_text']."</p>";
			 }

              $conn->close();
              
        echo"</div>";
    echo"</div>";

        echo"<p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";

	  echo"</div>"; 


    //<!-- =============== MIDDLE CONTAINER END =============== -->

	include('inc/footer.php');
?>
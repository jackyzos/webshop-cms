<?php
	define("TITLE", "Produkter | JanGG Webbshop Online");
	include('inc/header.php');

// =============== MIDDLE CONTAINER =============== 
    echo"<div id='middle'>";
	echo"<div id='leftside'>";
     include('inc/left_side.php');
    echo"</div>";

    echo "<div id='rightside'>";
	echo  "<div id='produkt-list'>";

          // innan man får resultat vill jag kontrollera om något av de villkor stämmer sen körs koden annars inget resultat utan ett ERROR medelande 
            //"No Items in this category"
// detta är bra för säkerhet och däremot man för alltid TRUE när det stämmer annars kör inte vidare

// isset exempel category.php?id=10          <--true  <--- fortsätter
// !empty exempel category.php?id=           <--false <--- hamnar i ELSE
// is_numeric exempel category.php?id=asd    <--false <--- hamnar i ELSE

            if ((isset($_GET['id'])) || (!empty($_GET['id'])) || (!is_numeric($_GET['id'])))
                    {
                        $catId = $_GET['id']; //unika URL man får efter dvs varje vara ska ha eget link med hjälp av ID
                    } 
                /* Jag har tre olika tabeller som har relation tillsamans med denna JOIN vill jag visa Produkter där har spicifik categori med uniq ID exempel om jag går till MOBILE kategori hittar vi bara produkter om mobiler osv*/
               $sql = "SELECT * FROM products
                          JOIN categories
                          ON categories.CategoryID = products.CategoryID 
                          WHERE categories.CategoryID = '$catId'";

                /* denna är en API får att vi ska ansluta till databasen skickar vi en fråga till $conn som ligger i inc/connect.php om databasen information hittar och stämmer då hämtas data och körs vidare*/
                $result = mysqli_query($conn, $sql); 


                //här räknas man rader på varan databs om det finns mer än 0 data i databasen då körs annars om det är tom hamnar i ELSE 
                if (mysqli_num_rows($result) > 0) {
                    
                    $produktItems = array(); // jag skappar en array här
                    while($row = mysqli_fetch_assoc($result)) { //jah hämtar data från databasen man kan använda mysqli_fetch_array
                        
                        $produktItems[] = $row;} // här tilldelar jag min databasen rader till en array som jag hade skaffat
                    
                    foreach ($produktItems as $produkt){ // eftersom jag vill visa allt som finns i denna tabell då kör jag en FOREACH loop lättar printas AS $produkt som gäller just här får att vi ska spicifera vilken egenskapar ska jag visa från min databas i PHP fil då lägger jag bara egenskap namn som jag har i min tabell exmpel $produkt['ProduktID'] hämtar jag alla IDs frn kolumn ProduktID
              
                    echo "<div class='box'>";
                    echo "<img src='img/".$produkt['ProductImg']."' alt='' height='90' width='175'/>";//visa bilden till produkten sparat fil namn i databasen annars själva filen finns i server
                    echo "<p class='pro-title'>".$produkt['ProductTitle']."</p>";// hämtar namnet på produkten
                    echo "<span class='pro-price'>".$produkt['ProductPrice']." :-</span>"; // priset
                    echo "<span class='buy-btn'><a href='produkt-info.php?id=".$produkt['ProductID']."'>Buy Now</a></span>";
                    echo "</div>"; // och här ID eftersome jag använder GEt method då behöver jag för varje produkt för att ska generates ny och uniq sida just för denna ID
                    } 
                    
                } else {
                    echo "No Items in this category or this category DOESNT EXITES"; // om allt ovan inte lyckades detta meddelande skriver ut
                } 
            			
       echo "</div>";
   echo "</div>";
           
              
        mysqli_close($conn);//när man hämtar data från databasen och är klart då kopplas  av anslutningen från databasen för säkerhet laddar man om sidan börjar från början igen osv

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
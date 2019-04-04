<?php
	define("TITLE", "Alla produkter");
	include('inc/header.php');

//<!-- =============== MIDDLE CONTAINER =============== -->

    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
    echo"<h1>UTVALDA PRODUKTER</h1>";
	echo"<div id='produkt-list'>";
         

// define how many results you want per page
$results_per_page = 5;

$sql='SELECT * FROM products';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql='SELECT * FROM products LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
  $produktItems[] = $row;
}foreach ($produktItems as $produkt){
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
       echo " </div>";
   echo " </div>";  

   echo "<ul id='pagenumber'>";
for ($page=1;$page<=$number_of_pages;$page++) {
    
    $active = '';
    if(isset($_GET['page']) && $page == $_GET['page'])
    {
        $active = 'class="active"';        
    }
  echo "<li " . $active . "><a href='produkter.php?page=" . $page . "'>" . $page . "</a></li>";

}
   echo " </ul>";



       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>

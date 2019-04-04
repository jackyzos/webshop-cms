
<div id="leftmenu">

<ul>
          <?php
    //länkar till categories hämtas från databasen
                $sql = "SELECT * FROM categories";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $Navs = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        $Navs[] = $row;}
                    
                    } else {
                             echo "0 results";
                        } 
                    
                    foreach ($Navs as $menu){
                      echo "<li><a href=\"category.php?id=$menu[CategoryID]\">$menu[CategoryName]</a></li>";
		}
            ?> 

</ul>
        </div>
         <a href="index.html#">  <img src="img/small-banner.png" alt="sales for this month" height="502" width="158" /></a>
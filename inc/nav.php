
<ul>
          <?php
    //meny som hämtar från databasen
                $sql = "SELECT * FROM navigation ORDER BY ID";
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
                      echo "<li><a href=\"$menu[Link]\">$menu[Title]</a></li>";
		}
            ?> 

</ul>


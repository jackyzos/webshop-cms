<?php include("/../../inc/connect.php"); ?>
<select>
          <?php
    
                $sql = "SELECT * FROM categories";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $cat = array();
                    while($row = mysqli_fetch_assoc($result)) {
                        $cat[] = $row;}
                    
                    } else {
                             echo "0 results";
                        } 
                    
                    foreach ($cat as $list){
                      echo " <option value=".$list[CategoryName].">".$list[CategoryName]."</option>";
		}
            ?> 

</select>

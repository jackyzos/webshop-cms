<style>
b { 
    font-weight: bold;
}
</style>
<?php
    require_once("connect.php");
            if ((isset($_GET['id'])) && (!empty($_GET['id'])))
                    {
                        $id = $_GET['id'];// jag får produkt ID link exempel id=12
                        
                            if ((isset($_POST['submit'])) && (!empty($_POST['submit']))){ 
                             $name = mysqli_real_escape_string($conn,$_POST['f_name']); 
                              $comment = mysqli_real_escape_string($conn, $_POST['f_comment']);
                                
                               $query3 ="INSERT INTO reviews (ProductID, Name, Comment) values('$id','$name','$comment' )";
                               $result = mysqli_query($conn, $query3);
                        }

                    }
                        //här jag vill visa det JOIN tabell 
                     $sql = "SELECT * FROM reviews
                      JOIN products
                      ON products.productID = reviews.ProductID
                      WHERE products.productID = '$id'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $reviewsItems = array();
                    while($row = mysqli_fetch_assoc($result)) {
                       // $pro_id = $row['products.ProductID'];
                        $reviewsItems[] = $row;
                        
                    }
                  
                    foreach ($reviewsItems as $reviews){
                      $name = $reviews['Name'];
                      $comment = $reviews['Comment'];

                        echo "<ul><p class='pro-title'><li><b>".$name.":</b> ".$comment."</li></p><hr></ul>";

                            }                   
                  }else{
                        echo "Det finns inga Recentioner";
                      }

                $conn->close();

?>
     
            
            <form id="review-form" action="" method="post">
           <label for="namn">Namn:</label> 
            <input type="text"  name="f_name" id="namn"/>
           <label for="message">Meddelande:</label> <textarea name="f_comment" id="message"></textarea>
           <input id="submit" name="submit" type="submit" value="Skicka">
           </form> 
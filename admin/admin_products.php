<?php error_reporting(E_ALL);
define("TITLE", "Produkter");
	include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){
 if(isset($_GET["action"])){
  if($_GET["action"] == "list"){

  //*****************************************//
 //      SHOW all Products from database    //
//*****************************************//
$query = "SELECT * FROM Products 
            JOIN categories 
      ON categories.CategoryID = Products.CategoryID
      ORDER BY ProductID ";
$result = mysqli_query($conn, $query); 
?>
 

    <a href="admin_products.php?action=add">Add New Product</a>
    <p></p>
    <table id="list" width='100%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Name</td>
            <td>Category</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($row = mysqli_fetch_array($result)) {         
            echo "<tr>";      
            echo "<td>".$row['ProductID']."</td>";
            echo "<td>".$row['ProductTitle']."</td>";
            echo "<td>".$row['CategoryName']."</td>";
            echo "<td>".$row['ProductPrice']." :-</td>";    
            echo "<td><a href=\"admin_products.php?action=edit&id=$row[ProductID]\">Edit</a> | <a href=\"admin_products.php?action=delete&id=$row[ProductID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
      
        ?>
    </table>
<?php
        }
       }
  //*********************************************//
 //      SHOW all Products from database END    //
//*********************************************//


  //**************************************//
 //      ADD NEW Product to database     //
//**************************************//
 if(isset($_GET["action"])){
  if($_GET["action"] == "add"){

            if(isset($_POST['Submit'])) { 
                        $pro_id = $_POST['pro_id'];
                        $pro_title = $_POST['name']; 
                        $pro_desc = $_POST['desc']; 
                        $pro_price = $_POST['price'];
                        $pro_speci = $_POST['speci'];
                        $pro_details = $_POST['details'];
                        $pro_status = $_POST['status'];
                        $catID = $_POST['cat_id'];
                
                    //ladda up bilden från input där man använder FILE typ
                    
                    $pro_img = rand(1000,100000)."-".$_FILES['img']['name'];//byt namnet på filen med hjälp av RAND funktion 
                    $pro_img_tmp = $_FILES['img']['tmp_name']; 
                    $folder="../img/"; //katalogen som finns i våran server då sparas i den
                
                if(!empty($pro_title . $pro_desc . $pro_price . $pro_speci . $pro_details . $pro_img . $pro_status) && move_uploaded_file($pro_img_tmp,$folder.$pro_img)){  
                    
                $query = "INSERT INTO products (CategoryID,ProductTitle,ProductDescription,ProductPrice,ProductImg,ProductSpecification,ProductDetails,ProductStatus) VALUES('$catID','$pro_title','$pro_desc','$pro_price','$pro_img','$pro_speci','$pro_details','$pro_status')";
                $result = mysqli_query($conn, $query); 
      

                    //display success message
                    echo "<font color='green'>Data added successfully.";
                    echo "<br/><a href='admin_products.php?action=list'>View Result</a>";
                    

                } else { 
                    
                    echo "<font color='red'>1 or more field are empty.</font><br/>";

                    //link to the previous page
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
            }

      ?>
      <form action="admin_products.php?action=add" method="post" enctype="multipart/form-data">
            <p> 
                <label>Name</label>
                <input type="text" name="name">
            </p>
            <p> 
                <label>Description</label>
                <textarea type="text" name="desc"></textarea>
            </p>
            <p> 
                <label>Price</label>
                <input type="text" name="price">
            </p>
            <p> 
                <label>Specification</label>
                <input type="text" name="speci">
            </p>
            <p> 
                <label>Details</label>
                <input type="text" name="details">
            </p>
            <p> 
                <label>Image</label>
                <input type="file" name="img" size="25" />
            </p>
            <p> 
                <label>Status</label>
                <input type="text" name="status">
                <span>1= Finns i Lager</span>
                <span>0= Out of Stock</span>
                
            </p>
            <p> 
                <label>Category</label>
                  <select name="cat_id">
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
                                      echo " <option value=".$list[CategoryID].">".$list[CategoryName]."</option>";
                                        
                        }
                            ?> 
                      
                </select>         
            </p>
            
                
                <p><input type="hidden" name="pro_id"></p>
                <p><input type="submit" name="Submit" value="Add"></p>
            
        
    </form>
<?php        
   }
}

  //******************************************//
 //      ADD NEW Product to database  END    //
//******************************************//

  //**************************************//
 //      EDIT Products from database     //
//**************************************//
 if(isset($_GET["action"])){
  if($_GET["action"] == "edit"){
       
        if(isset($_POST['update'])){    
            $id = $_POST['id'];
            $catID  = $_POST['cat_id'];
            $pro_title = $_POST['name']; 
            $pro_desc = $_POST['desc']; 
            $pro_price = $_POST['price'];
            $pro_speci = $_POST['speci'];
            $pro_details = $_POST['details'];
            $pro_img = $_POST['img'];
            $pro_status = $_POST['status'];

                if(!empty($pro_title . $pro_desc . $pro_price . $pro_speci . $pro_details . $pro_img . $pro_status)){  
                   
                     $query = "UPDATE products SET CategoryID='$catID',ProductTitle='$pro_title',ProductDescription='$pro_desc',ProductPrice='$pro_price',ProductImg='$pro_img',ProductSpecification='$pro_speci',ProductDetails='$pro_details',ProductStatus='$pro_status' WHERE ProductID=$id";
                    
                    $result = mysqli_query($conn, $query);

                    header("Location: admin_products.php?action=list");       
            } else {    
                 echo "<font color='red'>Name field is empty.</font><br/>";

            }
        }

?>
<?php
$id = $_GET['id'];

$query6 = "SELECT * FROM products WHERE ProductID=$id";
$result6 = mysqli_query($conn, $query6); 
 
while($row = mysqli_fetch_array($result6))
{
$pro_title = $row['ProductTitle']; 
$pro_desc = $row['ProductDescription']; 
$pro_price = $row['ProductPrice'];
$pro_speci = $row['ProductSpecification'];
$pro_details = $row['ProductDetails'];
$pro_img = $row['ProductImg'];
$pro_status = $row['ProductStatus'];
$pro_cat = $row['CategoryID'];
}
?>
    <a href="admin_products.php?action=list">Go Back</a>
    <p></p>
    <form name="form1" method="post" action="admin_products.php?action=edit&id="<?php echo $id; ?>>
            <p> 
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $pro_title; ?>">
            </p>
            <p> 
                <label>Description</label>
                    <textarea type="text" name="desc"><?php echo htmlentities($pro_desc);?></textarea>
            </p>
            <p> 
                <label>Price</label>
                <input type="text" name="price" value="<?php echo $pro_price;?>">
            </p>
            <p> 
                <label>Specification</label>
                <input type="text" name="speci" value="<?php echo $pro_speci;?>">
            </p>
            <p> 
                <label>Details</label>
                <textarea type="text" name="details"><?php echo htmlentities($pro_details);?></textarea>
            </p>
            <p> 
                <label>Image</label>
                <input type="text" name="img" value="<?php echo $pro_img; ?>">
            </p>
            <p> 
                <label>Category</label>
                <select name="cat_id">
                          <?php
                               //$catID = $_POST['cat_id'];
                                $query = "SELECT * FROM categories";
                                $result = mysqli_query($conn, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    $cat = array();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $cat[] = $row;}

                                    } else {
                                             echo "0 results";
                                        } 

                                    foreach ($cat as $list){ 

                                        if($list[CategoryID] == $pro_cat){
                                            echo "<option value='$list[CategoryID]' selected>$list[CategoryName]</option>\n";
                                        }else{ 
                                            echo "<option value='".$list[CategoryID]."'>".$list[CategoryName]."</option>";
                                             }

                        }
                            ?> 
            
                </select>
            </p>
            <p> 
                <label>Status</label>
                <input type="text" name="status" value="<?php echo $pro_status; ?>">
                <span>1= Finns i Lager</span>
                <span>0= Out of Stock</span>
            </p>
            <p>
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <input type="submit" name="update" value="Update">
            </p>
</form>
<?php
         }       
}
  //*****************************************//
 //      EDIT Products from database END    //
//*****************************************//

  //*****************************************//
 //      DELETE Products from database      //
//*****************************************//

if(isset($_GET["action"])){
  if($_GET["action"] == "delete"){
      
        $id = $_GET['id'];
 
        
        $query = "DELETE FROM products WHERE ProductID=$id";
        $result = mysqli_query($conn, $query);
        header("Location: admin_products.php?action=list");

      
      
      }
    }


  //*****************************************//
 //      DELETE Products from database END  //
//*****************************************//
 include('inc/admin_footer.php');
 }else{
      $_SESSION['message'] = "Du har inte tillgång till denna sida";
                            header("location: ../admin.php");
 }

?>
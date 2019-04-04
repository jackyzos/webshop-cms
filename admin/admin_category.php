<?php
	include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){
define("TITLE", "Categories");


 if(isset($_GET["action"])){
  if($_GET["action"] == "listCat"){
  //*****************************************//
 //      SHOW all Products from database    //
//*****************************************//
$query = "SELECT * FROM categories
            ORDER BY CategoryID ";
$result = mysqli_query($conn, $query); 
?>
 

    <a href="admin_category.php?action=addCat">Add New Category</a>
    <p></p>
 
    <table id="list" width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        <?php 

        while($row = mysqli_fetch_array($result)) {         
            echo "<tr>";      
            echo "<td>".$row['CategoryID']."</td>";
            echo "<td>".$row['CategoryName']."</td>";
            echo "<td><a href=\"admin_category.php?action=editCat&id=$row[CategoryID]\">Edit</a> | <a href=\"admin_category.php?action=deleteCat&id=$row[CategoryID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
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
  if($_GET["action"] == "addCat"){
      


            if(isset($_POST['Submit'])) { 
                        $cat_id = $_POST['cat-id'];
                        $cat_name = $_POST['cat-name']; 
                        $cat_desc = $_POST['cat-desc']; 
                
                if(!empty($cat_name . $cat_desc)){  
                    
                $query = "INSERT INTO categories (CategoryName,CategoryDesc) VALUES('$cat_name','$cat_desc')";
                $result = mysqli_query($conn, $query); 
                  

                    echo "<font color='green'>Data added successfully.";
                     echo "<br/><a href='admin_category.php?action=listCat'>View Result</a>";
                    

                } else { 
                    
                    echo "<font color='red'>1 or more field are empty.</font><br/>";

                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
            }
      
  
?>
      <form action="admin_category.php?action=addCat" method="post" enctype="multipart/form-data">
            <p> 
                <label>Name</label>
                <input type="text" name="cat-name">
            </p>
            <p> 
                <label>Description</label>
                <input type="text" name="cat-desc">
            </p>
            <p> 
                
                <input type="hidden" name="cat-id">
            </p>
            <p> 
                
                <input type="submit" name="Submit" value="Add">
            </p>
        
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
  if($_GET["action"] == "editCat"){
       
        if(isset($_POST['update'])){    
            $cat_id = $_POST['cat-id'];
            $cat_name = $_POST['cat-name']; 
            $cat_desc = $_POST['cat-desc']; 


                if(!empty($cat_name . $cat_desc)){  
                   
                     $query = "UPDATE categories SET CategoryName='$cat_name',CategoryDesc='$cat_desc' WHERE CategoryID='$cat_id'";
                    
                    $result = mysqli_query($conn, $query);

                    header("Location: admin_category.php?action=listCat");       
            } else {    
                 echo "<font color='red'>Name field is empty.</font><br/>";

            }
        }

?>
<?php

$id = $_GET['id'];

$query = "SELECT * FROM categories WHERE CategoryID='$id'";
$result = mysqli_query($conn, $query); 
 
while($row = mysqli_fetch_array($result))
{
$id = $row['CategoryID']; 
$cat_name = $row['CategoryName']; 
$cat_desc = $row['CategoryDesc']; 

?>
    <a href="admin_category.php?action=listCat">Go Back</a><br/><br/>
    <form name="form1" method="post" action="admin_category.php?action=editCat&id="<?php echo $id; ?>>
            <p> 
                <label>Name</label>
                <input type="text" name="cat-name" value="<?php echo $cat_name; ?>">
            </p>
            <p> 
                <label>Description</label>
                <input type="text" name="cat-desc" value="<?php echo $cat_desc;?>">
            </p>
            <p>
                <input type="hidden" name="cat-id" value=<?php echo $_GET['id'];?>>
                <input type="submit" name="update" value="Update">
            </p>
        </form>

<?php
    }
         }       
}
  //*****************************************//
 //      EDIT Products from database END    //
//*****************************************//

  //*****************************************//
 //      DELETE Products from database      //
//*****************************************//

if(isset($_GET["action"])){
  if($_GET["action"] == "deleteCat"){
      
        $id = $_GET['id'];
 
        
        $query = "DELETE FROM categories WHERE CategoryID=$id";
        $result = mysqli_query($conn, $query);
        header("Location: admin_category.php?action=listCat");

      
      
      }
    }
include('inc/admin_footer.php');
 }else{
                            header("location: ../admin.php");
 }
  //*****************************************//
 //      DELETE Products from database END  //
//*****************************************//

?>
 <?php if(isset($_SESSION['admin'])){    ?>             
<aside>
                        <lu>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="admin_category.php?action=listCat">Category</a></li>
                            <li><a href="admin_products.php?action=list">Pruducts</a></li>
                            <li><a href="admin_user.php?action=listUser">Users</a></li>
                            <li><a href="admin_orders.php">Orders</a></li>
                            <li><a href="admin_reviews.php">Reviews</a></li>
                        </lu>
                    </aside>
 <?php }else{
      $_SESSION['message'] = "Du har inte tillgång till denna sida";
                            header("location: ../index.php");
 }    ?>  
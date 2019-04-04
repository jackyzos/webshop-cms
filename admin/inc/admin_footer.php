<?php
if(isset($_SESSION['admin'])){  
?>
</section>
</div>    

</div>
</body>

</html>
<?php }else{
      $_SESSION['message'] = "Du har inte tillgång till denna sida";
                            header("location: ../index.php");
 }
?>
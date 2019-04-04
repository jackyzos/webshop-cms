<?php 
    if(isset($_SESSION['message'])){
        echo"<div id='error'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    }
?>
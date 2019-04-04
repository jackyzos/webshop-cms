<?php session_start();
error_reporting(E_ALL); 
include_once("/../../inc/connect.php");

?>


<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="pagewrapper">
    
            <header>
                
<?php 
     if(isset($_SESSION['admin'])){ 
        $usertype = mysqli_real_escape_string($conn, $_SESSION['admin']); 
       $queryA = "SELECT * FROM users WHERE UserType='$usertype'";
        $resultA = mysqli_query($conn, $queryA);
         $rowA = mysqli_fetch_assoc($resultA);
         if($usertype == $_SESSION['admin']){
             
            $_SESSION['userid'] = $rowA['UserID'];
            $_SESSION['useradmin'] = $rowA['UserName'];

            ?>
                
            <h1>WebbShop Admin</h1>
            <li>Welcome: <a  href="admin_user.php?action=editUser&id=<?php  echo $_SESSION['userid']; ?>"><?php  echo $_SESSION['useradmin']; ?></a></li>
            <li><a  href="logout.php">logout</a></li>
            </header>
        <div id='middle'>
      <?php  include('inc/admin_leftside.php'); 
             
         }
  }
    
            ?>
            <section>
               
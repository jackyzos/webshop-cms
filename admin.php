<?php session_start();
error_reporting(E_ALL);
define("TITLE", "Admin Login"); 
	require_once("inc/connect.php");

if (isset($_POST['adminbtn'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

             $sql ="SELECT Username,Password,UserType FROM users WHERE Username='$username' AND Password='$password' ";
             $result = mysqli_query($conn, $sql); 
            
                if(mysqli_num_rows($result) == 1){
                    while($row = mysqli_fetch_assoc($result)) {
                        $userType = $row['UserType'];
                        if($userType == 1){
                           $_SESSION['admin'] = $userType; 
                            header("location: admin/index.php");
                         }else{
  
                            $_SESSION['message'] = "du har inte tillgång till den här sidan";
                            header("location: admin.php");
                    exit;
                            
                        }
                        
                        }
                }else{
                    $_SESSION['message'] = "Uppgifterna du angav är felaktiga. Försök igen.";
                    
                }
//}
//}
    
}


?>

	
<!DOCTYPE html>
<html>
    <head>
    <title><?php echo TITLE; ?></title>
	<link href="css/form.css" rel="stylesheet" type="text/css" />
    </head>
<body>

<div id="whrap">

        <div id="admin">
            <?php include('inc/session.php'); ?>
            <h3>Logga In</h3>
            <form id="formAD" action="admin.php" method="post">
                <div class="left-label">
                <p><label for="username">Username*</label> 
                    <input type="text" name="username" id="frnamn" required/></p>
                <p><label for="password">Lösenord*</label> 
                    <input type="password" name="password" id="password" required/></p>
                </div>
                <input  type="submit" id="skicka-nu" name="adminbtn" value="Logga In">
            </form>
        </div>
    </div>
</body>
</html>
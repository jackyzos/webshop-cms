<?php error_reporting(E_ALL);
define("TITLE", "Logga IN");
	include('inc/header.php');
	require_once("inc/connect.php");

if (isset($_POST['loginbtn'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
   // $userid =  $_GET['id'];
    
//if (isset($_SESSION['username'] && $_GET['user'])){
            //create user
             $sql ="SELECT UserID,UserName,Password,UserType FROM users WHERE Username='$username' AND Password='$password' ";
             $result = mysqli_query($conn, $sql); 
            
                if(mysqli_num_rows($result) == 1){
                    while($row = mysqli_fetch_assoc($result)) {
                        $userType = $row['UserType'];
                        if($userType == 1){
                           $_SESSION['admin'] = $userType; 
                       header("location: admin/index.php");
                         }else{
                          //  $id = (isset($_GET['uid'])) ? $_GET['uid'] : $_SESSION['username'];// 
                    //   if( !isset($_SESSION['user']) ) {
                    $_SESSION['message'] = "Du är inloggat som: $username ";
                   $_SESSION['username'] = $username;
                    $_SESSION['userid'] = $row['UserID'];
                   header("location: user.php?uid=".$_SESSION['userid']."");// efter när användare loggar in då skickas has till index.php
                    exit;
                            
                        }
                        
                        }
                }else{
                    $_SESSION['message'] = "Uppgifterna du angav är felaktiga. Försök igen.";
                    
                }
//}
//}
    
}

    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
	echo"<div id='produkt-list'>";
?>

	<?php include('inc/session.php'); ?>
        <div id="kundvagn">
            <h3>Logga In</h3>
            <h4>LOGIN DEMO</h4>
            <h5>USER: User_new</h5>
            <h5>PASS: 6633</h5>
            <form action="login.php" method="post">
                <div class="left-label">
                <p><label for="username">Username*</label> 
                    <input type="text" name="username" id="frnamn" required/></p>
                <p><label for="password">Lösenord*</label> 
                    <input type="password" name="password" id="password" required/></p>
                </div>
            
                <p class="glomt">
                   <a href="#">Glömt Lösenordet?</a>
                   <a href="register.php">Registera</a>  
                </p>
                <input  type="submit" id="skicka-nu" name="loginbtn" value="Logga In">
            </form>
        </div>

<?php
       echo " </div>";
   echo " </div>";  

        mysqli_close($conn);
        
       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    // =============== MIDDLE CONTAINER END =============== 

	include('inc/footer.php');
?>
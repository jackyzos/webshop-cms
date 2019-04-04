<?php error_reporting(E_ALL);
define("TITLE", "Logga IN");
	include('inc/header.php');
	require_once("inc/connect.php");

// du måste passera 4 säkerhet kontoll innan du går vidare annars hamnar du på fel sidan
// 1- du måste logga in
// 2- du måste ha userid sparat i session efter du loggat in
// 3- du måste ange det rätt URL som är lika med din användare ID som är sparat i databasen exempel user.php?uid=5
// 4- ditt ID (5) måste vara lika med SESSION USERID 
// när du har passerat alla denna då för du uppdatera ditt profil 




    echo"<div id='middle'>";
	echo"<div id='leftside'>";
    include('inc/left_side.php');
    echo"</div>";
    echo"<div id='rightside'>";
	echo"<div id='produkt-list'>";
?>
<?php include('inc/session.php'); 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $fname=$_POST['fname'];
    $ename=$_POST['ename'];
    $email=$_POST['email'];    
    $phone=$_POST['phone'];
    $adress=$_POST['adress'];
    $co=$_POST['co']; 
    $city=$_POST['city'];
    $zipcode=$_POST['zipcode']; 
    
    // om fält är tomt
    if(empty($fname) || empty($ename) || empty($email) || empty($phone) || empty($adress) || empty($city) || empty($zipcode)) {            
        if(empty($fname)) {
            echo "<p>Förnamn fält är tomt</p>";
        }
        
        if(empty($ename)) {
            echo "<p>Efternamn fält är tomt</p>";
        }
        
        if(empty($email)) {
            echo "<p>E-post fält är tomt</p>";
        }        
        if(empty($phone)) {
            echo "<p>Mobil fält är tomt</p>";
        }
        
        if(empty($adress)) {
            echo "<p>Adress fält är tomt</p>";
        }
         
        if(empty($city)) {
            echo "<p>Ort fält är tomt</p>";
        }
        
        if(empty($zipcode)) {
            echo "<p>Postnummer fält är tomt</p>";
        } 
    } else {    
        //annars updatera all fält i min databasen
        $query = "UPDATE users SET Ename='$ename',Fname='$fname',Email='$email',Phone='$phone',Adress='$adress',CO='$co',City='$city',ZipCode='$zipcode' WHERE UserID=$id";
        $result = mysqli_query($conn, $query);
        
        //skicka användare efter uppdaterat klart sin profil
        header("Location: user.php?uid=".$_SESSION['userid']."");
        $_SESSION['message'] = "Dina information är uppdaterat";
    }
}
?>
<?php
//här får vi URl av det X user
    
    if ((isset($_GET['id'])) && (!empty($_GET['id'])) && is_numeric($_GET['id'])){
        $id=$_GET['id'];
 
//här hämtar vi data från X användare
$query = "SELECT * FROM users WHERE UserID=".$id."";
$result = mysqli_query($conn, $query);
        
// denna SESSION är när användare har loggat in då sparar vi hans ID i SESSION userid detta är bra att använda för varje användare kan har till gång bara til sin information och inte en annan USER        
if(isset($_SESSION['username'])){ // denna är när användare loggar in
if(isset($_SESSION['userid'])){ 
    
if($id == $_SESSION['userid']){
 if(mysqli_num_rows($result) == 1) { 
while($row = mysqli_fetch_array($result)){
    
    $ename=$row['Ename'];
    $fname=$row['Fname'];
    $email=$row['Email'];    
    $phone=$row['Phone'];
    $adress=$row['Adress'];
    $co=$row['CO']; 
    $city=$row['City'];
    $zipcode=$row['ZipCode'];

?>

    <div id="kundvagn">
    <form method="post" action="edit.php">
        <table>
            <tr> 
                <td>Förnamn</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
                <td>Efternamn</td>
                <td><input type="text" name="ename" value="<?php echo $ename;?>"></td>
            </tr>
            <tr> 
                <td>E-post</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Mobil</td>
                <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
            <tr> 
                <td>Adress</td>
                <td><input type="text" name="adress" value="<?php echo $adress;?>"></td>
            </tr>
            <tr> 
                <td>CO</td>
                <td><input type="text" name="co" value="<?php echo $co;?>"></td>
            </tr>
            <tr> 
                <td>Ort</td>
                <td><input type="text" name="city" value="<?php echo $city;?>"></td>
            </tr>
            <tr> 
                <td>Postnummer</td>
                <td><input type="text" name="zipcode" value="<?php echo $zipcode;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>

<?php
              }
          }
         }else{
        echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERROR! Du har inte tillgång till denna sidan</div>"; //om inget UID hittad i URL hamnar du också här eller om ID är tomt
    } 
         }else{
        echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERROR! Du måste loggar in först</div>"; //om inget UID hittad i URL hamnar du också här eller om ID är tomt
    } 
     }else{
        echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERROR! Du måste loggar in först</div>"; //om inget UID hittad i URL hamnar du också här eller om ID är tomt
    } 
     }else{
        echo"<div style='text-align:center;font-size:30px;font-weight:bold;'>ERROR! Sidan hittade inte</div>"; //om du inte loggar in 
    }  

       echo " </div>";
   echo " </div>";  

        mysqli_close($conn);
        
       echo " <p class='fri-frakt'>FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>";
	  echo "</div> ";
    

	include('inc/footer.php');
?>
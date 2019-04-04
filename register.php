<?php error_reporting(E_ALL); // raporterar alla fel
define("TITLE", "Registera");
    include('inc/header.php');
// detta koden körs när man klickat på submiten som har namnet 'registerbtn' 
// 'mysqli_real_escape_string' är för att skydda tycken som bakslasher semikolen från AQL INJECTION för en attacker brukar använda quotes och bakslasher när han börjar sin attack.
//variabel som tilldelar med attribute som ska hämtas från formulär
if (isset($_POST['registerbtn'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']); 
    //exempel inpute som har name=username i form"
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $person_nr = mysqli_real_escape_string($conn, $_POST['person_nr']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $adress = mysqli_real_escape_string($conn, $_POST['adress']);
    $co = mysqli_real_escape_string($conn, $_POST['co']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    

    // om detta IF villkor är sant då går vidare till $check annars hamnar i sista else "löseordet matchar inte varandra"
        if ($_POST['password']== $_POST['password2']) {
            //create user
        //när användare har fyllt formulär och klickat på knappen då gå igenom databasen och de uppgifterna som är fyllda av han om Username och Email matchar varandra kommer hamna i en av de två villkor annars hamnar i näst sista else $sql  
        $check = "SELECT * FROM users WHERE UserName= '".$username."' OR Email= '".$email."' ";
        $result = mysqli_query($conn, $check);
        $row = mysqli_fetch_assoc($result);
            if ($username==$row['UserName'])
            {
                $_SESSION['message'] = "användare namn finns redan: $username";
            }
            elseif($email==$row['Email'])
            {
                 $_SESSION['message'] = "E-post adressen finns redan: $email";
            }else{
                    //här är det sista grej kommer vara script att jobba och det att lägger till information i databasen som var fyllda av användare
                     $sql ="INSERT INTO users (UserName, Password, PersonNumber, Fname, Ename, Email, Phone, Adress, CO, City, ZipCode) values('$username' ,'$password' , '$person_nr','$f_name' , '$l_name','$email' , '$phone','$adress' , '$co','$city' , '$zip')";
                      $result = mysqli_query($conn, $sql);   
                      $_SESSION['message'] = "Du är inloggat som: $username "; // meddelande kommer visas när han landas
                      $_SESSION['username'] = $username; // det användare namn han valde
                      header("location: index.php"); //efter när är det klart skickas han till index.php
                        exit;
            }        
            
        }
    
    else{
            $_SESSION['message'] = "löseordet matchar inte varandra";
        }
    
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
            <h3>Kunduppgifter</h3>
            <form action="register.php" method="post">
                <div class="left-label">
                <p><label for="username">Användare*</label> <input type="text" name="username" id="frnamn" placeholder="batman_96" required autofocus/></p>
                <p><label for="password">Lösenord*</label> <input type="password" name="password" id="password" required/></p>
                 <p><label for="password2">Bekräfta Lösenord*</label> <input type="password" name="password2" id="password" required/></p>
                <p><label for="frnamn">För Namn*</label> <input type="text" name="f_name" id="f_name" placeholder="Erik" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="ename">Efter Namn*</label> <input type="text" name="l_name" id="l_name" placeholder="Clas" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="mobil">Mobil*</label> <input type="text" name="phone" id="mobil" placeholder="0712345678"  pattern="\d{3}\d{7}" maxlength="10" size="10" title="0736589652" required/></p>


                </div>
                
                <div class="right-label">
                 <p><label for="pnumber">Personnumer*</label> <input type="text" name="person_nr" id="person_nr" placeholder="19950526XXXX" pattern="\d{8}\d{4}" maxlength="12" size="12" title="19950526XXXX" required/></p>
                <p><label for="e-mail">E-post*</label> <input type="email" name="email" id="e-mail" placeholder="demo@demo.se" required/></p>
                <p><label for="adress">Adress*</label> <input type="text" name="adress" id="adress" required/></p>
                <p><label for="co">C/O:</label> <input type="text" name="co" id="co"  pattern="^[a-zA-ZåäöÅÄÖ ]+$"/></p>
                <p><label for="ort">ORT*</label> <input type="text" name="city" id="ort" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="postnummer">Postnummer*</label> <input type="text" name="zip" id="postnummer" placeholder="41511"  pattern="\d{3}\d{2}" maxlength="5" size="5" title="41511" required/></p>
                <p><label for="land">Land</label> <input type="text" name="county" id="land"  value="Sverige" disabled/></p>
                    
               
                
                <p class="obs">* Obligatoriska fält</p><input id="skicka-nu" name="registerbtn" type="submit" value="Registera">
                     </div>
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
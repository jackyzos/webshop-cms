<?php
include('inc/admin_header.php');
 if(isset($_SESSION['admin'])){
 if(isset($_GET["action"])){
  if($_GET["action"] == "listUser"){
  //**************************************//
 //      SHOW all users from database    //
//**************************************//
$query = "SELECT * FROM users
            ORDER BY UserID ";
$result = mysqli_query($conn, $query); 
?>
 

    <a href="admin_user.php?action=addUser">Add New User</a>
    <p></p>
 
    <table id="list" width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php 

        while($row = mysqli_fetch_array($result)) {         
            echo "<tr>";      
            echo "<td>".$row['UserID']."</td>";
            echo "<td>".$row['UserName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td><a href=\"admin_user.php?action=editUser&id=$row[UserID]\">Edit</a> | <a href=\"admin_user.php?action=deleteUser&id=$row[UserID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
      
        ?>
    </table>
<?php
}
     }
  //*****************************************//
 //      SHOW all users from database END   //
//*****************************************//

//**************************************//
 //      ADD NEW Product to database     //
//**************************************//
 if(isset($_GET["action"])){
  if($_GET["action"] == "addUser"){
      


            if(isset($_POST['Submit'])) { 
            $user_id = $_POST['user-id'];
            $username = mysqli_real_escape_string($conn, $_POST['username']); 
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
                
            $check = "SELECT * FROM users WHERE UserName= '".$username."' OR Email= '".$email."' ";
            $result = mysqli_query($conn, $check);
            $row = mysqli_fetch_assoc($result);
            if ($username==$row['UserName'])
            {
                echo "<font color='red'>användare namn finns redan: $username</font><br/>";
            }
            elseif($email==$row['Email'])
            {
                echo "<font color='red'>E-post adressen finns redan: $email</font><br/>";
            }else{
                    //här är det sista grej kommer vara script att jobba och det att lägger till information i databasen som var fyllda av användare
                     $sql ="INSERT INTO users (UserName, Password, PersonNumber, Fname, Ename, Email, Phone, Adress, CO, City, ZipCode) values('$username' ,'$password' , '$person_nr','$f_name' , '$l_name','$email' , '$phone','$adress' , '$co','$city' , '$zip')";
                      $result = mysqli_query($conn, $sql);   
                    
                     echo "<font color='green'>Data added successfully.";
                     echo "<br/><a href='admin_user.php?action=editUser&id=".$user_id."'>View Result</a>";
                        
            }        
            
        }
    
    else{
         echo "<font color='red'>löseordet matchar inte varandra</font><br/>";
        }

      ?>
      <form action="admin_user.php?action=addUser" method="post" enctype="multipart/form-data">
                <div id="user-form">
                <p><label for="username">Användare*</label> 
                    <input type="text" name="username" id="frnamn" placeholder="batman_96" required autofocus/></p>
                <p><label for="password">Lösenord*</label> 
                    <input type="password" name="password" id="password" required/></p>
                 <p><label for="password2">Bekräfta Lösenord*</label> 
                     <input type="password" name="password2" id="password" required/></p>
                <p><label for="frnamn">För Namn*</label> 
                    <input type="text" name="f_name" id="f_name" placeholder="Erik" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
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
                    
               
                <input type="hidden" name="cat-id">
                <p class="obs">* Obligatoriska fält</p><input type="submit" name="Submit" value="Add">
                     </div>
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
  if($_GET["action"] == "editUser"){
       

            if(isset($_POST['update'])) { 
            $user_id = $_POST['user-id'];
            $Newusername = mysqli_real_escape_string($conn, $_POST['username']); 
            $Newpassword = mysqli_real_escape_string($conn, $_POST['password']);
            $Newpassword2 = mysqli_real_escape_string($conn, $_POST['password2']);
            $Newf_name = mysqli_real_escape_string($conn, $_POST['f_name']);
            $Newl_name = mysqli_real_escape_string($conn, $_POST['l_name']);
            $Newphone = mysqli_real_escape_string($conn, $_POST['phone']);
            $Newperson_nr = mysqli_real_escape_string($conn, $_POST['person_nr']);
            $Newemail = mysqli_real_escape_string($conn, $_POST['email']);
            $Newadress = mysqli_real_escape_string($conn, $_POST['adress']);
            $Newco = mysqli_real_escape_string($conn, $_POST['co']);
            $Newcity = mysqli_real_escape_string($conn, $_POST['city']);
            $Newzip = mysqli_real_escape_string($conn, $_POST['zip']);
                
            $check = "SELECT * FROM users WHERE UserID= '".$user_id."'";
            $result = mysqli_query($conn, $check);
            $row = mysqli_fetch_assoc($result);
            $username = $row['UserName'];    
            $email = $row['Email'];
            $password = $row['Password']; 
            $f_name = $row['Fname'];
            $l_name = $row['Ename'];
            $phone = $row['Phone'];
            $person_nr = $row['PersonNumber'];
            $email = $row['Email'];
            $adress = $row['Adress'];
            $co = $row['CO'];
            $city = $row['City'];
            $zip = $row['ZipCode'];
            
            if ($_POST['password']== $_POST['password2']) {
                
             if ($Newusername!=$row['UserName']){
                     $sql0 =  "UPDATE users SET UserName='$Newusername' WHERE UserName='$username' AND UserID='$user_id'";
                     $result = mysqli_query($conn, $sql0);  
                 
                     
            }
            if ($Newpassword != $row['Password'] && $Newpassword==$Newpassword2 ){
                     $sql2 =  "UPDATE users SET Password='$Newpassword' WHERE Password='$password' AND UserID='$user_id'";
                     $result = mysqli_query($conn, $sql2);   
                    
                 
            }
            if ($Newemail!=$row['Email']){

                         $sql3 =  "UPDATE users SET Email='$Newemail' WHERE Email='$email'";
                         $result = mysqli_query($conn, $sql3);   

                 
            }
            if(!empty($Newperson_nr . $Newf_name . $Newl_name . $Newemail . $Newphone . $Newadress . $Newco . $Newcity . $Newzip)){

                     $sql5 ="UPDATE users SET  PersonNumber='$Newperson_nr', Fname='$Newf_name', Ename='$Newl_name', Email='$Newemail', Phone='$Newphone', Adress='$Newadress', CO='$Newco', City='$Newcity', ZipCode='$Newzip' WHERE UserID=$user_id";
                      $result = mysqli_query($conn, $sql5);   
                    
                     echo "<font color='green'>Data added successfully.";
                     echo "<br/><a href='admin_user.php?action=editUser&id=".$user_id."'>View Result</a>";
                        
            }        
            
        }else{
                     echo "<font color='red'>löseordet matchar inte varandra</font><br/>";
                     echo "<br/><a href='admin_user.php?action=editUser&id=".$user_id."'>Go Back</a>";
        }
    }
?>
<?php

$id = $_GET['id'];

$query7 = "SELECT * FROM users WHERE UserID='$id'";
$result7 = mysqli_query($conn, $query7); 
 
while($row = mysqli_fetch_assoc($result7)){

           $username = $row['UserName']; 
            $password = $row['Password'];
            $f_name = $row['Fname'];
            $l_name = $row['Ename'];
            $phone = $row['Phone'];
            $person_nr = $row['PersonNumber'];
            $email = $row['Email'];
            $adress = $row['Adress'];
            $co = $row['CO'];
            $city = $row['City'];
            $zip = $row['ZipCode'];

?>
    <a href="admin_user.php?action=listUser">Go Back</a><br/><br/>
    <form name="form1" method="post" action="admin_user.php?action=editUser&id="<?php echo $id;?>>
                <div class="left-label">
                <p><label for="username">Användare*</label> 
                    <input type="text" name="username" value="<?php echo $username;?>"required/></p>
                <p><label for="password">Lösenord*</label> 
                    <input type="password" name="password" value="<?php echo $password;?>" required/></p>
                 <p><label for="password2">Bekräfta Lösenord*</label> 
                     <input type="password" name="password2" value="<?php echo $password;?>" required/></p>
                <p><label for="frnamn">För Namn*</label> 
                    <input type="text" name="f_name" value="<?php echo $f_name;?>" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="ename">Efter Namn*</label> 
                    <input type="text" name="l_name" value="<?php echo $l_name;?>" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="mobil">Mobil*</label> 
                    <input type="text" name="phone" value="<?php echo $phone;?>"  pattern="\d{3}\d{7}" maxlength="10" size="10" title="0736589652" required/></p>

                 <p><label for="pnumber">Personnumer*</label> 
                     <input type="text" name="person_nr" value="<?php echo $person_nr;?>" pattern="\d{8}\d{4}" maxlength="12" size="12" title="19950526XXXX" required/></p>
                <p><label for="e-mail">E-post*</label> 
                    <input type="email" name="email" value="<?php echo $email;?>" required/></p>
                <p><label for="adress">Adress*</label> 
                    <input type="text" name="adress" value="<?php echo $adress;?>" required/></p>
                <p><label for="co">C/O:</label> 
                    <input type="text" name="co" value="<?php echo $co;?>"  pattern="^[a-zA-ZåäöÅÄÖ ]+$"/></p>
                <p><label for="ort">ORT*</label> 
                    <input type="text" name="city" value="<?php echo $city;?>" pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                <p><label for="postnummer">Postnummer*</label> 
                    <input type="text" name="zip" value="<?php echo $zip;?>"  pattern="\d{3}\d{2}" maxlength="5" size="5" title="41511" required/></p>
                <p><label for="land">Land</label> <input type="text" name="county" id="land"  value="Sverige" disabled/></p>
                    
               
                <input type="hidden" name="user-id" value=<?php echo $_GET['id'];?>>
                <p class="obs">* Obligatoriska fält</p><input type="submit" name="update" value="Update">
                     </div>
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
  if($_GET["action"] == "deleteUser"){
      
        $id = $_GET['id'];
 
        
        $query = "DELETE FROM users WHERE UserID=$id";
        $result = mysqli_query($conn, $query);
        header("Location: admin_user.php?action=listUser");

      
      
      }
    }


  //*****************************************//
 //      DELETE Products from database END  //
//*****************************************//
     include('inc/admin_footer.php');
 }else{
                            header("location: ../admin.php");
 }

?>
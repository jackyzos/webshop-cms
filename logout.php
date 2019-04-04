<?php error_reporting(E_ALL);
    session_start();
    session_destroy(); 
    unset($_SESSION['username']);
    $_SESSION['message'] = "Your have Sign Out succed";
    header("location: login.php");
//när man vill logga ut från hemsidan då denna kod som gäller den förstoras all startade session av det användare man har eller man har loggat inte då glömmer webbläsare om dig och känner inte igen dig
?>

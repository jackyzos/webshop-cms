<?php
// anslutning eget fil då behöver jag inte repetera på varje fil där jag vill hämta data från utan anslutning lägger här och jag bara inkluderar filen i header och skickar frågar till $CONN
       // online server info


        // local machine info
		//$servername = "localhost";
		//$username = "username";
		//$password = "password";
		//$dbname = "database";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");// för data från databasen om annat språk än englska
        // här testar vi om vi inte når dabasen då dör ansluting och visar meddelande Connetion faild
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
?> 


<?php session_start();
//===========================================
//DATABASE: CONNECT
//===========================================
require_once("inc/connect.php");
    include("inc/arrays.php");
include("inc/function.php");
//include("/../addtocart.php");

?>

<!DOCTYPE HTML>
<html lang="sv">
  <head>
  <title><?php echo TITLE; ?></title>
    <meta charset="UTF-8" >
    <meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      </script>
      <script src="js/script.js"></script>


    <!-- Jquery för sök bar hämtar data från json fil -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#searchlive').keyup(function(event) {
            $('#result').html('');
            var searchField = $('#searchlive').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('inc/data.json',function(data) {
                $.each(data, function(key, value) {
                    if (value.name.search(expression) != -1 || value.proid.search(expression) != -1 || value.name.search(expression) != -1 )
                    {
                     $('#result').append('<li id="live_results"><a href="produkt-info.php?id='+value.proid+'" > '+value.name+' <a/>  | <span class="text-_price">'+value.price+' :-</span></li>');
                    }
            });
        });
    });
    });
    </script>


  </head>
<body>
   
<div id="pagewrap">
      <!-- =============== HEADER =============== -->
    <div id="top-nav">        
        <ul>
          <?php  include('inc/session.php'); ?>
            <?php if(isset($_SESSION['username'])): 
            $user = $_SESSION['username'];
            $userid = $_SESSION['userid'];
            ?>
            <li><a  href="user.php?uid=<?php  echo $userid; ?>"><?php  echo $user; ?></a></li>
            <li><a  href="user.php?uid=<?php  echo $userid; ?>">Mitt Konto</a></li>
            <li><a  href="logout.php">logout</a></li>
            <?php else: ?>
              <li ><a class="link" href="login.php" style="text-decoration:none">Logga in</a></li>
            <?php endif; ?>
            <li><a href="kundvagn.html">Kundvagn</a></li>
            <li><a href="kassa.html">Till Kassa</a></li>
        </ul>
    </div>

	<header>   


        <div id="logo">

            <i class="logo"></i>
        </div>
        

       <div id="search"> 
                <input type="text" placeholder="Sök ett Produkt..." name="searchlive" id="searchlive">
            <ul id="result"> </ul>

        </div>
        <div id="header-cart">
            <img class="cart" src="img/bg_img.gif" alt="" /> 
            <p><a href="cart.php"><span class="kundvagn-title">SHOPPING CART</span></a></p>
            <p><span class="kundvagn-text"><?php CountCartItems(); ?>
                </span></p>
        </div>
	</header>
    <!-- =============== HEADER END =============== -->

    <!-- =============== NAVIGATION MENU =============== -->

	 <nav>
            
                <div id="nav-ikon">
                <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
                 </div>

         <?php
			include('inc/nav.php');
			?>
    </nav>
    <!-- =============== NAVIGATION MENU END =============== -->
    


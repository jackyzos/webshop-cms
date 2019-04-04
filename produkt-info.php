<?php
// denna fil är inte klart ennu
    define("TITLE", "Producter");
	include('inc/header.php');

?>
<!-- =============== MIDDLE CONTAINER =============== -->
<?php

  if ((isset($_GET['id'])) && (!empty($_GET['id'])) || (!is_numeric($id)))
                    {
                        $id = $_GET['id'];
                    }


if(!is_numeric($id)){ 
echo "Data Error";
    header("location: index.php");
exit;
}

$id = mysqli_real_escape_string($conn,$id);

$query = "SELECT * FROM products_gallery 
      JOIN products
      ON products.ProductID = products_gallery.ProductID
      JOIN gallery
      ON gallery.ID = products_gallery.GalleryID
      WHERE products.ProductID=$id";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
$pro_id = $row['ProductID'];
$pro_title = $row['ProductTitle']; 
$pro_desc = $row['ProductDescription']; 
$pro_price = $row['ProductPrice'];
$pro_speci = $row['ProductSpecification'];
$pro_details = $row['ProductDetails'];
$pro_img = $row['ProductImg'];
$pro_img1 = $row['Img1'];
$pro_img2 = $row['Img2'];
$pro_img3 = $row['Img3'];
$pro_status = $row['ProductStatus'];
?>

 <!-- =============== MIDDLE CONTAINER =============== -->
    
    <div id="middle">
	<div id="left-images">
            <div id="gallery">
              <div id="gallery-big-img">
                <div><a id="pic1"></a><img alt="" width="250px" height="250px" src="img/<?php echo $pro_img; ?>  " /></div>
                <div><a id="pic2"></a><img alt="" width="250px" height="250px" src="img/produkt/<?php echo $pro_img; ?>  " /></div>
                <div><a id="pic3"></a><img alt="" width="250px" height="250px" src="img/produkt/<?php echo $pro_img; ?> " /></div>
              </div>
                  <ul id="gallery-small-img">
                <li><a href="#pic1"><img alt="" width="100px" height="100px" src="img/<?php echo $pro_img; ?>" /></a></li>
                <li><a href="#pic2"><img alt="" width="100px" height="100px" src="img/<?php echo $pro_img; ?>" /></a></li>
                <li><a href="#pic3"><img alt="" width="100px" height="100px" src="img/<?php echo $pro_img; ?>" /></a></li>
              </ul>
            </div>   
        </div>
        <div id="right-text">
            <h1><?php echo $pro_title; ?></h1>
            <div class="lager-compare">
            <ul>
             <li><a href="#">Skriv en Recension</a></li>
             <li><a href="#">Jämför</a></li>
             <li><input type="checkbox" checked="checked" disabled="disabled" value="Lager">    
                 <?php
                    // get the product and stock level
                    if($pro_status == 1) { // finns i lagar eller out of stock
                        echo 'Finns i Lager';
                    } else {
                        echo 'Out of stock';
                    }
                 ?>
                </li>
            </ul>
            </div>
            <p><?php echo $pro_desc; ?></p>
            <div class="frakt">             
            <ul>
             <li><input type="checkbox" checked="checked" disabled="disabled"  value="Fri Frakt">Fri frakt</li>
             <li><input type="checkbox" checked="checked" disabled="disabled"  value="Express Frakt">Express frakt</li>
            </ul>
            </div>

            <div class="tipsa-social">
            <h5> Tipsa om produkten: </h5>
            <p class="addthis_inline_share_toolbox"></p>
            </div>
            
            <div class="add-to-cart">
            <h1><?php echo $pro_price; ?>:- </h1>
                <?php


            if (isset($_GET['id']))
                $id=$_GET['id'];
  
                ?>
               

                     <form method="post" action="cart.php?action=add&id=<?php echo $id; ?>"> 
                         <input type="hidden" name="hidden_img" value="<?php echo $row["ProductImg"]; ?>" />  
                          <input type="text" name="quantity" class="form-control" value="1" />
                          <input type="hidden" name="hidden_name" value="<?php echo $row["ProductTitle"]; ?>" />  
                          <input type="hidden" name="hidden_price" value="<?php echo $row["ProductPrice"]; ?>" /> 
                         <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                          <input type="submit" name="add_to_cart"  value="Lägg i Kundvagn" /> 
                     </form>  

            </div>
        </div>
                    <div class="tabs">

                       <div class="tab">
                           <input type="radio" id="tab-1" name="same-group" checked>
                           <label for="tab-1">Produkt Beskrivning</label>      
                           <div class="data">
                               <p><?php echo $pro_details; ?> </p>
                           </div> 
                       </div>

               <div class="tab">
                   <input type="radio" id="tab-2" name="same-group">
                   <label for="tab-2">Produkt Specifikation</label>

                           <div class="data">
                            <table>
                                  <tr>
                                    <th>Produkten</th>
                                    <th>Display</th>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Skärmteknik</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td>HD Ready</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox"></td>
                                    <td>Full HD 1080p</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td>Pixelmappning</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td>Analog</td>
                                  </tr>
                                  <tr>
                                    <td><input type="checkbox" checked="checked"></td>
                                    <td>Smart TV (nordisk)</td>
                                  </tr>              
                            </table>
                           </div> 
               </div>

    <div class="tab">
       <input type="radio" id="tab-3" name="same-group">
       <label for="tab-3">Recensionen</label>
     
       <div class="data">

            <?php
                include('inc/reviews.php');
            ?>
  
       </div> 
   </div>
    
</div>
 
         <p class="fri-frakt">FRI FRAKT PÅ ALLT och 30 DAGARS ÖPPET KÖP!</p>
 </div> 
</div> 
    <!-- =============== MIDDLE CONTAINER END =============== --> 
			<?php }
            ?>	
<?php
	include('inc/footer.php');
?>
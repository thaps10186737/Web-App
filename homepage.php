<?php
    include "menu_model.php";
    ?>
<html>

    <head>
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">

    
        <title>Exclusive Colognes Home</title>

<!--<script src="clickable.js"></script>-->

        <style>

.body{
overflow-x: hidden;
position:relative; 
width:100%;
max-width: 2000px;
margin: 0 auto;
}          

.btn{
    background-color: rgba(0, 0, 0, 0.5);
    border-radius:5px;
    width:3.5rem; 
    height:2rem; 
    border:none; 
    cursor:pointer;

}
.btn_feature{
  margin-top:-8.5%; 
  margin-left:83.33%;
 
}


.imgStyle{
display:inline-flex;

}


.img1{

cursor:pointer;
}
.img1:hover{
    transform: scale(1.1);
}
.img2{
margin-left:10rem;
cursor:pointer;
}
.img2:hover{
 transform: scale(1.1);   
}

.img3{
margin-left:10rem;
cursor:pointer;
}
.img3:hover{
 transform: scale(1.1);   
}
.category{
margin-top:2%;
width:100%;
font-size:25px;
}

.Footer{
width:100%;
height:35rem;
background-color:#040404;
margin-top:2%;
display:inline-flex;
}

.men_fragrances{
margin-top:3%;
border-bottom: 1px solid black;
}
.container{
display:100%;
background-color: green;
box-shadow:5px 5px 5px;
width:40%; 
background-color:black;
color:white;
margin-top:6%;
}
.imgContainer{
display:inline-flex;    
}
.imgContainer0{
display:inline-flex;    
}
.imgContainer1{
height:500px;
border:5px;    
}
.imgContainer1:hover{
box-shadow:0px 0px 5px 0px;    
}

.imgContainer2{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;   
}
.imgContainer2:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer3{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;    
}
.imgContainer3:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer4{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;    
}
.imgContainer4:hover{
box-shadow:0px 0px 5px 0px;    
}

.imgContainer5{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;    
}

.imgContainer5:hover{
box-shadow:0px 0px 5px 0px;    
}

.imgContainer6{
margin-left:0%;   
align-items:center;
width:200px;
height:500px;
border:5px;
   
}
.imgContainer6:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer7{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;    
}
.imgContainer7:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer8{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px; 
}
.imgContainer8:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer9{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;   
}
.imgContainer9:hover{
box-shadow:0px 0px 5px 0px;    
}
.imgContainer10{
margin-left:5%;   
align-items:center;
width:200px;
height:500px;
border:5px;   
}
.imgContainer10:hover{
box-shadow:0px 0px 5px 0px;    
}

.footerContainer{
display:block;
margin-left:-10%;
width:70%;
margin-left:5%;
}
.footerContainer0{
display:block;
width:100%;

}
.footerContainer1{
width: 33%;    
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid white;
position:relative;
height:30%;
}
.footerContainer2{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid white;
height:30%;
}
.footerContainer3{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
height:30%;
}
.img_contain{
display:block;
margin-left:1%;
}

.img_contain2{
margin-left:2%; 
display:block;
}
.img_contain3{
margin-left:0%; 
display:block;
}
.img_contain4{
margin-left:2%; 
display:block;
}


.top_btn:hover{
cursor: pointer;
}
.male_descript{
font-size:20px;
}

.women_fragrances{
margin-top:0%;
border-bottom: 2px solid black;
}
.newsletter{
width:100%;
}
.content{
display:inline;
}

/**styling for image slider */
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: orange;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
        </style>
    </head>

    

    <body class="body">
   
     
        <!---<label onclick="toRegister()">register</label>-->


        <!--iframe-->

    <!---<iframe style="width:100%; height:70.6vh; border:none;" src="register.php" id="frame"></iframe>-->

    <form action="" class="category">
       <label for="perfumes">Shop by Brand Name:</label>
       <select style="font-size:20px;" name="perfumes" id="perfumes">
       <option value="Lataffa">Lataffa</option>
       <option value="Eau de Perfume">Eau de perfume</option>
       <option value="Pendora Scent">Pendora Scent</option>
       <option value="Paris Corner">Paris Corner</option>
       <option value="Chanel">Chanel</option>
       <option value="Diesel">Diesel</option>
       <option value="Dior">Dior</option>
       <option value="Valentino">Valentino</option>
       <option value="Givenchy">Givenchy</option>
       <option value="Versace">Versace</option>
       </select>
       <br><br>
       <input style="font-size:20px; cursor:pointer;" type="submit" value="Search">
       </form>
<br>
<br>

<h2 style="box-shadow:0 0 5px 5px orange; width:73%; margin-left:13%;">Feel the allure of the world best perfume making houses, find your scent and wear it with confident, Exclusive Colognes stocks<br>
them straight from the creators of these masterpieces to bring them at great prices to you, so you can be a part of their legacy.
</h2>


<!--Image slider-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="perfume ads/ad3.jpg" style="width:100%">
  <div class="text">Search By Brands</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="perfume ads/perfume ad1.jpg" style="width:100%">
  <div class="text">Wear Your Scent With Confidence</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="perfume ads/perfume_ads.jpg" style="width:100%">
  <div class="text">Sourced From World Best Cologne Makers</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

</script>
</div>
<br>




<div class="container" >
    <h2 style="margin-top:3%;">Colognes At Affortable Prices For As Little As R150,<h2>
    <h2>You Can Order Now:<h2>
</div>

<div class="imgStyle" style="display:flex;flex-wrap:wrap;text-align:center;">
<br>

 <?php
 
include "connect.php";

 $query = "SELECT * FROM `promotions_tbl`";
 $execute = mysqli_query($connects,$query);


 while($row = mysqli_fetch_assoc($execute)){
 ?>

  
    
  <div class="img_contain" style="width:350px; margin-left:3%;margin-right:3%;margin-top:2rem">
    <img style=" box-shadow:5px 5px 5px; width:280px; height:300px;" class="img1" 
    src="<?php echo $row['prod_img']?>">
    <a href="javascript:look(<?php echo $row['promo_id']?>)"><h3 style="color:blue;"><?php echo $row['name']?><h3></a>
    <h3 style="color:blue;">R<?php echo $row['cost']?><h3>   
    <button class="top_btn" style="color:white; padding:4px; background-color:orange;" onclick="look(<?php echo $row['promo_id']?>)">ORDER NOW</button>

  

  </div> 

   
<?php
 }
?>
</div>


<div class="men_fragrances">     
<h1 style="background-color:black; color:white; margin-top:3%;">FRAGRANCES FOR MEN</h1>
<br>
<br>
<br>
<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `male_prod_tbl` WHERE male_item_id = 7";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer">

<div class="imgContainer1">
<a href=""><img  title="Sauvage for Men by Dior" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_men/sauvage.png">
<h5 class="male_descript" style="margin-left:10%">DIOR SAUVAGE EAU DE PARFUM FOR MEN</h5></a>
<h3 style="margin-left:70px; color:blue;">R580<h3>
<button style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="check(<?php echo $row['male_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>

<?php
//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `male_prod_tbl` WHERE male_item_id = 4";

// Execute the SQL query and store the result
$result = $connects->query( $query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer2">
<a href=""><img title="Jean Paul Gaultier" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_men/Jean Paul Gaultier.jpeg">
<h4 class="male_descript" style="margin-left:10%">Jean Paul Gaultier Le Male Eau de Toilette 125ml</h4></a>
<h3 style="margin-left:70px; color:blue;">R550<h3>
<button style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="check(<?php echo $row['male_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `male_prod_tbl` WHERE male_item_id = 6";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer3">
<a href=""><img title="Polo Fragrances" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_men/fashionBean.jpg">
<h4 class="male_descript" style="margin-left:10%">Polo Black Eau De Toilette Spray By Ralph Lauren 2.5 oz Eau De Toilette Spray</h4></a>
<h3 style="margin-left:70px; color:blue;">R570<h3>
<button  name="img_btn" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="check(<?php echo $row['male_item_id']?>)" >ADD TO CART</button>
</div>
<?php
}
?>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `male_prod_tbl` WHERE male_item_id= 11";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer4">
<a href=""><img title="Barrakat Red" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_men/Barrakat.webp">
<h4 class="male_descript" style="margin-left:10%">Barakkat Rouge 540 Extrait De Parfum 100ml</h4></a>
<h3 style="margin-left:70px; color:blue;">R460<h3>
<button name="img_btn" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px;background-color:orange;" onclick="check(<?php echo $row['male_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `male_prod_tbl` WHERE male_item_id= 8";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer5">
<a href=""><img title="Tom Ford 50ml" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_men/Tom Ford.jpg">
<h4 class="male_descript" style="margin-left:10%">Tom Ford 50ml Fragrance</h4></a>
<h3 style="margin-left:70px; color:blue;">R760<h3>
<button name="img_btn" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="check(<?php echo $row['male_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>

</div>

<!--<img style="box-shadow:5px 5px 5px; width:200px; height:200px; margin-left:25px;" style="" src="img_men/Jean Paul Gaultier.jpeg">--> 



</div>

<!--<button name="btn2" style="cursor: pointer; margin-top:0%; margin-left:13%; background:transparent; padding:4px;">ADD TO CART</button>
<button name="btn3" style="cursor: pointer; margin-top:0%; margin-left:12%; background:transparent; padding:4px;">ADD TO CART</button>-->


<div class="women_fragrances">
<h1 style="background-color:black; color:white; margin-top:3%;">FRAGRANCES FOR WOMEN</h1>
<br>
<br>
<br>

<div class="imgContainer0">

<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id = 1";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer6">
<a href=""><img  title="black opium" style=" box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_women/black opium.png">
<h4 style="margin-left:10%">Black Opium Eau de Parfum</h4><a>
<h3 style="margin-left:70px; color:blue;">R560<h3>
<button name="btn6" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="checks(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>
<br>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id= 2";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer7">
<a href=""><img title="chanel" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_women/chanel.jpg">
<h5 style="margin-left:10%">CHANEL COCO EDP FOR WOMEN</h5></a>
<h3 style="margin-left:70px; color:blue;">R660<h3>
<button name="btn7" style=" color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="checks(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id = 4";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer8">
<a href=""><img title="Flowerbomb By Viktor Rolf" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_women/flowerbomb.jpg">
<h4 style="margin-left:10%">Viktor and Rolf Flowerbomb EDP 100ml Spray</h4></a>
<h3 style="margin-left:70px; color:blue;">R500<h3>
<button name="btn8" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="checks(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>



<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id = 6";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer9">
<a href=""><img title="miss dior" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_women/miss dior.jpg">
<h5 style="margin-left:10%">DIOR MISS DIOR EAU DE PARFUM FRAGANCE</h5></a>
<h3 style="margin-left:70px; color:blue;">R600<h3>
<button name="btn9" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="checks(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>


<?php

//connection
include "connect.php";


//SQL query to select a single row from the database where a specific condition is met
$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id = 8";

// Execute the SQL query and store the result
$result = $connects->query($query);

//check if any results are returned by the query
if($result->num_rows > 0){

// Fetch the result as an associative array
$row = $result->fetch_assoc();
    
//// Print the result for debugging or output purposes
//print_r($row);    
?>
<div class="imgContainer10">
<a href=""><img title="valentino" style="box-shadow:5px 5px 5px; width:200px; height:200px;" src="img_women/valentino.jpg">
<h4 style="margin-left:10%">Valentino Donna Born In Roma Eau De Parfum</h4></a>
<h3 style="margin-left:70px; color:blue;">R550<h3>
<button name="btn10" style="color:white; cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:orange;" onclick="checks(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>
<?php
}
?>

</div>
</div>


<br>
<div class="Footer">


<div class="footerContainer0">
  
<h3 style="color:white; margin-left:1.5%;">POPULAR PRODUCTS</h3>  
<br>
  
<div class="footerContainer1">
<img title="Barakkat Rouge 540 Extrait De Parfum" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_men/Barrakat.webp">
<h4 style="margin-top:-1%; margin-left:4%;"><a href="" style="color:white; border-bottom:none;">Barakkat Rouge 540 Extrait De Parfum 100ml</a></h4>
</div>
<br>
<br>
<div class="footerContainer2">
<img title="Kristal Eau De Parfum" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img/kristal.jpeg">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Kristal Eau De Parfum 100ml</a></h4>
</div>
<br>
<br>
<div class="footerContainer3">
<img title="DIOR SAUVAGE EAU DE PARFUM FOR MEN" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img/sauvage.png">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">DIOR SAUVAGE EAU DE PARFUM FOR MEN</a></h4>
</div>
</div>
<br>


<div class="footerContainer">
<h3 style="color:white;">STORE INFORMATION</h3>    
<a style="color:white; font-size:larger;" href="About_Us.php">About Us</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="Male_Colognes.php">Mens Fragrances</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="Female_Colognes.php">Women Fragrances</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="brands.php">Shop By Brand</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="">Specials</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="">Delivery & Return</a>
<br>
<br>
<a style="color:white; font-size:larger;" href="contact_page.php">Contact Us</a>
</div>
<br>


<div class="newsletter">
<h3 style="color:white;">JOIN NEWSLETTER</h3>  
<h2 style="margin-top:6%; color:white;"><a href="">Subscribe</a> to newsletter, stay updated on <br> the latest product deals and specials offers</h2>
</div>

</div>

    </body>

</html>


<!--pop-up for promotion colognes-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
    .popup {
        
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1001;
    }
    .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="overlay"></div>

<div class="popup" style="width:80%;height:70vh">
    <span class="close-btn" onclick="closePopup()">X</span>
    <iframe id="pass_url" style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>



<script>
    function look(element){


alert(element);

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.popup').style.display = 'block';

        document.getElementById('pass_url').src ="items3.php?id="+element;
    }

    function closePopup() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup').style.display = 'none';
    }
</script>

</body>
</html>


<!--pop-up for male colognes-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
    .popup {
        
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1001;
    }
    .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="overlay"></div>

<div class="popup" style="width:80%;height:70vh">
    <span class="close-btn" onclick="closePopup()">X</span>
    <iframe id="pass_url" style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>



<script>
    function check(element){


alert(element);

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.popup').style.display = 'block';

        document.getElementById('pass_url').src ="items1.php?id="+element;
    }

    function closePopup() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup').style.display = 'none';
    }
</script>

</body>
</html>


<!--pop-up for female colognes-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
    .popup {
        
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1001;
    }
    .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="overlay"></div>

<div class="popup" style="width:80%;height:70vh">
    <span class="close-btn" onclick="closePopup()">X</span>
    <iframe id="pass_url" style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>



<script>
    function checks(element){


alert(element);

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.popup').style.display = 'block';

        document.getElementById('pass_url').src ="items2.php?id="+element;
    }

    function closePopup() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup').style.display = 'none';
    }
</script>

</body>
</html>


<!--pop-up for all_colognes table-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
    .popup {
        
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1001;
    }
    .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="overlay"></div>

<div class="popup" style="width:80%;height:70vh">
    <span class="close-btn" onclick="closePopup()">X</span>
    <iframe id="pass_url" style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>



<script>
    function check(element){


alert(element);

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.popup').style.display = 'block';
    
        document.getElementById('pass_url').src ="search_items.php?id="+element;
        
    }

    function closePopup() {

        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup').style.display = 'none';
        
    }

    
</script>

</body>
</html>





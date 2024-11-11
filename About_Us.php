<html>
    <header>
        <title>About Us</title>

        <style>
.body{
overflow-x: hidden;
position:relative; 
display:100%;
max-width: 2000px;
margin: 0 auto;
}  

.Footer{
width:100%;
height:35rem;
background-color:#040404;
margin-top:5%;
display:inline-flex;
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
height: 30%;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid white;
position:relative;
}
.footerContainer2{
width: 33%;
height: 30%;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid white;
}
.footerContainer3{
width: 33%;
height: 30%;
display:inline-flex;
margin-left:10px;
}
.newsletter{
width:100%;
}
        </style>
    </header>

    <body class="body">
<?php
include "menu_model.php";
?>

<h1 style="margin-top:2%; width:8%; box-shadow:5px 5px 5px 5px;">About Us</h1>
<br>

<h2>Welcome To Exclusive Colognes</h2>
<h3 style="background-color: orange; width:60%; box-shadow:5px 5px 5px 5px;">Exclusive Colognes operates within the luxury fragrance market, focusing on delivering exclusive,<br>
sophisticated, and high-quality perfumes. The organization's success depends on its ability to maintain<br>
its commitment to craftsmanship, authenticity, and innovation while meeting the evolving needs and preferences<br> 
of its discerning customers.</h3>
<br>
<br>
<h2>Why Shop With Us</h2>
<h3 style="background-color: orange; width:60%; box-shadow:5px 5px 5px 5px;">-We have a of collections of Dubai and South African rare perfumes.<br>
-Receive valuable information about different scents, sizes and matching brands with similar notes and attributes.<br>
-Free delivery on orders over R1500.<br>
-We will ensure your perfume is sent to you in exquisite condition.</h3><br>
<br>
<h3 style="font-size:larger">If you require any further information on any of our services, 
please contact us on <a href="">+27 64 331 3112</a> or email us at <a href="">PrinceRaza@gmail.com</a> we will kindly assist you.
</h3>
<br>



</div> 
<br>
<div class="Footer">

<div class="footerContainer0">
<h3 style="color:white; margin-top:2%; margin-left:1.5%;">POPULAR PRODUCTS</h3>    
<div class="footerContainer1">
<img title="Hugo boss" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_men/Hugo boss.jpg">
<h3 style="margin-top:-1%; margin-left:4%; "><a href="" style="color:white; border-bottom:none;">Hugo Boss Boss Bottled Parfum - 100ml</a></h3>
</div>
<br>
<br>
<div class="footerContainer2">
<img title="VersaceBright Crystal for Women" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/versace.jpeg">
<h3 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">VersaceBright Crystal for Women 3.0 oz Eau de Toilette Spray</a></h3>
</div>
<br>
<br>
<div class="footerContainer3">
<img title="chanel" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/chanel.jpg">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Eau De Parfum Spray</a></h4>
</div>
</div>

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

<div class="newsletter">
<h3 style="color:white;">JOIN NEWSLETTER</h3>  
<h2 style="margin-top:6%; color:white;"><a href="">Subscribe</a> to newsletter stay updated on <br> the latest product deal and specials offers</h2>
</div>

</div>
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
console.log(element);

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
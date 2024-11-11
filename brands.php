<html>
<header>
<title>

</title>

<style>
.body{
overflow-x: hidden;
position:relative; 
width:100%;
max-width: 2000px;
margin: 0 auto;
}
.img_container{
display:inline-flex;    
margin-top:2%;
width:100%;
height:50%;
display:flex;
flex-wrap:wrap;
}

.img_container2{
display:inline-flex;    
margin-top:0%;
width:100%;
height:100%;

}


.inner_container{
border-style:groove;   
width:25%;
}

.inner_container1{
border-style:groove;   
width:25%;
}
.inner_container2{
border-style:groove;   
width:25%;
}


.inner_container3{
border-style:groove;   
width:25%;
height:50%;
}

.inner_container4{
border-style:groove;   
width:25%;
height:50%;
}
.inner_container5{
border-style:groove;   
width:25%;
}

.inner_container6{
border-style:groove;   
width:25%;
}

.inner_container7{
border-style:groove;   
width:25%;
}

.inner_container8{
border-style:groove;   
width:25%;
}
.Footer{
width:100%;
height:35rem;
background-color:#040404;
margin-top:30%;
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
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px white;
position:relative;
height:30%;
}
.footerContainer2{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px white;
height:30%;
}
.footerContainer3{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
height:30%;
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
<br>
<h1 style="width:15%; box-shadow:5px 5px 5px 5px;">SHOP BY BRANDS</h1>
<br>
<div class="img_container">

<div class="inner_container">    
<img style="width:20%; height:50%;" title="Shop perfumes from Afnan" src="brands/afnan.jpg"> 
</div>   

<div class="inner_container1">    
<img style="width:20%; height:50%;" title="Shop perfumes from Armani" src="brands/armani.jpg"> 
</div>  

<div class="inner_container2">    
<img style="width:20%; height:50%;" title="Shop perfumes from Chanel" src="brands/chanel.png"> 
</div>

<div class="inner_container3">    
<img style="width:20%; height:50%;" title="Shop perfumes from Diesel" src="brands/diesel.png"> 
</div>   

<div class="inner_container4">    
<img style="width:20%; height:50%;" title="Shop perfumes from Dior" src="brands/dior.jpg"> 
</div>  

<div class="inner_container5">    
<img style="width:20%; height:50%;" title="Shop perfumes from Givenchy" src="brands/Givenchy.jpg"> 
</div> 

<div class="inner_container6">    
<img style="width:20%; height:50%;" title="Shop perfumes from Lataffa" src="brands/lataffa.webp"> 
</div>


<div class="inner_container7">    
<img style="width:20%; height:50%;" title="Shop perfumes from Versace" src="brands/versace.jpg"> 
</div>

<div class="inner_container8">    
<img style="width:20%; height:50%;" title="Shop perfumes from Valentino" src="brands/valentino.png"> 
</div>

</div>
<br>

<div class="Footer" >

<div class="footerContainer0">
<h3 style="color:white; margin-left:1.5%;">POPULAR PRODUCTS</h3>    
<div class="footerContainer1">
<img title="Charuto" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img/Charuto.webp">
<h4 style="margin-top:-1%; margin-left:4%; "><a href="" style="color:white; border-bottom:none;">Pendora Scents CHARUTO TOBACCO VANILLA</a></h4>
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

<div class="footerContainer">
<h3 style="color:white;">STORE INFORMATION</h3>    
<a style="color:white; font-size:23px;" href="About_Us.php">About Us</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="Male_Colognes.php">Mens Fragrances</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="Female_Colognes.php">Women Fragrances</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="brands.php">Shop By Brand</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="">Specials</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="">Delivery & Return</a>
<br>
<br>
<a style="color:white; font-size:23px;" href="contact_page.php">Contact Us</a>
</div>

<div class="newsletter">
<h3 style="color:white;">JOIN NEWSLETTER</h3>  
<h2 style="margin-top:6%; color:white;"><a href="">Subscribe</a> to newsletter stay updated on <br> the latest product deal and specials offers</h2>
</div>
</div>  
<br>

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

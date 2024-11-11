<html>

<head>
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">  
<title>

</title>

<style>
.body{
overflow-x: hidden;
position:relative;
max-width: 2000px;
margin: 0 auto;
}
.men_fragrances{
margin-top:6%;
}
.imgContainer{
display:inline-flex;    
}
.imgContainer0{
display:inline-flex;    
}
.imgContainer1{
height:400px;
border:5px; 
display:block;  
}
.imgContainer1:hover{
box-shadow:0px 0px 5px 0px;    
}

.img_container0{
margin-top:6%;
display:inline-flex;
}

.back_img_container{
background-image:url('img_women/background_img.jpeg');
margin-top:1%;
opacity:0.5;
width:100%;
background-position:center;
margin-left:0%; 
height:25rem;
}
.Footer{
width:100%;
height:35rem;
background-color:#040404;
margin-top:2%;
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
.links{
display:inline-flex;
display:100%;   
width:100%;
margin-left:2%; 
}
.category{
margin-top:2%;
}

.newsletter{
width:100%;
}

</style>

</head>

<body class="body">

<?php
include "menu_model.php";
?>

<div class="back_img_container">
<h1 style="color:orange; margin-top:0%;">FRAGRANCES FOR WOMEN</h1>    
<div class="links" >    
<a style="color:white;" href="Male_Colognes.php"><h4 style="width:100%; color:white; margin-left:1%; margin-top:16.5%;">FRAGRANCES FOR MEN<h4></a>

<a href="Female_Colognes.php"><h4 style="width:100%; color:white; margin-left:20%; margin-top:5%;">FRAGRANCES FOR WOMEN<h4></a>
</div>
</div>

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




<div class="women_fragrances">

<div class="">     
<h1 style="background-color:black; color:white; margin-top:6%;">WOMEN FRAGRANCES COLLECTION</h1>
</div>


<div class="imgContainer" style="display:flex;flex-wrap:wrap;text-align:center">
<?php
include "connect.php";



$query = "SELECT * FROM `female_prod_tbl`";

$result = mysqli_query($connects, $query);

while ($row = mysqli_fetch_assoc($result)) {

?>


<div class="imgContainer1" style="width:250px;margin-left:3%;margin-right:3%;margin-top:2rem">
<a href=""><img style="box-shadow:5px 5px 5px; margin-left:10px;  width:200px; height:200px;" 
src="<?php echo $row['prod_img']?>"/>

<h4 style="margin-left:10%"><?php echo $row['name'];?></h4></a>
<h3 style="margin-left:10px; color:blue;">R<?php echo $row['cost']?><h3>
<button style="color:white; cursor: pointer; margin-top:0%; margin-left:15px; background:transparent; padding:4px; background-color:orange;"onclick="check(<?php echo $row['female_item_id']?>)">ADD TO CART</button>
</div>


<?php }
?>

</div>

</div>

<br> 

<div class="Footer">


<div class="footerContainer0">
<h3 style="color:white; margin-top:2%; margin-left:1.5%;">POPULAR PRODUCTS</h3>    
<div class="footerContainer1">
<img title="My Way" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/my way.jpg">
<h4 style="margin-top:-1%; margin-left:4%; "><a href="" style="color:white; border-bottom:none;">MY WAY EAU DE PARFUM NECTAR</a></h4>
</div>
<br>
<br>
<div class="footerContainer2">
<img title="Miss Dior Ladies 100ml" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/miss dior.jpg">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Christian Dior - Miss Dior Ladies 100ml</a></h4>
</div>
<br>
<br>
<div class="footerContainer3">
<img title="Yara lataffa" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/yara lataffa.jpg">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Yara Lattafa Perfumes for women</a></h4>
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
<br>

<div class="newsletter">
<h3 style="color:white;">JOIN NEWSLETTER</h3>  
<h2 style="margin-top:6%; color:white;"><a href="">Subscribe</a> to newsletter, stay updated on <br> the latest product deals and specials offers</h2>
</div>

<div>

</body>

</html>


<!---popup for female colognes table--->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.body{
    font-family:Arial, sans-serif;
}  
.overlay{
display:none;
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
    <iframe id="pass" style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>


<script>
    function check(element){


alert(element);

        document.querySelector('.overlay').style.display = 'block';
        document.querySelector('.popup').style.display = 'block';

        document.getElementById('pass').src ="items2.php?id="+element;
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
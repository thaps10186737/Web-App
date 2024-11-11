<html>

<title>
Register Page
</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
<header>

<style>
.body{
position:relative;
overflow-x: hidden; 
width:100%;
max-width: 2000px;
margin: 0 auto;
flex-wrap: wrap;
/*height:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;*/
}   
.form1{
box-shadow: 5px 10px 5px;   
border:1px solid black;
margin-left:3%;
background:linear-gradient(rgb(255, 191, 0),white);
width: 35%;
height:80%;
font-size: 22px;
}
.labels{
margin-left:20px;
}

.backdrop{
background-image:url('img/logo_img');
height:75px;
background-position:center;
width:100%;
}
.textfield1{
margin-left:2%;
display:block;

}
.textfield2{
  margin-top:10%;
}

.textfield3{
  margin-left:10%;;  
  
}
.textfield4{
  margin-left:7.5%;  

}
.textfield5{
  margin-left:7.5%;

}
.btn{
margin-top: 15px; 
margin-left:15px; 
cursor:pointer;
border-radius:10px;
height:2rem;
width:7rem;
font-size:18px;
font-weight: bold;
}
.btn:hover{
background-color:rgb(0, 128, 128);
}


.btn_feature{
  margin-top:-8.5%; 
  margin-left:84%;
}
.sideBox{
background:linear-gradient(rgb(255, 191, 0),white);
border:1px solid black;    
box-shadow: 5px 10px 5px;
width: 30%;
height: 35%;
margin-left:12%;

}

.footerContainer1{
width: 33%;    
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid black;
position:relative;
height:30%;
}
.footerContainer2{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid black;
height:30%;
}
.footerContainer3{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
height:30%;
}
.contents{
  display:inline-flex;
  margin-top:8%;
  width:100%;
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

<div class="contents">
<form class="form1" method="post">
<h1>Registration</h1>  <br>
<label class = "labels">First Name</label>
<input style="width:15rem; height:2rem;" class = "textfield1" type="text" name="fname" placeholder="Enter your name" required/>
<br>
<br>
<label class = "labels">Last Name</label>
<input style="width:15rem; height:2rem;" class = "textfield1" type="text" name="lname" placeholder="Enter your surname" required/>
<br>
<br>
<label class = "labels">Email Addr.</label>
<input style="width:15rem; height:2rem;" class = "textfield1" type="email" name="email" placeholder="Enter email address" required/>
<br>
<br>
<label class = "labels">Password</label>
<input style="width:15rem; height:2rem;" class = "textfield1" type="password" name="pass" placeholder="Enter your password" required/>
<br>
<br>
<label class = "labels">Mobile Number</label>
<input style="width:15rem; height:2rem;" class = "textfield1" type="tel"  name="mobile" placeholder="Enter your mobile number" required>

<br>
<br>

<h4 style="margin-left:5px;">Newsletter subscription</h4>
<div class="radioBtnItems">
<input type="radio" id="Daily Deals" name="subscription">
<label>Daily Deals</label><br>
<input type="radio" id="Daily Deals" name="subscription">
<label>Specials and Promotions</label><br>

</div>

<br>
<button class="btn" name="submit">submit</button> 
<br><br>
</form>

<?php

include "connect.php";


if (isset($_POST['submit'])) {
  // Collect form data
  $name = $_POST["fname"];  
  $surname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $phone = $_POST["mobile"];

 
  // Check if the email already exists in the database
  $checkQuery = "SELECT * FROM `register` WHERE `email` = '$_email'";
  $checkResult = mysqli_query($connects, $checkQuery);

  if (mysqli_num_rows($checkResult) > 0) {
      // Email already exists
      echo "<script type='text/javascript'>
      alert('This email is already registered. Please use a different email.');
      </script>";
  } else {
      // Email does not exist, proceed with registration
      $query = "INSERT INTO `register` (`name`, `surname`, `email`, `password`, `mobile number`) 
                 VALUES ('$name', '$surname', '$email', '$password', '$phone')";

      $result = mysqli_query($connects, $query);

      if ($result) {
          echo "<script type='text/javascript'>
          alert('{$name} {$surname}, you have been successfully registered');
          </script>";
      } else {
          echo "<script type='text/javascript'>
          alert('Registration failed. Please try again.');
          </script>";
      }
  }

  // Close the database connection
  mysqli_close($connects);
}
?>

<div class="sideBox">
<h4 style="font-size:20px; margin-left:5px;">Have an Account?<a style="margin-left:7px;" href="login.php">login here</a></h4>
<h5 style="font-size:20px; margin-left:25px; margin-top:7px;"><i class="fa fa-users" style="color:black;"></i>Join community of cologne lovers and find your own scent</h5>

<h5 style="font-size:20px; margin-left:25px; margin-top:2px;"><i class="fa fa-shopping-cart" style="color:black;"></i>Shop your favourites online</h5>

<h5 style="font-size:20px; margin-left:25px; margin-top:2px;"><i class="fa fa-credit-card" style="color:black;"></i>Multiple payment options and secure checkout</h5>

</div>
</div>


<br>
<div class="Footer">

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
<br>
</div>  

<div class="newsletter">
<h3 style="color:white;">JOIN NEWSLETTER</h3>  
<h2 style="margin-top:6%; color:white;"><a href="">Subscribe</a> to newsletter, stay updated on <br> the latest product deals and specials offers</h2>
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
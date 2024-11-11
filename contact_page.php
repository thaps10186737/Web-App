<html>

<header>
<title>Contact_Us</title>    
<style>
.body{
position:relative;  
overflow-x: hidden; 
}

.form1{
margin-top:2%;    
display:inline-flex;
}

.form_part1{
margin-left:5%;
}

.form_part2{
margin-top:5%;
margin-left:20%;
}

.Footer{
width:100%;
height:30rem;
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
}
.footerContainer2{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid white;
}
.footerContainer3{
width: 33%;
height: 100px;
display:inline-flex;
margin-left:10px;
border-bottom: 1px solid black;
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




<form class="form1" method="post">
    <div class="form_part1">    
        <h2>SEND US A MESSAGE</h2>
        <br><br>
        <label style="font-size: larger;"><strong>Name:</strong></label>
        <input style="font-size: medium; width: 20rem; height: 2rem;" type="text" id="fname" name="name" placeholder="Enter your name" required/>
        <br><br><br>
        <label style="font-size: larger;"><strong>Email:</strong></label>
        <input style="font-size: medium; width: 20rem; height: 2rem;" type="email" id="emails" name="email_addr" placeholder="Enter your emails" required/>
        <br>
    </div>

    <div class="form_part2">
        <h2><strong>Comment or Message</strong></h2>
        <textarea style="font-size: larger;" rows="12" cols="80" name="comment"></textarea>
        <br>
        <button type="submit" name="submit" style="background-color: orange; cursor: pointer; width: 6rem; height: 2rem; margin-left: -540px; margin-top: 3%; font-size: larger;">Submit</button>
    </div>
</form>

<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email_addr"];
    $comment = $_POST['comment'];

    $query = "INSERT INTO `contact_tbl` (`id`, `name`, `email`, `comments`) VALUES (NULL, '$name', '$email', '$comment')";
    $execute = mysqli_query($connects, $query);

    if ($execute) {
        echo "<script type='text/javascript'>
        alert('{$name}, thank you for your feedback');
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Your feedback was not sent, the issue will be resolved soon');
        </script>";
    }
}
?>


<div class="contact_info">    
<h2 style="margin-top:5%;">Contact Information:</h2>
<h3>Tel:+27 64 331 3112</h3>
<h3>Email:PrinceRaza@gmail.com</h3>
</div>
<br>
   
<br>

<div class="Footer">

<div class="footerContainer0">
<h3 style="color:white; margin-top:2%; margin-left:2%;">POPULAR PRODUCTS</h3>    
<div class="footerContainer1">
<img title="Empire The Scent For Women" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/empire.jpeg">
<h4 style="margin-top:-1%; margin-left:4%; "><a href="" style="color:white; border-bottom:none;">Empire The Scent For Women</a></h4>
</div>
<br>
<br>
<div class="footerContainer2">
<img title="Black Opium Eau de Parfum" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_women/chanel.jpg">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Chanel</a></h4>
</div>
<br>
<br>
<div class="footerContainer3">
<img title="Bleu de Chanel" style="box-shadow:5px 5px 5px; width:80px; height:80px;" src="img_men/Bleu de Chanel.webp">
<h4 style="margin-top:-1%; margin-left:4%; color:white;"><a href="" style="color:white; border-bottom:none;">Chanel Bleu de Chanel Perfume for Men perfume for men 100 ml</a></h4>
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
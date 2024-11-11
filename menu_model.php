<?php
session_start();
?>



<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=2.0"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
<title>

</title>

<style>
.body{               
position:relative;
max-width: 2000px;
margin: 0 auto;
}

.backdrop{
background-image:url('img/logo_img');
height:7rem;
background-position:center;
width:100%;
position: relative;
}

.menuBar{
    box-shadow:0 0 10px 5px orange;
    background-color:white;
    display:inline-flex;
    margin-top:0.5%;
    margin-left:0%;
    width:100%;
      
}
.menuBtn{
background-color:transparent;
width:8rem;
height:35px;
border:none;
cursor:pointer;

}
.menuBtn:hover{
border-bottom:2px solid black;
background:orange;
}



.btn0{
    background-color: whitesmoke;
    width:3.5rem; 
    height:2rem; 
    border:none; 
    cursor:pointer;
    border-radius:5px;
    width:19%; 
    height:2rem;
    font-size: 20px;
}
.form3{
display:inline-flex;
align-items: center;
width:25rem;
height:4rem;
margin-top:1.5%;
background-color: orange;
margin-left: 35%;
}
.User_Acc_Details{
width: 10rem;
background-image: linear-gradient(#28231D,#FFFADA);
height:4rem;
margin-top:1.5%;
display:block;
}
.All{
    display:inline-flex;
    width:100%;
}

.cart{
background-color:orange;
height:4rem;
width:6rem;
margin-top:1.5%;
}
.usersFeatures{    
}
</style>

    </head>

    

    <body class="body">

    <div class="backdrop">
     
    <div class="All">
         <form class="form3">
            <input type="text" id="search" oninput="showPopup()" style="font-size: 20px; margin-left:2%; width:78%; height:2rem;" type="search" name="itemSearch" placeholder=" search for your favourites here" aria-label="search"/>
            <button class="btn0">Search</button>
         </form>
     


        <div class="User_Acc_Details">
        <a href="login.php"><h3 style="font-family:bold; margin-top:0%;color:white;"><i class="fa fa-user"></i>User Acc.</h3></a>
             <div class="usersFeatures" style="margin-left:5%; display:inline-flex; margin-top:-18%;">
                  <h3 id="status" style="font-family:bold;"><a style="width:50%; color:white;" href="register.php">Register</a></h3>

             </div>
        </div>

       <div class="cart">
        <a href="cart.php"><h2 style="font-size:30px; font-family:bold; margin-left:8%; margin-top:20%;color:white;"><i class="fa fa-shopping-cart">Cart</i></h2></a>
       </div>

       </div>

       
    </div>




     

        

<div class="menuBar">
        <div style=" margin-left:1%;"><a href="homepage.php"><button  class="menuBtn">HOME</button></a></div>
        <div style=" margin-left:6%;"><a href="About_Us.php"><button  class="menuBtn">ABOUT US</button></a></div>
        <div style=" margin-left:6%;"><a href="Male_Colognes.php"><button class="menuBtn">MEN FRAGRANCES</button></a></div>
        <div style=" margin-left:6%;"><a href="Female_Colognes"><button  class="menuBtn">FEMALE FRAGRANCES</button></a></div>
        <div style=" margin-left:6%;"><a href="brands.php"><button class="menuBtn">SHOP FOR BRANDS</button></a></div>
        <div style=" margin-left:7%;"><button class="menuBtn">SPECIALS</button></div>
        <div style=" margin-left:7.7%;"><button  class="menuBtn">DELIVERY & RETURNS</button></div>
        <div style=" margin-left:7%;"><a href="contact_page.php"><button class="menuBtn">CONTACT US</button></a></div>
       </div> 
       <br>
    </div>

    <?php
    if(!empty($_SESSION['user_email'])){
    ?>
    <form method="post" action="logout.php">
    <button name="logout" style="cursor:hand; margin-left:96%; font-weight:bolder; margin-top:1%; width:5rem; height:2.5rem;" onclick="logout()">Log out</button>
    </form>

    <?php
    }
    else{
    echo "";
    }
   ?>
    
</div>
 <br>
 <br>
 <?php


// Check if 'user_email' is set in the session
if (isset($_SESSION['user_email'])) {
// This stays empty
echo "<script>
           document.getElementById('status').innerHTML = 'Hi " . $_SESSION['user_email'] . "';
      </script>";
}
//else{
    // If it is set, display the JavaScript message
 //   echo "<script>
 //           document.getElementById('status').innerHTML = 'Hi " . $_SESSION['user_email'] . "';
 //         </script>";
//}
?>
    </body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load PHP in Popup</title>
    <style>
        /* Basic styling for the popup */
        #popup {
            display: none;
            position: fixed;
            top: 46%;
            left: 50%;
            width: 100%;
            height: 50vh;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 20px;
            overflow-y: auto;
        }

        #popup-overlay {
            display: none;
            position: fixed;
            top: 100;
            left: 0;
            width: 100%;
            height: 60vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .closebtn{
       align-items:end;
        }

    </style>
</head>
<body>


<div id="popup-overlay"><span class="close-btn" style=" height:5rem; width:3rem; cursor:hand; font-size:20px; background-color:red; color:black;" onclick="hidePopup()">X</span></div>
<div id="popup"></div>

<script>
    function showPopup() {

        const search =document.getElementById("search").value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'search_like.php?search='+search, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('popup').innerHTML = xhr.responseText;
                document.getElementById('popup-overlay').style.display = 'block';
                document.getElementById('popup').style.display = 'flex';
            }
        };
        xhr.send();
    }

    function hidePopup() {
        document.getElementById('popup-overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }
</script>


</body>
</html>


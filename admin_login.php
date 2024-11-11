<html>
<header>
    <title>Administration</title>

    <style>
.form1{
box-shadow: 5px 10px 5px;   
border:1px solid black;
margin-left:3%;
margin-top:8%;
background:linear-gradient(rgb(255, 191, 0),white);
width: 30%;
height: 30%;
position:absolute;
font-size:22px;
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
.labels{
margin-left:20px;
}

    </style>
</header>

<body>
<?php
include "menu_model.php";
?>

<form class="form1" action="admin_action.php?login=yes" method="post">
<h1>Admin Login</h1>  
<br>
<label class = "labels">Username</label>
<input style="width:15rem; height:2rem;" class = "textfields" type="email" name="user" placeholder="Enter email address" required/>
<br>
<br>
<label class = "labels">Password</label>
<input style="width:15rem; height:2rem;" class = "textfields1" type="password" name="pass" placeholder="Enter your password" required/>

<a href="">forgot</a>
<br>
<button class="btn" name="submit">submit</button> 
<br><br>
 
</form>
</body>

</html>

<?php
//get the database connection
include "connect.php";
session_start();


//when the user login
if (!empty($_GET['login'])) {

    //get values
    $username = (string) $_POST['user'];
    $password = $_POST['pass'];

    //do qquery
    $query = "SELECT * FROM `register` WHERE email='$username' AND password='$password';";
    $done = mysqli_query($connects, $query);

    //check if connected
    if (mysqli_fetch_row($done)>1) {

        //collect user data
        $query = "SELECT * FROM `register` WHERE email='$username'";
        $donef = mysqli_query($connects, $query);
        $take_all = mysqli_fetch_assoc($donef);


                //assign the user email
                $_SESSION['user_email'] = $take_all['name'];
                $_SESSION['email'] =$take_all['email'];


        echo "<script type='text/javascript'>
    alert('$username successfully logged in');
    </script>";


          
    echo "<script> window.location.href='login.php';</script>"; 
    

    
    echo "<script>
    document.getElementById('status').innerHTML = 'Hi $username'
    </script>";      

    } 
    else {
        //return to the login page
        $_SESSION['user_found'] = "no";
        $_SESSION['error'] = "Incorrect username or password...";


    echo "<script type='text/javascript'>
    alert('User not found, Please register to enjoy a good shopping experience');
    </script>";   
    
    
    echo "<script> window.location.href='login.php';</script>";
    }
}
?>



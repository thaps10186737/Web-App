
<?php
//get the database connection
include "connect.php";


//when the user login
if (!empty($_GET['login'])) {

    //get values
    $username = (string) $_POST['user'];
    $password = $_POST['pass'];

    //do qquery
    $query = "SELECT * FROM `admin_tbl` WHERE email='$username' AND password='$password';";
    $done = mysqli_query($connects, $query);

    //check if connected
    if (mysqli_fetch_row($done)>1) {

        //collect user data
        $query = "SELECT * FROM `admin_tbl` WHERE email='$username'";
        $donef = mysqli_query($connects, $query);
        $take_all = mysqli_fetch_assoc($donef);


        echo "<script type='text/javascript'>
    alert('Administrator $username is successfully logged in');
    </script>";


          
    echo "<script> window.location.href='admin_side.php';</script>"; 
    

    
    echo "<script>
    document.getElementById('status').innerHTML = 'Admin'
    </script>";      

    } 
    else {


    echo "<script type='text/javascript'>
    alert('User not found, Only users with administrative rights can login here');
    </script>";   
    
    
    echo "<script> window.location.href='admin_login.php';</script>";
    }
}
?>


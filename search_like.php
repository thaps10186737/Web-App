<?php 
include "connect.php";


$id = $_GET['search'];


//$id = isset($_GET['search']) ? $_GET['search'] : ''; 
$query ="SELECT * FROM `all_colognes_tbl`";

$executes = mysqli_query($connects, $query);
//$done = mysqli_fetch_assoc($executes);

if (!empty($id)) {
while($row = mysqli_fetch_assoc($executes)){

    
    
       // if(str_contains($row['perfume_name'],$id)){
    
    if (strpos($row['item_name'], $id) !== false) {
            
                 
    ?>
    
    <div class="imgContainer1">
    <a href="javascript:check(<?php echo $row['item_id']?>)">
    <img style="box-shadow:5px 5px 5px 5px; margin-left:10px;  width:200px; height:200px;" src="<?php echo $row['item_img']?>"/>
    <h5 style="margin-left:10%"><?php echo $row['item_name']?>
    </h5></a>
    
    </div>
    
    <?php 
}
}
} 
else {
        // Handle the case when the search box is empty
        echo "Please enter a search term.";
    }

?>

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

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

<?php  

//get the data that comes from the link or url
$get_typed_data  = $_GET['searching'];

?>
<body>

<div class="overlay" <?php if(!empty($get_typed_data)){ echo "style='display:block;'";}?>></div>

<div class="popup" <?php if(!empty($get_typed_data)){ echo "style='display:block;width:80%;height:70vh'";}else{ echo "style='width:80%;height:70vh'";}?> >
    <span class="close-btn" onclick="closePopup()">X</span>
    <iframe id="pass_url"  src="search_like.php=id?"<?php echo $get_typed_data;?> style="width:100%;height:70vh;border:none;outline:none"></iframe>
</div>



<script>
 

    function closePopup() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup').style.display = 'none';
    }
</script>

</body>
</html>

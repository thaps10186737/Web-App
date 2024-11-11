<?php
session_start();
include "connect.php";

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$count=(int)0;


$id = $_GET['id'];

$query = "SELECT * FROM `promotions_tbl` WHERE promo_id = $id";

$result = mysqli_query($connects, $query);


while($row = mysqli_fetch_array($result)){


$count++;
?>

<div class="imgContainer1" style="align-items:center; margin-left:40%;">
<img style="box-shadow:5px 5px 5px 5px; margin-left:10px;  width:200px; height:200px;" 
src="<?php echo $row['prod_img']?>"/>

<h5 style="margin-left:10px"><?php echo $row['name']?></h5></a>
<h3 style="margin-left:80px; color:blue;">R<?php echo $row['cost']?><h3>



<a href="assign.php?item_id=<?php echo $row['promo_id']; ?>&item_name=<?php echo urlencode($row['name']); ?>&item_image=<?php echo urlencode($row['prod_img']); ?>&item_price=<?php echo $row['cost']; ?>">
<button style="width:6rem; margin-left:45px; color:white; cursor: pointer; background-color:blue;">ADD</button>
</a>


</div>


<?php
}
?>



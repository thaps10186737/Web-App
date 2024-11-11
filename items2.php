<?php

include "connect.php";

$id = $_GET['id'];

$query = "SELECT * FROM `female_prod_tbl` WHERE female_item_id = $id";

$result = mysqli_query($connects, $query);


while($row = mysqli_fetch_array($result)){



?>

<div class="imgContainer1" style="align-items:center; margin-left:40%;">
<img style="box-shadow:5px 5px 5px 5px; margin-left:10px;  width:200px; height:200px;" 
src="<?php echo $row['prod_img']?>"/>

<h5 style="margin-left:50px"><?php echo $row['name']?></h5></a>
<h3 style="margin-left:80px; color:blue;">R<?php echo $row['cost']?><h3>
<button style="width:6rem; color:white;cursor: pointer; margin-top:0%; margin-left:45px; background:transparent; padding:4px; background-color:blue;">ADD</button>
</div>


<?php
}
?>
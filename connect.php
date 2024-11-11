<?php 


//details to connect
$connects = mysqli_connect("localhost","root","","perfume_store_db",3308);


if($connects){
  // echo "connect";
}else{
    echo "Not connect";
}
?>
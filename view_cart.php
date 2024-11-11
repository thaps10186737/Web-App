<!---start session--->
<?php 
//include the link 




if(!empty($_SESSION['cart'])){
?>




<table id="tt" style="width:100%" class="log-form">

<th style="width: 3rem;border-bottom:solid 1px;text-align:start">No</th>

<th style="width: 3rem;border-bottom:solid 1px;text-align:start"> Name</th>


<th style="width: 3rem;border-bottom:solid 1px;text-align:start">Price each</th>


<th style="width: 3rem;border-bottom:solid 1px;text-align:start">Image</th>
<th style="width: 3rem;border-bottom:solid 1px;text-align:start">Quantity</th>
<th style="width: 3rem;border-bottom:solid 1px;text-align:start">Price total</th>
<th style="width: 3rem;border-bottom:solid 1px;text-align:start">Action</th>

<?php 

$count=0;
$totals=0;
foreach($_SESSION['cart']  as $index_item  => $row ){

    //change the row to array
    if(is_array($row) ){

        //nots_1

        if($row['name']!="nots_1"){
        $count++
?>

<tr>

<td style="width: 3rem;"><?php echo $count;?></td>

<td style="width: 3rem;"><?php echo $row['name'];?></td>
<td style="width: 3rem;">R<?php echo number_format($row['price'],2);?></td>
<td style="width: 3rem;"><img style="height: 5rem;width:5rem" src="<?php echo $row['image'];?>"/></td>
<td style="width: 3rem;"><?php echo $row['quantity'];?></td>
<td style="width: 3rem;">R<?php  $total = $row['price'] * $row['quantity'];
 $totals += $row['price'] * $row['quantity'];  echo number_format($total,2);?></td>
<td class="d-sm-inline-block" style="width: auto;display:inline-flex;text-align:center;">

<!---do the button of deleting--->

<a href="minus.php?id=<?php echo $row['id'];?>">
<button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: red;border:solid 1px red;margin-left:2rem;width:100px" type="submit">
-


</button>
</a>


<a href="plus.php?id=<?php echo $row['id'];?>">
<button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: green;border:solid 1px green;margin-left:2rem;width:100px" type="submit">
+


</button>
</a>

</td>





</tr>


<?php


        }
}

}



?>
<hr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
  <td style="display: inline;width:100%;font-size:1.5rem"><div style="display: inline;width:100%" >Total : R<span style="color:green"><?php echo number_format($totals,2);?></span>  
<a href="buy.php">
<button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: green;border:solid 1px green;" type="submit">
Continue shopping
</button>
</a><?php $_SESSION['addeded'] ="R".number_format($row['price'],2); ?></div> </td>

<!---end table--->
     </table>
<?php 
if($count==0){
    echo "
    <script> document.getElementById('tt').style.display='none';</script>
    <div style='width:100%;text-align:center;color:red'> items  were added to the cart, but removed please add new items first !!</div>";


}
}
else{
    echo "<div style='width:100%;text-align:center;color:red'>No items added to the cart, please add items first !!<br><br><a href='buy.php'>
    <button class='d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash' style='background-color: green;border:solid 1px green;width:50%' type='submit'>
    Continue shopping
    </button>
    </a></div>";
}
?>
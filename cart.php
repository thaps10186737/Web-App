<!---start session--->
<?php 
// Include the link to the model file
include "menu_model.php";

// Check if the cart session variable is not empty
if (!empty($_SESSION['cart'])) {
?>

<!--- Display cart items in a table format --->
<table id="tt" style="width:100%" class="log-form">
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">No</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Name</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Price each</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Image</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Quantity</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Price total</th>
    <th style="width: 3rem;border-bottom:solid 1px;text-align:start">Action</th>

<?php 

// Initialize counter for items
$count = 0; 

// Initialize total price for all items
$totals = 0; 

// Loop through each item in the cart
foreach ($_SESSION['cart'] as $index_item => $row) {

    // Check if the row is an array (to ensure it's a cart item)
    if (is_array($row)) {

        // Exclude removed items from the display
        if ($row['name'] != "nots_1") {

        // Increment item count
        $count++; 

?>

<tr>
    <td style="width: 3rem;"><?php echo $count; ?></td>
    <td style="width: 3rem;"><?php echo $row['name']; ?></td>
    <td style="width: 3rem;">R<?php echo number_format($row['price'], 2); ?></td>
    <td style="width: 3rem;"><img style="height: 5rem;width:5rem" src="<?php echo $row['image']; ?>"/></td>
    <td style="width: 3rem;"><?php echo $row['quantity']; ?></td>
    <td style="width: 3rem;">

        R<?php  
            // Calculate total for item
            $total = $row['price'] * $row['quantity']; 

            // Add to grand total
            $totals += $total; 
            echo number_format($total, 2); 
        ?>

    </td>
    <td class="d-sm-inline-block" style="margin-top:3%; width: auto;display:inline-flex;text-align:center;">
    
        <!--- Button to decrease item quantity --->
        <a href="minus.php?id=<?php echo $row['id']; ?>">
            <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: red;border:solid 1px red;margin-left:2rem;width:100px" type="submit">-</button>
        </a>

        <!--- Button to increase item quantity --->
        <a href="plus.php?id=<?php echo $row['id']; ?>">
            <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: green;border:solid 1px green;margin-left:2rem;width:100px" type="submit">+</button>
        </a>
    </td>
</tr>

<?php
        }
    }
}
?>

<hr>
<!--- Display total amount and continue shopping button --->
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td style="display: inline;width:100%;font-size:1.5rem">
    <div style="display: inline;width:100%">Total : R<span style="color:green"><?php echo number_format($totals, 2); ?></span>  
        <a href="homepage.php">
            <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: orange;border:solid 1px green;" type="submit">
                Continue shopping
            </button>
        </a>
        <?php $_SESSION['addeded'] = "R".number_format($row['price'], 2); ?>
    </div>
</td>

<!--- End of table --->
</table>

<?php 
// If cart is empty after removing items, show a message
if ($count == 0) {
    echo "
    <script> document.getElementById('tt').style.display='none';</script>
    <div style='width:100%;text-align:center;color:red'> items were added to the cart, but removed please add new items first !!</div>";
}
} else {
    // Show message if no items in the cart initially
    echo "<div style='width:100%;text-align:center;color:red'>No items added to the cart, please add items first !!<br><br><a href='homepage.php'>
    <button class='d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash' style='background-color: green;border:solid 1px green;width:50%' type='submit'>
    Continue shopping
    </button>
    </a></div>";
}
?>

<?php 
// If items were added to the cart, show checkout button
if (!empty($_SESSION['addeded'])) { 
?>
<a href="checks.php">
    <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: green;border:solid 1px green;margin-left:2rem;width:100px" type="submit">
        Check out
    </button>
</a>


<?php 
}
?>

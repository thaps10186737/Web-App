<!---start session--->
<?php
//include the link 
include "menu_model.php";


?><?php
    // Generate order number and session ID
    $orderNum = uniqid('order_');
    $sessionId = uniqid('session_');
    ?>



<div class="log-form" id="checkout-form">





    <h4>Checking out</h4>
    <p>List of items: </p>
    <form method="post" enctype='multipart/form-data'>

        <?php

        $count = 0;
        $totals = 0;
        foreach ($_SESSION['cart']  as $index_item  => $row) {

            //change the row to array
            if (is_array($row)) {

                //nots_1

                if ($row['name'] != "nots_1") {
                    $count++
        ?>
                    <div class="group" >
                  <div class="btn"  style="width: 100%;">  <?php echo " ".$count." : ".$row['name'] ." of ".$row['quantity']." quantity";?> </div>
                    </div>
        <?php }
            }
        } ?>
    </form>



            <?php  
            // Calculate total for item
            $total = $row['price'] * $row['quantity']; 
            
            // Add to grand total
            $totals += $total; 
       
            ?>
    
    Total number of items is  <?php if (!empty($_SESSION['added'])) {
                            echo " " . $_SESSION['added'] . " and they cost ". " R" . $totals;
                        } else {
                            echo "[ 0 ]";
                        } ?> 
</div>


<div class="log-form" id="checkout-form">





    <h4>Checking out</h4>
    <p>Fill the form</p>
    <form method="post" action="action.php?check_out=yes" enctype='multipart/form-data'>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="orderNum" placeholder="Order Number" readonly value="<?php echo $orderNum; ?>">
        </div>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="sessionId" placeholder="Session ID" readonly value="<?php echo $sessionId; ?>">
        </div>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="account_number" placeholder="Account Number">
        </div>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="full_names" placeholder="Full Names">
        </div>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="expire_date" placeholder="Expire Date (MM/YY)">
        </div>
        <div class="group log-input">
            <input required style="width: 100%; height: 2rem;" type="text" name="card_holder_names" placeholder="Card Holder Names">
        </div>
        <div class="group">
            <button type="submit" class="btn">Checkout</button>
        </div>
    </form>

    <a href="homepage.php">
        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm fa fas-trash" style="background-color: orange;border:solid 1px green;" type="submit">
            Continue shopping
        </button>
    </a>
</div>
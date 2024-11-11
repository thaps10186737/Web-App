<html>
    <title>Admin Side</title>
    <header>
<style>
.log-form{
margin-top:5%;
}
</style>
    </header>

<body>
<h1 style="margin-top:2%;">Administration</h1>
<?php 
include "connect.php";

$query = "SELECT * FROM `contact_tbl`";
$result = mysqli_query($connects, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Start the table
?>    
    <table id="tt" style="width:100%" class="log-form">
    <tr>
        <th style="width: 3rem; border-bottom: solid 1px; text-align: start;">Name</th>
        <th style="width: 3rem; border-bottom: solid 1px; text-align: start;">Email</th>
        <th style="width: 3rem; border-bottom: solid 1px; text-align: start;">Comment</th>
        <th style="width: 3rem; border-bottom: solid 1px; text-align: start;">Manage Feedback</th>
    </tr>

<?php    
    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($result)) {
?> 
    <tr>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['comments']); ?></td>
        <td><a href="remove.php?id=<?php echo $row['id']; ?>"><button name="btn">Delete</button></a></td>
    </tr>
<?php
    }
?>
    </table> <!-- Close the table after the loop -->
<?php
} else {
    echo "No data found.";
}
?>


</body>



</html>
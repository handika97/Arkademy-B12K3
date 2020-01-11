<?php
include_once("as.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Deletedata']))
{  
     $id = $_POST['deleteid'];
$result = mysqli_query($conn, "DELETE FROM product WHERE Id=$id");

// After delete redirect to Home, so that latest user list will be displayed.

$result = mysqli_query($conn, "ALTER TABLE product DROP Id");
$result1 = mysqli_query($conn, "ALTER TABLE product ADD Id INT( 11 ) NOT NULL AUTO_INCREMENT FIRST ,ADD KEY (Id); ");
header("Location:Nomer_6c.php");
}
?>
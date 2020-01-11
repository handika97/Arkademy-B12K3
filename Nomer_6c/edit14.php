<?php
// include database connection file
include_once("as.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Updatedata2']))
{   
    $id_u = $_POST['updateid'];

    $Name_u = $_POST['nama'];
    
    $result = mysqli_query($conn, "UPDATE cashier SET Nama='$Name_u' WHERE Id='$id_u'");
    header("Location:Nomer_6c_cashier.php");
}
?>
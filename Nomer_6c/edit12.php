<?php
// include database connection file
include_once("as.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Updatedata']))
{   
    $id_u = $_POST['updateid'];

    $Name_u = $_POST['nama'];
    $Price_u = $_POST['price'];
    $Id_Category_u = $_POST['id_category'];
    $Id_Cashier_u = $_POST['id_cashier'];
    // update user data
    $result = mysqli_query($conn, "UPDATE product SET Nama='$Name_u',Price='$Price_u',Id_Category='$Id_Category_u',Id_Cashier='$Id_Cashier_u' WHERE id='$id_u'");
    header("Location:Nomer_6c.php");
}
?>
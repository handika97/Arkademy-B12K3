<?php
// Create database connection using config file
$servername = "localhost";
$database = "tesarkademy";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
$result = mysqli_query($conn, "SELECT * FROM product ");

if(isset($_POST['Submit'])) {
  $Name = $_POST['Name'];
  $Price = $_POST['Price'];
  $Id_Category = $_POST['Idcategory'];
  $Id_Cashier = $_POST['Idcashier'];

  
  $result1 = mysqli_query($conn,"INSERT INTO product (Nama, Price, Id_Category, Id_Cashier)VALUES ('$Name','$Price','$Id_Category','$Id_Cashier')");
  header("Location:Nomer_6c.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-98vAGjEDGN79TjHkYWVD4s87rvWkdWLHPs5MC3FvFX4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <title>Arkademy Coffee Shop</title>
    <style type="text/css">
    body{
      background-color:black;
    }
    .login {
      Margin-top: 50px;
  
    Margin-left: 300px;
        width: 800px;
        height: 570px;
        padding: 10px;
        border: 1px solid #d86a6a;
        background: #dfe3ee;
    } 
    </style>

</head>
<div class="login rounded shadow">
<body>
   
        <div class="navbar navbar-dark bg-light " >
            <div class="container justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img alt="Arkademy" src="https://www.arkademy.com/img/logo%20arkademy-01.9c1222ba.png" height="30px" class="pr-3"></img>
                    <h1 class="h5 m-1"><span style="color:#d86a6a;">ARKADEMY</span> <b style="color:#000;">COFFEE SHOP</b></h1>
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add" data-whatever="@getbootstrap">ADD</button>

            </div>
        </div>
   


  <!-- ##################################################################################################### -->

 

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <table class="table rounded shadow">
                    <thead>
                        <tr class="bg-secondary text-light">
                            <th  class="text-white">No</th>
                            <th  class="text-white">Nama</th>
                            <th  class="text-white">Price</th>
                            <th  class="text-white">Category</th>
                            <th  class="text-white">Cashier</th>
                            <th  class="text-white">Action</th>
                        </tr>
                    </thead>
                    

                        <?php  
                        while($user_data = mysqli_fetch_array($result)) {
                            ?>   
                    <tbody>      
                        <tr>    
                         <td><?php echo $user_data['Id'];?> </td>    
                         <td><?php echo $user_data['Nama'];?> </td>
                         <td><?php echo $user_data['Price'];?> </td>
                         <td><?php echo $user_data['Id_Category'];?> </td>
                         <td><?php echo $user_data['Id_Cashier'];?> </td>
                         <td>
                             <button type="button" class="btn btn-success editbtn">EDIT</button>|<button type="button" class="btn btn-success deletebtn">DELETE</button>
                         </td>
                        </tr>
                    </tbody> 
                    <?php
                    }
                         ?>
                   
                </table>
            <div>
        </div>
       </div>

</div>
<footer>
<button class="btn btn-success editbtn" onclick="window.location.href='Nomer_6c_category.php'">Category</button>
<button class="btn btn-success editbtn" onclick="window.location.href='Nomer_6c_cashier.php'">Cashier</button>
</footer>
  <!-- ##################################################################################################### -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Nomer_6c.php" method="post">
          <div class="form-group">
            <label for="name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" name="Name">
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" name="Price">
          </div>
          <div class="form-group">
            <label for="Category" class="col-form-label">Id Category:</label>
            <input type="text" class="form-control" name="Idcategory">
          </div>
          <div class="form-group">
            <label for="Cashier" class="col-form-label">Id Cashier:</label>
            <input type="text" class="form-control" name="Idcashier">
          </div>
        
      </div>
      <div class="modal-footer">
        <td><input type="submit" name="Submit" value="Add"></td>
        </form>
      </div>
    </div>
  </div>
</div> 

  <!-- ##################################################################################################### -->
  
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit12.php" method="POST">
        <div class="form-group">
        <label for="name" class="col-form-label">No Yang di Edit:</label>
            <input type="text" class="form-control" name="updateid" id="update_id">
          </div><div class="form-group">
                 <label for="name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Price:</label>
            <input type="text" class="form-control" name="price" id="price">
          </div>
          <div class="form-group">
            <label for="Category" class="col-form-label">Id Category:</label>
            <input type="text" class="form-control" name="id_category" id="id_category">
          </div>
          <div class="form-group">
            <label for="Cashier" class="col-form-label">Id Cashier:</label>
            <input type="text" class="form-control" name="id_cashier" id="id_cashier">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="Updatedata" class="btn btn-primary">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>  

<!-- ##################################################################################################### -->
  
  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Nomer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="delete12.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="deleteid" id="delete_id">
          </div>
          <h4>Yakin Hapus?</h4>
      </div>
      <div class="modal-footer">
        <button type="submit" name="Deletedata" class="btn btn-primary">Delete Data</button>
        <button type="button" class="btn btn-secondary" data-dismiss='modal'>No</button>    
    </form>
      </div>
    </div>
  </div>
</div>  


  <!-- ##################################################################################################### -->
  
  <script>
  $(document).ready(function (){
      $('.editbtn').on('click', function (){
          $('#editmodal').modal('show');
 
                $tr=$(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                
                console.log(data);

                $('#update_id').val(data[0]);
                $('#nama').val(data[1]);
                $('#price').val(data[2]);
                $('#id_category').val(data[3]);
                $('#id_cashier').val(data[4]);
      });
  });
  </script>
   <script>
  $(document).ready(function (){
      $('.deletebtn').on('click', function (){
          $('#deletemodal').modal('show');
 
                $tr=$(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                
                console.log(data);

                $('#delete_id').val(data[0]);
                
      });
  });
  
  </script>


</body>
</html>

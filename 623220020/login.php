<?php
session_start();


$nama = $_POST['nama'];
$password = $_POST ['password'];


if(isset($_POST['submit'])){

if($nama == 'ULBI' && $password == 'ULBI'){
    header ('Location:dashboard.php');
} else {
    header ('Location:error.php');
}

}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Login</title>
</head>
<body>
  <center>  
<h1>FORM LOGIN</h1>



<div class="container">
        
        <form action="dashboard.php" method="post">
            <table >
            <tr>
                <td> Nama </td> 
                <td><input type="text" name="nama" ></td> <br>
            </tr>

            <tr> 
              <td> Password </td> 
              <td> <input type="password" name="password"> <br> </td> <br>
             </tr>

            <tr>
                <td></td>
            </tr>

            <tr>
            <td></td>   
            <td><button type="submit" name="submit" class="btn btn-primary">MASUK</button></td>
            </tr>
            
        </table>
            
        </form>
    </div>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
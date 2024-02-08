<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

   $sql="Select * from registations where username='$username' and password='$password'";

   $result=mysqli_query($con,$sql);
   if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        //echo "User already exist";
        $login=1;
        session_start();
        $_SESSION['username']=$username;
        header('location:home.php');
    }else{
        $sql="insert into registations (username,password) value('$username','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
           // echo "Signup successful";
           $invalid=1;
         }
       }
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #007bff;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
        }
    </style>

    <title>Login To Our Website</title>
</head>
<body>
    <!-- Your existing HTML code here -->

    <!-- Optional: Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs5AbceTmUfbsBThawGM9dFak+rVtdFf8s+M6NToM8U6cWew/iKTcF2yHx0ljqP" crossorigin="anonymous"></script>
</body>
</html>

  </head>
  <body>
<?php
if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> You are successfully logged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

<?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong> Invalid credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

    <h1 class="text-center">Login To Our Website</h1>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter you username" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
  </div>

  <button type="submit" class="btn btn-primary w-100"> Login in </button>
</form>
  </body>
</html>
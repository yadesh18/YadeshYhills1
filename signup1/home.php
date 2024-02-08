<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
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

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        .text-warning {
            color: #ffc107;
        }

        .container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Add more styles as needed */
    </style>

    <title>Welcome page</title>
</head>
<body>
    <h1 class="text-center text-warning mt-5">Welcome <?php echo $_SESSION['username']; ?></h1>

    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>

    <!-- Optional: Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs5AbceTmUfbsBThawGM9dFak+rVtdFf8s+M6NToM8U6cWew/iKTcF2yHx0ljqP" crossorigin="anonymous"></script>
</body>
</html>

 
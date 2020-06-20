<?php
    if (isset($_GET['result'])){
        if ($_GET['result'] == 'fail'){
            echo "<script>alert('Login Failed Please check the Given information');</script>";
        }
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua trust login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<img src="../../Shared/Images/Logos/logo.png" class="rounded mx-auto d-block" alt="...">
<div class="container">
    <div class="row h-50 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form action="../../Controller/UserController.php" method="post" class="form-example" >
                <h1 class="text-center">Admin Panel Login</h1>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control username" id="username" placeholder="Username..." name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control password" id="password" placeholder="Password..." name="password">
                </div>
                <button type="submit" name="Login" class="btn btn-primary btn-customized">Login</button>
                <!-- End input fields -->
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- </div> -->
</body>
</html>
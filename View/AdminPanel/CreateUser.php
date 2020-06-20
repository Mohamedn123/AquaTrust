<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../index.php");
    exit;
}
if (isset($_GET['result'])){
    if ($_GET['result'] == 'success'){
        echo "<script>alert('User Created Successfully')</script>";
    }
    else if ($_GET['result'] == 'fail'){
        echo "<script>alert('There was an internal error adding the user please try again')</script>";
    }
    else if ($_GET['result'] == 'found'){
        echo "<script>alert('We found a user with the same username please choose different one')</script>";
    }
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
        <a class="nav-link active" href="ViewUsers.php">View / Create User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ViewAllNews.php">View / Create News</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ViewAllProducts.php">View / Create Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ViewCertificates.php">Add / View Certificates</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="EditHome.php">Edit HomePage Fields</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ViewContactUS.php">View Contact Messages</a>
    </li>

</ul>
<img src="../../Shared/Images/Logos/logo.png" class="rounded mx-auto d-block" alt="...">
<!-- <div class="p-3 mb-2 bg-primary text-white"> -->
<div class="container">
    <div class="row h-50 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form action="../../Controller/UserController.php" method="post" class="form-example" >
                <h1 class="text-center">Create New User</h1>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control username" id="username" placeholder="Username..." name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control password" id="password" placeholder="Password..." name="password">
                </div>
                <button type="submit" name="createUser" class="btn btn-primary btn-customized">Create</button>
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
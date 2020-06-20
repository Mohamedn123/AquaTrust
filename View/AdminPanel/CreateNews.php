<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../index.php");
    exit;
}
$found = false;
if (isset($_GET['status'])){
    if ($_GET['status'] == "faildtoupload"){
        $found = true;
        echo "<script>alert('There was a problem with the uploading of the image please try again and make sure that the uploaded image is Image');</script>";
    }
}
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
        <a class="nav-link" href="ViewUsers.php">View / Create User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="ViewAllNews.php">View / Create News</a>
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
<div class="container">
    <div class="row h-50 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form action="../../Controller/NewsController.php" method="post" enctype="multipart/form-data" class="form-example" >
                <h1 class="text-center">Create News</h1>

                <div class="form-group">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control username" id="Title" placeholder="Title..." name="Title">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">News Body</label>
                    <textarea class="form-control" id="Description" name="Description" rows="10" maxlength="10000"></textarea>
                    <small id="passwordHelpBlock" class="form-text text-muted"> Please be sure to use only 10000 characters as it will not accept more than that</small>
                </div>

                <div class="form-group">
                    <label for="image">Please select the image for the headline</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <small class="form-text text-muted">Please be sure to choose an image with dimensions 2560 × 1920 pixels for the best view on the website</small>
                </div>

                <button type="submit" name="CreateNews" class="btn btn-primary btn-customized">Post</button>
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

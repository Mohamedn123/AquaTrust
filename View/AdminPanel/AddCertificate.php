<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../Client/index.php");
    exit;
}
if (isset($_GET['result'])){
    if ($_GET['result'] == "faild"){
        echo "<script>alert('There was an error while adding this Certificate Please try again')</script>";
    }
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
    <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
            <a class="nav-link" href="ViewUsers.php">View / Create User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewAllNews.php">View / Create News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewAllProducts.php">View / Create Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="ViewCertificates.php">Add / View Certificates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="EditHome.php">Edit HomePage Fields</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewContactUS.php">View Contact Messages</a>
        </li>

    </ul>
    </body>
    <div class="mt-5"></div>
    <div class="container">
        <div class="row h-50 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <form action="../../Controller/CertificateController.php" method="post" enctype="multipart/form-data" class="form-example" >
                    <h1 class="text-center">Add New Certificate</h1>

                    <div class="form-group">
                        <label for="Title">Title:</label>
                        <input type="text" class="form-control username" id="Title" placeholder="Title..." name="Title">
                    </div>

                    <div class="form-group">
                        <label for="image">Please select the image of the Certificate</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <button type="submit" name="CreateCertificate" class="btn btn-primary btn-customized">Post</button>
                    <!-- End input fields -->
                </form>
            </div>
        </div>
    </div>
</html>

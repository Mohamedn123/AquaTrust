<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../index.php");
    exit;
}
require_once __DIR__.'/../../Controller/ProductController.php';
require_once __DIR__.'/../../Model/ProductModel.php';
$ProductController= new ProductController();
$Products = $ProductController->getAllProducts();
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
            <a class="nav-link active" href="ViewAllProducts.php">View / Create Products</a>
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
        <div class="mt-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="AddNewProduct.php"><button class="btn-primary">Add New Product</button></a>
                    <div class="mt-4"></div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($Products != null){

                            for ($x=0;$x<sizeof($Products);$x++){
                                $TempDescription = "";
                                $Description = $Products[$x]->getDescription();
                                if (strlen($Description) <= 50){
                                    $TempDescription = $Description;
                                }
                                else{
                                    for ($y = 0; $y < 50; $y++) {
                                        $TempDescription = $TempDescription . $Description[$y];
                                    }
                                }

                                $TempDescription = $TempDescription . "...";



                                ?>
                                <tr>
                                    <th scope="row"><?php echo $Products[$x]->getID(); ?></th>
                                    <td><?php echo $Products[$x]->getName(); ?></td>
                                    <td><?php echo $TempDescription;?></td>
                                    <td>
                                        <a href="EditProduct.php?ID=<?php echo $Products[$x]->getID(); ?>"><img src="../../Images/MiniLogos/edit.png"></a>
                                        <a href="../../Controller/ProductController.php?delete=<?php echo $Products[$x]->getID(); ?>"><img src="../../Images/MiniLogos/delete.png"></a> </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>

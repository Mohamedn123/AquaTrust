<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../index.php");
    exit;
}
require_once __DIR__.'/../../Controller/ContactController.php';
require_once __DIR__.'/../../Model/ContactModel.php';
$ContactController = new ContactController();
$Contacts = $ContactController->SelectAll();
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
            <a class="nav-link" href="ViewCertificates.php">Add / View Certificates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="EditHome.php">Edit HomePage Fields</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="ViewContactUS.php">View Contact Messages</a>
        </li>

    </ul>

        <div class="mt-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mt-4"></div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($Contacts != null){

                            for ($x=0;$x<sizeof($Contacts);$x++){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $Contacts[$x]->getID(); ?></th>
                                    <td><?php echo $Contacts[$x]->getName(); ?></td>
                                    <td><?php echo $Contacts[$x]->getSubject();?></td>
                                    <td><a href="mailto:<?php echo $Contacts[$x]->getEmail(); ?>"><?php echo $Contacts[$x]->getEmail(); ?></a> </td>
                                    <td><?php echo $Contacts[$x]->getMessage(); ?></td>
                                    <td>

                                        <a href="../../Controller/ContactController.php?delete=<?php echo $Contacts[$x]->getID(); ?>"><img src="../../Images/MiniLogos/delete.png"></a> </td>
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

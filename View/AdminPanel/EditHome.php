<?php
session_start();
if ($_SESSION['UserID'] != null){

}
else{
    header("Location:../index.php");
    exit;
}
require_once __DIR__.'/../../Shared/Database/DatabaseConnect.php';
$sql = "SELECT * FROM `HomePage`";
$Database = new DatabaseConnect();

if (isset($_POST['EditAbout'])){
    $About = $_POST['About'];
    $TempSQL = "UPDATE `HomePage` SET `About`='".$About."'";
    $Database->execute($TempSQL);

}
if(isset($_POST['EditMission'])){
    $Mission = $_POST['Mission'];
    $TempSQL = "UPDATE HomePage SET Mission='".$Mission."'";
    $Database->execute($TempSQL);
}
if(isset($_POST['EditVision'])){
    $Vision = $_POST['Vision'];
    $TempSQL = "UPDATE HomePage SET Vision='".$Vision."'";
    $Database->execute($TempSQL);
}
if (isset($_POST['AddCard'])){
    $Title = $_POST['Card'];
    $TempSQL = "INSERT INTO `aboutusItems`(`Title`) VALUES ('".$Title."')";
    $Database->execute($TempSQL);
}
if (isset($_GET['delete'])){
    $ID = $_GET['delete'];
    $TempSQL = "DELETE FROM `aboutusItems` WHERE ID = '".$ID."'";
    $Database->execute($TempSQL);
}

$Result = $Database->execute($sql);
$row = mysqli_fetch_array($Result);
$sql3 = "SELECT * FROM `aboutusItems`";
$Result2 = $Database->execute($sql3);

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
            <a class="nav-link active" href="EditHome.php">Edit HomePage Fields</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ViewContactUS.php">View Contact Messages</a>
        </li>

    </ul>
        <div class="mt-5"></div>
        <h1 class="text-center">Home Page Control Panel</h1>
        <div class="container">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form action="EditHome.php" method="post" class="form-example" >
                        <h4 class="text-center">Edit About</h4>

                        <div class="form-group">
                            <label for="About">About :</label>
                            <textarea class="form-control" id="About" name="About" rows="10" maxlength="10000"><?php echo $row['About']; ?></textarea>
                            <small id="passwordHelpBlock" class="form-text text-muted"> Please be sure to use only 10000 characters as it will not accept more than that</small>
                        </div>

                        <button type="submit" name="EditAbout" class="btn btn-primary btn-customized">Save Edits</button>
                        <!-- End input fields -->
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form action="EditHome.php" method="post" class="form-example" >
                        <h4 class="text-center">Edit Mission</h4>

                        <div class="form-group">
                            <label for="Mission">Mission :</label>
                            <textarea class="form-control" id="Mission" name="Mission" rows="10" maxlength="10000"><?php echo $row['Mission']; ?></textarea>
                            <small id="passwordHelpBlock" class="form-text text-muted"> Please be sure to use only 10000 characters as it will not accept more than that</small>
                        </div>

                        <button type="submit" name="EditMission" class="btn btn-primary btn-customized">Save Edits</button>
                        <!-- End input fields -->
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form action="EditHome.php" method="post" class="form-example" >
                        <h4 class="text-center">Edit Vision</h4>

                        <div class="form-group">
                            <label for="Vision">Vision :</label>
                            <textarea class="form-control" id="Vision" name="Vision" rows="10" maxlength="10000"><?php echo $row['Vision']; ?></textarea>
                            <small id="passwordHelpBlock" class="form-text text-muted"> Please be sure to use only 10000 characters as it will not accept more than that</small>
                        </div>

                        <button type="submit" name="EditVision" class="btn btn-primary btn-customized">Save Edits</button>
                        <!-- End input fields -->
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form action="EditHome.php" method="post" class="form-example" >
                        <h4 class="text-center">Edit About Cards</h4>

                        <div class="form-group">
                            <label for="Card">Card Text</label>
                            <input type="text" class="form-control username" id="Card" placeholder="Name..." name="Card">
                        </div>
                        <button type="submit" name="AddCard" class="btn btn-primary btn-customized">Add Card</button>
                        <!-- End input fields -->
                    </form>
                    <ul class="bg-transparent list-group ">
                        <?php
                        if($Result2->num_rows>0){
                            while ($row2 = mysqli_fetch_array($Result2)){
                                echo "<li class = 'list-group-item' >".$row2['Title']."<a href='EditHome.php?delete=".$row2['ID']."'><img style='float: right;' src='../../Images/MiniLogos/delete.png'></a> </li>";
                            }
                        }

                        ?>
                    </ul>
                    <!-- Form end -->
                </div>
            </div>
        </div>
    </body>
</html>

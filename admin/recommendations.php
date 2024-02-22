<?php
require('dbconn.php');
require 'layout/active.php'
?>

<?php
if ($_SESSION['RollNo']) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thuvien</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>

<body>
    <?php require 'layout/header.php' ?>

    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <?php require 'layout/navbar.php' ?>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->

                <div class="span9">
                    <table class="table" id="tables">
                        <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>Description</th>
                                <th>Recommended By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select * from thuvien.recommendations";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    $bookname = $row['Book_Name'];
                                    $description = $row['Description'];
                                    $rollno = $row['RollNo'];
                                ?>
                            <tr>
                                <td><?php echo $bookname ?></td>
                                <td><?php echo $description ?></td>
                                <td><b><?php echo strtoupper($rollno) ?></b></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <center>
                        <a href="addbook.php" class="btn btn-success">Add a Book</a>
                    </center>
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <?php require 'layout/footer.php' ?>


    <!--/.wrapper-->
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>

</body>

</html>


<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>
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
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <link type="text/css" href="css/theme.css" rel="stylesheet">

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
                        <form class="form-horizontal row-fluid" action="student.php" method="post">
                            <div class="container">
                                <div class="row">
                                    <div class="span3"> <label class="control-label" for="title"><b>Search:</b></label>
                                    </div>
                                    <div class="span8">
                                        <input type="text" id="title" name="title" placeholder="Enter Name/Roll No of Student" value="<?= !empty($_POST['title']) ? $_POST['title'] : '' ?>">
                                        <button type="submit" name="submit" class="btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <?php
                        if (empty($_POST['title'])) {
                            $sql = "select * from thuvien.user";
                        } else if (isset($_POST['submit'])) {
                            $s = $_POST['title'];
                            $sql = "select * from thuvien.user where (RollNo='$s' or Name like '%$s%') and RollNo<>'ADMIN'";
                        } else
                            $sql = "select * from thuvien.user where RollNo<>'ADMIN'";

                        $result = $conn->query($sql);
                        $rowcount = mysqli_num_rows($result);

                        if (!($rowcount))
                            echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                        else {


                        ?>
                            <table class="table" id="tables">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll No.</th>
                                        <th>Email id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    //$result=$conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {

                                        $email = $row['EmailId'];
                                        $name = $row['Name'];
                                        $rollno = $row['RollNo'];
                                    ?>
                                        <tr>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $rollno ?></td>
                                            <td><?php echo $email ?></td>
                                            <td>
                                                <center>
                                                    <a href="studentdetails.php?id=<?php echo $rollno; ?>" class="btn btn-success">Details</a>
                                                    <!--a href="remove_student.php?id=<?php echo $rollno; ?>" class="btn btn-danger">Remove</a-->
                                                </center>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                </tbody>
                            </table>
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
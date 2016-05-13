<?php
session_start();
if(!$_SESSION['id']){
    header("../leclog.php");
}
include '../connection.php';
$session_id= $_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM staff WHERE id='$session_id' AND type='lecturer'");
$rw=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../ico/favicon.ico">

    <title>Lecturer Dashboard | EMS</title>

    <!-- Bootstrap core CSS -->
    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">>
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include_once ('../codes/header1.php');
?>
<section>
    <div class="container">
    <div class="row">
        <?php
        include_once ('../codes/sidebar1.php');
        ?>
        <div class="col-sm-9"
        <?php
        include_once '../connection.php';
        ?>
        <b><h2>These are the Students in the system</h2>
            <h3>They are written down here</h3></b>
        <table id="studentinbox" width="auto%" border="1" bgcolor="blue">
            <tr>
                <th colspan="7">
            </tr>
            <tr><td><b>NO</b></td>
                <td><b>Firstname</b></td>
                <td><b>Lastname</b></td>
                <td><b>Registration number</b></td>
                <td><b>Telephone</b></td>
                <td><b>Email</b></td>
                <td><b>Course</b></td>

            </tr>
            <?php
            include_once '../connection.php';
            $sql="SELECT * FROM student";

            $result=mysqli_query($conn,$sql);
            if($result === FALSE) {
                die(mysqli_error($conn)); // TODO: better error handling
            }
            while($row=mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['reg_no'] ?></td>
                    <td><?php echo $row['telephone']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['course']?></td>


                </tr>
                <?php
            }
            ?>
        </table>
        </div>
    </div> <!--close row-->
</div><!---close container -->
</section>

        <?php
        include_once ('../codes/footer.php');
        ?>

</body>
</html>


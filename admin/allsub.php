<?php
session_start();
if(!$_SESSION['id']){
    header("../adlog.php");
}
include '../connection.php';
$session_id= $_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM staff WHERE id='$session_id' AND type='admin'");
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

    <title>Admin Dashboard | EMS</title>

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
include_once('../codes/header.php');
?>
<section>
    <div class="container">
        <div class="row">
            <?php
            include_once('../codes/sidebar.php');
            ?>
            <div class="col-sm-9"
            <?php
            include_once '../connection.php';
            ?>
            <b><h2>These are the Units in the system</h2>
                <h3>They are written down here</h3></b>
            <table id="studentinbox" width="auto%" border="1" bgcolor="blue">
                <tr>
                    <th colspan="4">
                </tr>
                <tr><td><b>NO</b></td>
                    <td><b>Unit code</b></td>
                    <td><b>Unit name</b></td>
                    <td><b>Course</b></td>

                </tr>
                <?php
                include_once '../connection.php';
                $sql="SELECT * FROM subject";

                $result=mysqli_query($conn,$sql);
                if($result === FALSE) {
                    die(mysqli_error($conn)); // TODO: better error handling
                }
                while($row=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['sub_id'] ?></td>
                        <td><?php echo $row['subcode'] ?></td>
                        <td><?php echo $row['subname'] ?></td>
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
include_once('../codes/footer.php');
?>

</body>
</html>


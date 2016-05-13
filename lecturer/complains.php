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

<div class="container">
    <div class="row">
        <?php
        include_once ('../codes/sidebar1.php');
        ?>
        <div class="col-sm-9">
            <?php
            include_once '../connection.php';
            ?>
            <h2>Hi these are the complains by students and you can address them</h2>
            <table id="studentinbox" width="auto%" border="1">
                <tr>
                    <th colspan="5">
                </tr>
                <tr>
                    <td><b>NO</b></td>

                    <td><b>Registration NO</b></td>
                    <td><b>Date Send</b></td>
                    <td><b>Title</b></td>
                    <td><b>Issue</b></td>
                </tr>
                <?php
                include_once '../connection.php';
                $sql="SELECT * FROM complain";

                $result=mysqli_query($conn,$sql);
                if($result === FALSE) {
                    die(mysqli_error($conn)); // TODO: better error handling
                }
                while($row=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['comp_id'] ?></td>
                        <td><?php echo $row['reg_no'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['issue']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>

    </div>
    <h2 class="sub-header">How to address the student complains</h2>
    <p>
        <b>1.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. </br>
        <b>2.</b>Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum,
        Lorem ipsum dolor sit amet, consectetur adipisicing elit </br>
        <b>3.</b>sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in </br>
        <b>4.</b>reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Excepteur sint occaecat cupidatat non.

    </p>

</div>
<?php
include_once ('../codes/footer.php');
?>
</body>
</html>


<?php
session_start();
if(!$_SESSION['id']){
    header("../stulog.php");
}
include '../connection.php';
$session_id= $_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM student WHERE id='$session_id'");
$rw=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
include_once ('../codes/header2.php');
?>

<div class="container">
    <div class="row">
        <?php
        include_once ('../codes/sidebar2.php');
        ?>
        <div class="col-sm-9">
            <b><h2>Have any issue you want addressed?</h2></b>

            <form action="../codes/query.php" method="POST" class="form-group">
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Reg NO</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="$_SESSION['username']" placeholder="Enter the registration no" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="unitn" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d") ?>" readonly = "readonly">

                    </div>
                </div>

                <div class="form-group">
                    <label for="course" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-2 control-label">Issue</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="subject" placeholder="Please enter your issue here" rows="5"></textarea>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <input type="submit" name="complains" value="Submit complain">
                    </div>
                </div>
            </form>
            </div>

            <h2 class="sub-header">About addressing complains</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</br></br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
</div>
</div>
<?php
include_once ('../codes/footer.php');
?>
</body>
</html>


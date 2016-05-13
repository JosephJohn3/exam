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
            <div class="col-sm-9">
                <h2>Enter the Student to delete</h2>
                <form action="../codes/delete.php" method="POST" class="form-group">
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">The Student to delete</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="regno" placeholder="Enter Registration number to delete">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                            <input type="submit" name="lecdelete" value="Click to delete">
                        </div>
                    </div>
                </form>
            </div>
    </div> <!--close row-->
    </div><!---close container -->
</section>

<?php
include_once ('../codes/footer.php');
?>

</body>
</html>


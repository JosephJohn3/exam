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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../ico/favicon.ico">

    <title>Student Dashboard | EMS</title>

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
            <h1 class="page-header">Dashboard</h1>


            <table  border="1" cellspacing="30">
                
                <tr>

                    <th>REGNO</th>
                    <th>UNIT CODE</th>
                    <th>UNIT NAME</th>

                    <th>SCORED</th>
                    <th>RESULTS</th>

                </tr>
                            <?php
                         include '../connection.php';
                    $sel_user = "SELECT * FROM exam INNER JOIN student ON exam.reg_no=student.reg_no WHERE student.id='$session_id'";
                    $run_user=mysqli_query($conn, $sel_user);
                    while($row=mysqli_fetch_array($run_user)){
                        ?>
                    <tr>


                        <td><?php echo $row['reg_no']; ?></td>
                        <td><?php echo $row['subcode']; ?></td>

                        <td><?php echo $row['subname']; ?></td>

                        <td><?php echo $row['scored']; ?></td>
                        <td><?php echo $row['grade']; ?></td>
                    </tr>
<?php
}
?>
            </table>
            <br />
            <a href="index.php">back</a>
            <br />

    </div>

</div>
<?php
include_once ('../codes/footer.php');
?>
</body>
</html>


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
include_once('../codes/header1.php');
?>
<section>
    <div class="container">
        <div class="row">
            <?php
            include_once('../codes/sidebar1.php');
            ?>
            <div class="col-sm-9">
                <script type="text/javascript">

                    function grade() {
                        document.form.scored.value = (document.form.result.value);
                        if (document.form.scored < 70 && y > 100) {
                            document.form.result.value = "A";
                        }
                        else if (document.form.scored < 70 && y > 60) {
                            document.form.result.value = "B";
                        }
                        else if (document.form.scored < 60 && y > 50) {
                            document.form.result.value = "C";
                        }
                        else if (document.form.scored < 50 && y > 40) {
                            document.form.result.value = "D";
                        }
                        else  {
                            document.form.result.value = "E";
                        }
                    )
                    }

                </script>
                <h2 class="page-header">Insert student marks</h2>
                <form action="../codes/query.php" method="post" class="form-horizontal">

                    <div class="form-group">
                        <label for="regno" class="col-sm-2 control-label">Reg NO</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="regno" placeholder="Enter registration number" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="home" class="col-sm-2 control-label">Unit code</label>
                        <div class="col-md-10">
                            <?php
                            include_once('../connection.php');
                            $query = "select * from subject";
                            $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
                            echo '<select name="subcode">';
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<option value='" . $row['subcode'] ."'>" . $row['subcode'] ."</option>";
                            }
                            echo '</select>';

                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="home" class="col-sm-2 control-label">Unit Name</label>
                        <div class="col-md-10">
                            <?php
                            include_once('../connection.php');
                            $query = "select * from subject";
                            $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
                            echo '<select name="subname">';
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<option value='" . $row['subname'] ."'>" . $row['subname'] ."</option>";
                            }
                            echo '</select>';

                            ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Scored</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="scored" max="100" min="0" placeholder="Enter the score"  required onChange="grade()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Grade</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="result" placeholder="The grade">
                        </div>
                    </div>


                    <input type="hidden" name="lecexam" value="2">
                    <input type="submit" value="Add Exam!">
                    <a href="../lecturer/examin.php">Back to Lecturer Dashboard</a>
                </form>

            </div>
        </div> <!--close row-->
    </div><!---close container -->
</section>

<?php
include_once('../codes/footer.php');
?>

</body>
</html>


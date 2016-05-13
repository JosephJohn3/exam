<?php include_once '../connection.php';
?>
<?php

    if(isset($_POST['studsubmit'])){
        $regno = mysqli_real_escape_string($conn,$_POST['regno']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $sql="SELECT * FROM student WHERE reg_no='$regno' AND password='$password'";
        $run_user = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($run_user);
        $check_user = mysqli_num_rows($run_user);
        if($check_user>0){
            session_start();
            $_SESSION['id']=$row['id'];
            header('Location: ../student/index.php');

        }

        else {
            echo "<script>alert('Email or password is not correct, try again!')</script>";
            echo '<meta content = "2; ../stulog.php" http-equiv = "refresh">';
        }
    }
?>


<!--The othe code starts here for the student -->


<?php
if(isset($_POST['lecsubmit'])){
    $staffno = mysqli_real_escape_string($conn,$_POST['staffno']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql="SELECT * FROM staff WHERE staff_no='$staffno' AND password='$password' AND type='lecturer'";
    $run_user = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($run_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user>0){
        session_start();
        $_SESSION['id']=$row['id'];
        header('Location: ../lecturer/index.php');

    }

    else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo '<meta content = "2; ../leclog.php" http-equiv = "refresh">';
    }
}
?>

    <!--The other code starts here for the admin -->

<?php
if(isset($_POST['admin'])){
    $stafno = mysqli_real_escape_string($conn,$_POST['stafno']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql="SELECT * FROM staff WHERE staff_no='$stafno' AND password='$password' AND type='admin'";
    $run_user = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($run_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user>0){
        session_start();
        $_SESSION['id']=$row['id'];
        header('Location: ../admin/index.php');

    }

    else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo '<meta content = "2; ../adlog.php" http-equiv = "refresh">';
    }
}
?>
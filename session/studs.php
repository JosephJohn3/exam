<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once ('../connection.php');
// Starting Session
// Storing Session
if (isset($user_check)) {
    $user_check=$_SESSION['stud_user'];
// SQL Query To Fetch Complete Information Of User
    $ses_sql=mysqli_query($conn,"select reg_no from student where reg_no='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['reg_no'];
    if(!isset($login_session)){
        mysqli_close($conn); // Closing Connection
// Redirecting To Home Page
    }
}
?>
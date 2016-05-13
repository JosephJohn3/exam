<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once ('../connection.php');
session_start();// Starting Session
// Storing Session
if (isset($user_check)) {
    $user_check=$_SESSION['lec_user'];



// SQL Query To Fetch Complete Information Of User
    $ses_sql=mysqli_query($conn,"select staff_no from staff where staff_no='$user_check' AND type='lecturer'");
    $row = mysqli_fetch_assoc($ses_sql);
    $loginad =$row['username'];
    if(!isset($loginad)){
        mysqli_close($conn); // Closing Connection
// Redirecting To Home Page
    }
}
?>
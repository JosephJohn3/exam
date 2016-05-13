<?php include_once('../connection.php'); ?>
<?php // Fetching variables

if(isset($_POST['studsubmit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $regno = $_POST['regno'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    $query = "INSERT INTO student(firstname,lastname,reg_no,telephone,email,course,password)
		 VALUES ('$firstname' ,'$lastname','$regno','$telephone','$email' ,'$course' ,'$password')";
    $result = mysqli_query($conn, $query);
    if ($result)
         {
        ?>
        <script language="javascript">
            alert("Student : <?php echo "$regno"; ?> ADDED");
            location.href="../admin/addstud.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("student : <?php echo "$regno"; ?> NOT ADDED");
            location.href="../admin/addstud.php";
        </script>
        <?php
    }
}
?>
<?php // Fetching variables

if(isset($_POST['lecsubmit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $regno = $_POST['regno'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    $query = "INSERT INTO student(firstname,lastname,reg_no,telephone,email,course,password)
		 VALUES ('$firstname' ,'$lastname','$regno','$telephone','$email' ,'$course' ,'$password')";
    $result = mysqli_query($conn, $query);
    if ($result)
    {
        ?>
        <script language="javascript">
            alert("Student : <?php echo "$regno"; ?> ADDED");
            location.href="../lecturer/studregister.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("student : <?php echo "$regno"; ?> NOT ADDED");
            location.href="../lecturer/studregister.php";
        </script>
        <?php
    }
}
?>

<!--the code for complains ends here-->
<?php
if (isset($_POST['examination']))
{
	$regno=$_POST['regno'];
	$subid=$_POST['subcode'];
	$course=$_POST['course'];
	$scored=$_POST['scored'];
	$grade=$_POST['result'];
	$query="INSERT INTO exam (reg_no,subcode,course,scored,grade)
	VALUES('$regno','$subid','$course','$scored','$grade')";
	$exam = mysqli_query($conn, $query);
	if ($exam)
		 {
        ?>
        <script language="javascript">
            alert("Examination SCORE ADDED");
            location.href="../admin/studex.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Examination SCORE NOT ADDED");
            location.href="../admin/studex.php";
        </script>
        <?php
    }
}
?>
<!--hiii code ni ya subject form 'entering'-->
<?php
if (isset($_POST['lecexam']))
{
    $regno=$_POST['regno'];
    $subid=$_POST['subcode'];
    $course=$_POST['course'];
    $scored=$_POST['scored'];
    $grade=$_POST['result'];
    $query="INSERT INTO exam (reg_no,subcode,course,scored,grade)
	VALUES('$regno','$subid','$course','$scored','$grade')";
    $exam = mysqli_query($conn, $query);
    if ($exam)
    {
        ?>
        <script language="javascript">
            alert("Examination SCORE ADDED");
            location.href="../lecturer/examin.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Examination SCORE NOT ADDED");
            location.href="../lecturer/examin.php";
        </script>
        <?php
    }
}
?>
    <!--hiii code ni ya subject form 'entering'-->

<!--if any one has a complain he can paste it here-->
<?php
if (isset($_POST['complains']))
{
	$regno=$_POST['regno'];
	$date=$_POST['date'];
	$title=$_POST['title'];
	$issue=$_POST['issue'];
	$query="INSERT INTO complain (reg_no,date,title,issue)
	VALUES('$regno','$date','$title','$issue')";
	$contact_us = mysqli_query($conn, $query);
	if ($contact_us)
		 {
        ?>
        <script language="javascript">
            alert("Complain ADDED");
            location.href="../student/complain.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Complain NOT ADDED");
            location.href="../student/complain.php";
        </script>
        <?php
    }
}
?>
<!--the code for complains ends here-->

<!--code ya contact inaishia hapa-->

<?php
if (isset($_POST['pmessage']))
{
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$title=$_POST['title'];
	$message=$_POST['message'];
	$query="INSERT INTO contact (telephone,email,title,message)
	VALUES('$telephone','$email','$title','$message')";
	$messagep = mysqli_query($conn, $query);
	if ($messagep)

    {
        ?>
        <script language="javascript">
            alert("Mesage  ADDED");
            location.href="../contact.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Mesage NOT ADDED");
            location.href="../contact.php";
        </script>
        <?php
    }
}
?>
<!--code ya contact inaishia hapa-->

<?php
if(isset($_POST['subform'])){
	$subcode=$_POST['subcode'];
	$subname=$_POST['subname'];

	$course=$_POST['course'];


	$query="INSERT INTO subject(subcode,subname,course)
		VALUES('$subcode','$subname','$course')";
	$subject = mysqli_query($conn, $query);
    if($subject)
    {
        ?>
        <script language="javascript">
            alert("Subject : <?php echo "$subcode"; ?> ADDED");
            location.href="../admin/adds.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Subject : <?php echo "$subcode"; ?> NOT ADDED");
            location.href="../admin/adds.php";
        </script>
        <?php
    }
}
?>

<!--code ya form ya subject inaishia hapa tafadhali-->

<!--Edit page code starts-->
<?php
if(isset($_POST['incourse']))
{
	$course=$_POST['coursein'];
	$query="INSERT INTO course (course) VALUES('$course')";
	$courseinsert = mysqli_query($conn, $query);
    if($courseinsert)
    {
        ?>
        <script language="javascript">
            alert("Course : <?php echo "$course"; ?> ADDED");
            location.href="../admin/cadd.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Course : <?php echo "$course"; ?> NOT ADDED");
            location.href="../admin/cadd.php";
        </script>
        <?php
    }
}
?>
<!--The code ends here-->
<?php
if(isset($_POST['staff'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $stafno = $_POST['stafno'];
    $type = $_POST['type'];

    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO staff(firstname,lastname,staff_no,type,telephone,email,password)
VALUES ('$firstname' ,'$lastname','$stafno','$type','$telephone','$email','$password')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        ?>
        <script language="javascript">
            alert("Lecturer : <?php echo "$stafno"; ?> ADDED");
            location.href="../admin/lecregister.php";
        </script>

        <?php
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Lecturer : <?php echo "$stafno"; ?> NOT ADDED");
            location.href="../admin/lecregister.php";
        </script>
        <?php
    }
}
?>
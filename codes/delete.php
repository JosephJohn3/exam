
<?php
include_once '../connection.php';
?>
<!--kudelete subject-->
<?php
if(isset($_POST['deletestud']))
{
	
	$regno = $_POST['regno'];
$result = mysqli_query($conn,"DELETE FROM `student` WHERE `reg_no`= $regno") or die (mysqli_error($conn));
	if($result)
{
?>
<script language="javascript">
alert("Subject No : <?php echo "$regno"; ?> DELETED");
location.href="../admin/rstud.php";
</script>

<?php
}
else
{
?>
<script language="javascript">
alert("Subject No : <?php echo "$regno"; ?> NOT DELETED");
location.href="../admin/rstud.php";
</script>
<?php
}
}
?>

<!--kudelete subject-->
<?php
if(isset($_POST['lecdelete']))
{

	$regno = $_POST['regno'];
	$result = mysqli_query($conn,"DELETE FROM `student` WHERE `reg_no`= $regno") or die (mysqli_error($conn));
	if($result)
	{
		?>
		<script language="javascript">
			alert("Subject No : <?php echo "$regno"; ?> DELETED");
			location.href="../lecturer/studr.php";
		</script>

		<?php
	}
	else
	{
		?>
		<script language="javascript">
			alert("Subject No : <?php echo "$regno"; ?> NOT DELETED");
			location.href="../lecturer/studr.php";
		</script>
		<?php
	}
}

?>
<!--code ya kudelete student-->
<?php
if(isset($_POST['deletestaf'])){
	
	$stafno = $_POST['stafno'];
$result = mysqli_query($conn,"DELETE FROM `staff` WHERE `staff_no`= '$stafno'") or die (mysqli_error($conn));
	if($result)
{
?>
<script language="javascript">
alert("User No : <?php echo "$stafno"; ?> DELETED");
location.href="../admin/lecr.php";
</script>

<?php
}
else
{
?>
<script language="javascript">
alert("User No : <?php echo "$stafno"; ?> NOT DELETED");
location.href="../admin/lecr.php";
</script>
<?php
}
}
?>
<!--kudelete course-->
<?php
if(isset($_POST['deletecourse'])){
	
	$course = $_POST['courseid'];
$result = mysqli_query($conn,"DELETE FROM `course` WHERE `courseid`= '$course'") or die (mysqli_error($conn));
	if($result)
{
?>
<script language="javascript">
alert("Course No : <?php echo "$course"; ?> DELETED");
location.href="../coursedit.php";
</script>

<?php
}
else
{
?>
<script language="javascript">
alert("Course No : <?php echo "$course"; ?> NOT DELETED");
location.href="../coursedit.php";
</script>
<?php
}
}
?>


<?php include_once "vendor/autoload.php"; 
	  use Ura\Dhura\Controler\Student;	

	  $stu = new Student;

	  if(isset($_GET['id'])){
		  $id = $_GET['id'];

		$data = $stu ->singleStudent($id);
		$singlestu = $data -> fetch_assoc();
	  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	<div class="warp">
	<table class="table table-striped">
		<tr>
			<td>name</td>
			<td><?php echo $singlestu['name']; ?></td>
		</tr>

		<tr>
			<td>name</td>
			<td><?php echo $singlestu['email']; ?></td>
		</tr>

		<tr>
			<td>name</td>
			<td><?php echo $singlestu['cell']; ?></td>
		</tr>
		<tr>
			<td>name</td>
			<td><?php echo $singlestu['uname']; ?></td>
		</tr>
		
	</table>
	<a class= "btn btn-sm btn-primary" href="students.php">Back</a>
	</div>


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>

<?php include_once "vendor/autoload.php"; 
	  use Ura\Dhura\Controler\Student;	

	  $stu = new Student;

	  if(isset($_GET['id'])){
		  $id = $_GET['id'];
		  $data = $stu -> editstudent($id);


		 $update_data =  $data ->fetch_assoc();
	  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
<?php

if(isset($_POST['add'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
	$uname = $_POST['uname'];
	


	if(empty($name) || empty($email) || empty($cell)|| empty($uname) ){
		$msg ='<p class= "alert alert-success" > All filed are required! <button class ="close" data-dismiss="alert" >&times;</button> </p>'; 
	}else{
		$msg = $stu  -> Updatedata($name, $email, $cell, $uname,$id  );
	}
}





?>

	<div class="wrap ">
		<div class="card shadow">
			<div class="card-body">
				<h2>update data</h2>
				<?php
					if(isset($msg)){
						echo $msg;
					}
				
				?>
				
				<form action="" method='POST' enctype='multipart/form-data'>

					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" value="<?php echo $update_data['name'];  ?>" name="name" type="text">
					</div>
					
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" value="<?php echo $update_data['email'];  ?>" name="email" type="email">
					</div>

					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" value="<?php echo $update_data['cell'];  ?>" name="cell" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" value="<?php echo $update_data['uname'];  ?>" name="uname" type="text">
					</div>
			

					<div class="form-group">
						<input name='add' class="btn btn-primary" type="submit" value="update">
					</div>
				</form>
			</div>
		</div>
	</div>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
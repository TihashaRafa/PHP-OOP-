
<?php include_once "vendor/autoload.php"; 
	  use Ura\Dhura\Controler\Student;	

	  $stu = new Student;

	if(isset($_GET['delete_id'])){
		$id =$_GET['delete_id'];


		$msg = $stu ->DeleteStudent($id);
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/fonts/font_awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="wrap-table ">
	<?php 
	
	if(isset($msg)){
		echo $msg;
	}
	
	?>

	<a class="btn btn-sm btn-primary" href="index.php">Log Out</a>

		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>cell</th>
							<th>uname</th>
							<th>action</th>
							

						</tr>
					</thead>
					<tbody>

					<?php 
					
					$data = $stu -> shobdata();
					$i =1;
					while($d = $data -> fetch_assoc()):					
					
					?>
						
						<tr>
							<td><?php  echo $i; $i++; ?></td>
							<td><?php  echo $d['name']; ?></td>
							<td><?php  echo $d['email']; ?></td>
							<td><?php  echo $d['cell']; ?></td>
							<td><?php  echo $d['uname']; ?></td>
						
							
							
							<td> 
							<a class="btn btn-sm btn-info" href="show.php?show_id=<?php  echo $d['id']; ?>">View</a>
							<a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php  echo $d['id']; ?>">Edit</a>
							<a class="btn btn-sm btn-danger" href="?delete_id=<?php  echo $d['id']; ?>">Delete</a>
							</td>
							
						</tr>
						<?php   endwhile; ?>	

					</tbody>
				</table>
			</div>
		</div>
	</div>
	

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('a#dlt_btn').click(function(){
			let conf = confirm('Are you sure?');

			if(conf == true){
				return true;
			}else{
				return false;
			}
		})
	</script>
</body>
</html>
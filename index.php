<html>
<head>
	<title>CariKos | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(to right, #31e852, #1B75BA); background-repeat: no-repeat;">


	
	
		<div class="card" style="border-radius: 8px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65); height: 410px; margin: 6rem auto 8.1rem auto; width: 329px;">
			<div class="card-title" style="font-family:Night Shift ; letter-spacing: 2px; padding-bottom: 23px; padding-top: 13px; text-align: center; font-weight: bold;" >
				LOGIN ADMIN CARIKOS
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</div>
			
			<form method="POST" action="">
				<div class="form-group mx-sm-5 mb-3">
					<label>Username</label>
					<input type="text" class="form-control" name="username">	
				</div>
				
				<div class="form-group mx-sm-5 mb-3">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary mx-sm-5 mb-3">Login</button>
			</form>
		</div>
	
<?php
if (isset($_POST['submit'])) {
	include 'koneksi.php';
	$pass  = md5($_POST['password']);

	

	$cek=mysqli_query($conn,"SELECT * FROM admin WHERE 
	username='$_POST[username]' AND password='$pass'");

	$data=mysqli_fetch_array($cek);
	$result=mysqli_num_rows($cek);
	if ($result>0) {
		session_start();
		$_SESSION['admin']=$data['username'];
		

		header('location: list-kos.php');
			}
	else 
		echo "<script>alert('Username and password invalid')</script>";

}
?>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<body>
</html>


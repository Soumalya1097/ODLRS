<?php

require './class/atclass.php';

?>




<html>
<head>
		<title> Login Panel </title>
		<link rel="stylesheet" type="text/css" href="sty.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<style>
body {
  background-image: url('labte.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>



<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2 style = "color:SlateBlue; "> For Students :) </h2>
					<form action = "#" method="post">
						<div class="form-group">
							<label>Name</label>
								<input type="text" name="name" class="form-control" required>
									</div>
					<div class="form-group">
							<label>Student ID</label>
								<input type="studentid" name="studentid" class="form-control" required>
									</div>
									<button type="submit" class="btn btn-primary"> login </button>
					</form>
				</div>
				
				<div class="col-md-6 login-right"">
				<h2 style = "color:SlateBlue; "> For Admins :)	</h2>
					<form action = "#" method="post">
						<div class="form-group">
							<label>Name</label>
								<input type="text" name="aname" class="form-control" required>
									</div>
					<div class="form-group">
							<label>Password</label>
								<input type="password" name="apassword" class="form-control" required>
									</div>
									<button type="submit" class="btn btn-primary"> Sign in </button>
					</form>
				</div>
			</div>
		</div>
		
	<?php

	if($_SERVER["REQUEST_METHOD"]=="POST")
		
		{
			$uname = $_POST["aname"];
			$upassword = $_POST["apassword"];
			
			$query = " select * from login where uname = '{$uname}' && upassword = '{$upassword}' ";
			
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result))
			{
					session_start();
					$_SESSION['admin']=$uname;
					header("location: index.php");
			}	
			else
			{
					echo "<script>alert('Incorrect Password');</script>";
					
			}
		}
	?>	
		
		
		</body>
		
		</html>
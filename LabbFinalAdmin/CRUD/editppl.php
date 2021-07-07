<?php

	require './class/atclass.php';
	
	$editid = $_GET['eid'];
	
	if(!isset($_GET['eid']) || empty($_GET['eid']))
		
		{
			header("location:display-people.php");
		}
	
	
	$selectq = mysqli_query($conn, "select * from tbl_people where ppl_id='{$editid}'") or die(mysqli_error($conn));	
	$selectrow = mysqli_fetch_array($selectq); 
	print_r($selectrow);
	
	
	
	$msg = "";
	
	if($_POST)
	{
		$id = $_POST['id'];
		$stid = $_POST['stid'];
		$pname = $_POST['pname'];
		$dname = $_POST['dname'];
		$emid = $_POST['emid'];
		$pnum = $_POST['pnum'];
		$age = $_POST['age'];
		$add = $_POST['add'];
		$date = $_POST['date'];
		$pprice = $_POST['pprice'];
		$pdetails = $_POST['pdetails'];
		
		
		
	
	$query = mysqli_query($conn,"update tbl_people set studentid = '{$stid}', ppl_name = '{$pname}', department = '{$dname}', emailid = '{$emid}', phonenumber = '{$pnum}', age = '{$age}', address = '{$add}', date = '{$date}',  ppl_price = '{$pprice}', ppl_details = '{$pdetails}' where ppl_id='{$id}' ") or die(mysqli_error($conn));
		
		if($query)
			
			{
				echo "<script>alert('Record Updated');window.location='display-people.php';</script>";
			}
	
	}
 ?>





<!DOCTYPE HTML>
<html>
<head>
<title> Admin Panel </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		
		<?php
		include './themelayout/sidebar.php';
		?>
		
		<!-- header-starts -->
		<?php
		include './themelayout/header-menu.php';
		?>
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">People Form</h2>
					
					<?php
						echo $msg;
					?>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							
							<div class="form-title">
								<h4>Edit People Information:</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multipart/form-data"> 
									
									<input type="hidden" name="id" value="<?php echo $selectrow['ppl_id']?>">
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Student Id</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['studentid']?>" name="stid" placeholder="Enter Student Id" required> 
											</div> 
									</div>
									
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['ppl_name']?>" name="pname" placeholder="Enter Person Name" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Department</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['department']?>" name="dname" placeholder="Enter Department Name" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email Id</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['emailid']?>" name="emid" placeholder="Enter Email" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['phonenumber']?>" name="pnum" placeholder="Enter Phone Number" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Age</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['age']?>" name="age" placeholder="Enter Person Age" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['address']?>" name="add" placeholder="Enter Address" required> 
											</div> 
									</div>
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
											<div class="col-sm-9"> 
												<input type="date" class="form-control" id="inputEmail3" value="<?php echo $selectrow['date']?>" name="date" placeholder="Give Date" required> 
											</div> 
									</div>
																	
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">People Price</label>
											<div class="col-sm-9"> 
												<input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['ppl_price']?>" name="pprice" placeholder="Enter People Price" required> 
											</div> 
									</div>
							
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Details</label>
											<div class="col-sm-9"> 
											<textarea class="form-control" name="pdetails" required> <?php echo $selectrow['ppl_details']?> </textarea> 
											</div> 
									</div>							
							
						<div class="col-sm-offset-2"> 
							<button type="submit" class="btn btn-primary">Update</button> 
							<button type="reset" class="btn btn-danger">Reset</button> 
							<button type="button" onclick="window.location='display-people.php';" class="btn btn-info">View</button> 
					</div>
			</form> 
							</div>
						</div>
					</div>
				
							</form>
						</div>
			
				</div>
				
				<!--footer-->
		
		<?php
		include './themelayout/footer.php';
		
		?>
		
        <!--//footer-->
				
				
			</div>
		
		
		
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>
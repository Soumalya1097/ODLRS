<?php


session_start();
if(!isset($_SESSION['studentid'])){

    header('location:newreg.php');
}

?>
<html>
<head>
<title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="sty.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
	
        
        <div class="container">
      
        <a class="float-right" href="index.php"> LOGOUT </a>
            
<h1>Welcome!!!! <?php $name=$_SESSION['name']; 
					echo $_SESSION['name']; ?> </h1> 
        
        </div>
		
		<div class="container">
		<br> <br>
		
		<table class="table table-striped table-hover table-bordered" style="width:100%" align='center' >
				<tr class = "bg-dark text-white text-center">
					<th>Consignment Number</th>
					<th>Name</th>
					<th>Department</th>
					<th>Student Id</th>
					<th>Document Location</th>
				</tr>
				
				<?php 
		
		$conn = mysqli_connect('localhost','root');

		mysqli_select_db($conn, 'projectwork');
		
		if($conn == false){
			die("ERROR: Could not connect.". mysqli_connect_error());
		}
		
		$studentid=$_SESSION['studentid'];

		$sql = "SELECT consignmentnumber, name, department, studentid, docloc FROM vbstudents where studentid = '$studentid' ";
		$query = mysqli_query($conn,$sql);		
				while($res = mysqli_fetch_array($query)){
				
				
				?>
			<tr  class="bg-white text-dark text-center ">
				<td><?php echo $res['consignmentnumber']; ?> </td>
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['department']; ?></td>
				<td><?php echo $res['studentid']; ?></td>
				<td><?php echo $res['docloc']; ?></td>
			</tr>
			
			<?php
			
				}
			
			?>
</table>
		    
				</div>
				
		</div>	
		
    </body>
    
    
    
</html>
<!DOCTYPE html>
<html>
<head>
<title> Lab Test </title>
</head>
<body>
<center> <h1 style= "color:SlateBlue; "> <font size = "7"> <u> <i> <strong> Lab Reporting System </strong>  </i> </u> </font> </h1> 


<style>
body {
  background-image: url('labte.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


		<form action="conn.php" method="post">
         
		 <table align="center" cellspacing="5" cellpadding="10">
			
			<tr>
			
          <th> Student Id: </th>
		  
            <td><input type="text" name="studentid" placeholder="Enter your student ID" required></td>
			
			</tr>
          
		  
			<tr>
			
          <th> Student Name: </th> 
            
             <td> <input type="text" name="pname" placeholder="Enter your name"> </td>
            
          </tr>
		  
			<tr>
          <th> Department: </th>
            
            <td>  <input type="text" name="department" placeholder="Enter your department"></td>
            
          </tr>
		  
		   <tr>
          <th> Email Id: </th>
            
            <td>  <input type="text" name="emailid" placeholder="Enter your email id" > </td>
            
          </tr>
		  
		  <tr>
          <th> Phone Number: </th>
            
            <td>  <input type="phonenumber" name="phonenumber" placeholder="Enter your phone number" required></td>
            
          </tr>
		  
		   <tr>
          <th> Age </th>
            
            <td>  <input type="number" name="age" placeholder="Enter your Age"></td>
            
          </tr>
		  
		   <tr>
          <th> Address </th>
            
            <td>  <input type="text" name="address" placeholder="Enter your permanent address" required></td>
            
          </tr>
               
            <tr>
          <th> Test </th>
            
            <td>  <input type="text" name="pdetails" placeholder="Details for the test" required></td>
            
          </tr>
		  
          <Th> Reporting Date: </th>
           
             <td> <input type="date" name="date" placeholder="dd/mm/yyyy"> </td>
            
          </tr>
		  
		  <tr>
          <td colspan="2" align="center">
		   <button type="submit">Submit</button> 
		   <button type="reset">Reset</button> 
		    </td>
			</tr>
        </table>
		</form>
		<div> <a href="login.php"> <button type="login">Login!!</button> </a>
		</div>
	</body>
	
	</html>

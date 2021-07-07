<?php


$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn, 'db_project');

$studentid = $_POST['studentid'];
$pname = $_POST['pname'];
$department = $_POST['department'];
$emailid = $_POST['emailid'];
$phonenumber = $_POST['phonenumber'];
$age = $_POST['age'];
$address = $_POST['address'];
$date = $_POST['date'];
$pdetails = $_POST['pdetails'];

$sql = "insert into tbl_people (studentid, ppl_name, department, emailid, phonenumber, age, address, date, ppl_details) VALUES ('$studentid', '$pname', '$department', '$emailid', '$phonenumber', '$age', '$address', '$date', '$pdetails');";

mysqli_query($conn,$sql);
echo "registration Successful";

?>


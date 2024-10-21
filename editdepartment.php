<?php

    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";

$deptname=$_REQUEST['deptname'];

$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
$query= "SELECT * FROM tbldepartments WHERE deptname='".$deptname."'";
$resource= mysqli_query($conn,$query) or die("problem executing query");
$result=mysqli_fetch_array($resource);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Department</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form action="editdepartment1.php" method="post">
 <div class="wrapper">
 	<form method="POST" action="">
 	<div class="contact-form">
 		<div class="input-fields">

 			<input type="text" name="deptname" class="input1" placeholder="Department Name" value="<?php echo $result['deptname']; ?>"/ >

 			<input type="text" name="deptsn" class="input1" placeholder="Department Short Name" value="<?php echo $result['deptsn']; ?>"/>
 			
 			<input type="text" name="deptcode" class="input1" placeholder="Department Code" value="<?php echo $result['deptcode']; ?>"/>
 			
 	        <br><br>
            <button type="submit" class="btn" name="submit">Update</button>

             <br>
            <button type="submit" class="btn"> 
            <a href="viewdepartments.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 

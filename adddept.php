<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Department</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <div class="wrapper">
 	<form method="POST" action="">
 	<div class="contact-form">
 		<div class="input-fields">

 			<input type="text" name="deptname" class="input1" placeholder="Department Name">

 			<input type="text" name="deptsn" class="input1" placeholder="Department Short Name">
 			
 			<input type="text" name="deptcode" class="input1" placeholder="Department Code">
 			
 	        <br><br>
            <button type="submit" class="btn" name="submit">Save</button>

             <br>
            <button type="submit" class="btn"> 
            <a href="admindashboard.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 


<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn){
		die("connection failed:". mysql_connect_error());
     }else{
	if (isset($_POST['submit'])) {

	$deptname = $_POST['deptname'];
	$deptsn = $_POST['deptsn'];
	$deptcode = $_POST['deptcode'];


	$insert = "INSERT INTO tbldepartments (deptname,deptsn,deptcode) VALUES('$deptname','$deptsn','$deptcode')";

	  if(mysqli_query($conn,$insert)){


	echo "<script>
		alert('Successful');
	</script>";
}else{
	echo "<script>
		alert('ERROR');
		</script>";

}


}
}
?>

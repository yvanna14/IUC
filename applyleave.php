<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Apply Leave</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <?php
 session_start();

    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";
	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn){
		die("connection failed:". mysql_connect_error());
     }else{
	if (isset($_POST['submit'])) {

	$matricule = $_POST['matricule'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dept = $_POST['dept'];
	$leave_type = $_POST['leave_type'];
	/*$description = $_POST['description'];*/
	$leave_date = $_POST['leave_date'];
	$return_date = $_POST['return_date'];

if($leave_date > $return_date){
                echo "<script>
		alert('Return Date should be Greater than Leave Date');
	</script>";
           }


else{


	$insert = "INSERT INTO tbleaves (matricule,firstname,lastname,dept,leave_type,leave_date,return_date) VALUES('$matricule','$firstname','$lastname','$dept','$leave_type','$leave_date','$return_date')";

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
}

 ?>
 <div class="wrapper">
 	<form method="POST" action="">
 	<div class="contact-form">
 		<div class="input-fields">
 			<input type="text" name="matricule" readonly value="<?php echo $_SESSION['matricule']; ?>" class="input" >

 			<input type="text" name="firstname" readonly value="<?php echo $_SESSION['first']; ?>" class="input" >
 			
 			<input type="text" name="lastname" class="input" readonly value="<?php echo $_SESSION['last']; ?>">
 			
 			<input type="text" name="dept" class="input" readonly value="<?php echo $_SESSION['dept']; ?>">

			<input type="text" name="leave_type" class="input" placeholder="Leave Type">
			<!--<br>
			<input type="text" name="description" class="input" placeholder="Description"> -->
            <br>
            Leave Date:
            <input type="date" name="leave_date" class="input"  placeholder="Leave Date">
            <br>
            Return Date:
            <input type="date" name="return_date" class="input"  placeholder="Return Date">
			
        
            <button type="submit" class="btn" name="submit">Apply </button>
            <br>
            <button type="submit" class="btn">  
            <a href="employeedashboard.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 


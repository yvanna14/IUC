<?php

    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";

	$matricule=$_REQUEST['matricule'];


	$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
    
    $query="DELETE FROM tblemployees WHERE matricule='".$matricule."'" or die("problem executing query");

     mysqli_query($conn,$query);

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Employees</title>
  </head>
  <body>

  	<?php

  	 header('Location: viewingemp.php');

  	?>

  </body>
  </html>
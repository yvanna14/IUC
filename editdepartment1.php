<?php

  $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";

$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);

if (!$conn){
    die("connection failed:". mysql_connect_error());
     }else{
  if (isset($_POST['submit'])) {

	$deptid=$_REQUEST['deptname'];
	$deptname=$_REQUEST['deptname'];
	$deptsn=$_REQUEST['deptsn'];
	$deptcode=$_REQUEST['deptcode'];


    
    $query="UPDATE tbldepartments SET deptname='".$deptname."',deptsn='".$deptsn."',deptcode='".$deptcode."' WHERE  deptname='".$deptname."'" or die("problem executing query");


    if(mysqli_query($conn,$query)){


  echo "<script>
    alert('Successful');
    document.location.href='http://localhost/AEMS/viewdepartments.php'
  </script>";
}else{
  echo "<script>
    alert('ERROR');
    </script>";

}


}
}
?>
   
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Departments</title>
  </head>
  <body>

  	<?php

  	 header('Location: viewdepartments.php');

  	?>

  </body>
  </html>

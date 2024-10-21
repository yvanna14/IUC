<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=emsdb","root","");
	}
	catch(Exception $e)
	{
		die('Erreur : ' .$e->getMessage);
	}
	if(isset($_GET["Empty"]))
	{
		$stat = $_GET["Empty"];
		if(isset($_GET["id"]))
		{
			$id = $_GET["id"];
			
		}



	}
	$sql = $bdd->prepare("UPDATE tbleaves SET status=:sta WHERE ID=:id");
	$sql->execute(array(
		"id" => $id,
		"sta" => $stat
		));

	header("Location: ../AEMS/viewingleaves.php");
?>
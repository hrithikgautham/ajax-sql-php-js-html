<?php

include_once "./dbh.php";

if(isset($_GET["name"])){
	$name = mysqli_real_escape_string($db, $_GET["name"]);
	if(preg_match("/^\D+$/", $name)){//if the input has members other than digitd then proceed
		$sql = "SELECT * FROM users WHERE name = '$name'";
	}
	else if(empty($name)){//if input was an empty string query all the users
		$sql = "SELECT * FROM users;";
	}else{
		echo "Invalid Query";
		exit();
	}
	$result = mysqli_query($db, $sql);
	$rows = mysqli_num_rows($result);

	if($rows < 1){
		echo("no users available". $rows);
		exit();
	}
	// echo $rows;
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($users);
}

?>
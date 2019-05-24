<?php

include_once "./dbh.php";

// if(isset($_GET["newvalue"])){
	//update here
	$name = mysqli_real_escape_string($db, $_GET["name"]);
	$newVal = mysqli_real_escape_string($db, $_GET["newvalue"]);
	if(empty($name)){
		echo "error : empty name field for update given";
		exit();
	}
	$sql = "UPDATE users SET name = '$newVal' WHERE name = '$name'";
	$result = mysqli_query($db, $sql);
	if($result){
		echo "update successfull";
	}else{
		echo "error in updating";
	}

// }else if(!empty($_GET["name"])){
// 	//delete here
// }else{
// 	//error
// 	echo "invalid query";
// 	exit();
// }

?>
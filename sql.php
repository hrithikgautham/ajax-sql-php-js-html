<?php

include_once "./dbh.php";

if(isset($_GET["get-submit"])){
	echo "PHP GET ".$_GET["name"];
}else if(isset($_POST["name"])){//concerns database
	$name = mysqli_real_escape_string($db, $_POST["name"]);
	echo "connection done ".$name."<br>";
	$sql = "INSERT INTO users(name) VALUES('$name');";
	$result = mysqli_query($db, $sql);
	if($result){
		echo "user added";
	}else{
		echo "error : ".mysqli_error($db);
	}
}else if(isset($_GET["name"])){
	echo $_GET["name"];
}else if(isset($_POST["post-submit"])){
	echo "posted user : ".$_POST["post-name"];
}else{
	echo "illegal submission";
	exit();
}

?>
<?php

//database connection
$db = mysqli_connect("localhost", "root", "", "ajax");
			//host name, user name, password, database name 

if(mysqli_connect_errno()){
	echo("<h1>Database Connection error</h1>");
	exit();
}
//connection done

?>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$db = "signup";

$con = mysqli_connect($servername, $username, $password, $db);

if ($con) {
	echo "g000d";
	}
	else {
		echo "n0t";
	}
	
if(ISSET($_POST['submit'])){
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["password"];

$sql =  mysqli_query($db,"INSERT INTO `data`(`Name`, 'Email', 'Password') VALUES ('$name', '$email', '$pass')");


$result = mysqli_query($con,$sql);

if($result){
	echo "successfully inserted!";
	
}else{
	echo "Not inserted";
}

}
?>

<?php
$conn = mysqli_connect("localhost","root","","educationhub") or die("connection error");

if(isset($_POST['user_name'])){
	$query = mysqli_query($conn,"select * from users where username = '".$_POST["user_name"]."'");
	if(mysqli_num_rows($query)>0){
		echo "this username is already taken please try another one";
	}else{
		echo "username is good";
	}
}



?>
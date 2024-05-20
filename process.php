<!-- adding functionality in process file -->
<!-- submit it by using POST variable -->
<?php
include 'database';

//Check if form submitted
if (isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	//set default timezone
	date_default_timezone_set('Germany/Berlin');
	$time = date('h:i:s a', time());
	
	//validate input
	if(!isset($user) || $user == '' || !isset($message) || $message == ''){
		
	} else {
		$query = "INSERT INTO talks (user, message, time)
				VALUES ('$user', '$message', '$time')";
		
		if(!mysqli_query($con, $query)) {
			die('Error: '.mysqli_error($con));
		} else {
			header("LOCATION: index.php");
			exit();
		}
	}
		
}
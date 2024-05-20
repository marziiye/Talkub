<?php include 'database.php' ?>
<?php
	//Create Select Query
	$query = "SELECT * FROM talks";
	//Creqate another variable to hold the results of the query
	// Use $con to pass in your connection variable
	$talks = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale="1.0" />
		<title>Talkup</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>Talkup! Talkbox</h1>
			</header>
			<div id="talks">
				<ul>
					<!-- that way we can put straight HTML inside of the loop -->
					<?php while($row = mysqli_fetch_assoc($talks)) :  ?>
						<li class="talk"><span>11:11AM - </span>Marziye: Hallo! Wie gehts? </li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process.php">
				<!-- The 'action' attribute in a web form specifies the URL 
				to which the form data is sent when the form is submitted. -->
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter Your Message" />
					<br />
					
					<input class="talk-btn" type="submit" name="submit" value="Talk up!" />
				</form>
			</div>
		</div>
	</body>
</html>
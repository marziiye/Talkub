<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Talkup</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>Talkup! Talkbox</h1>
			</header>
			<div id="Takls">
				<ul>
					<li class="Talk"><span>11:11am - </span>Marziye: Hallo! Wie gehts? </li>
					<li class="Talk"><span>11:11am - </span>Marziye: Hallo! Wie gehts? </li>
					<li class="Talk"><span>11:11am - </span>Marziye: Hallo! Wie gehts? </li>
					<li class="Talk"><span>11:11am - </span>Marziye: Hallo! Wie gehts? </li>
					<li class="Talk"><span>11:11am - </span>Marziye: Hallo! Wie gehts? </li>
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process.php">
				<!-- The 'action' attribute in a web form specifies the URL 
				to which the form data is sent when the form is submitted. -->
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="Talk-btn" type="submit" name="submit" value="Talk up!" />
				</form>
			</div>
		</div>
	</body>
</html>
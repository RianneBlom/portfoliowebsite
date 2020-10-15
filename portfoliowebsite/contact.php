<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contact - Rhiannon Ozroth</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div id="header">
		<h1><a href="index.php">Rhiannon Ozroth</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="portfolio.php">portfolio</a>
				<ul>
					<li>
						<a href="products.php">products</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="cv.php">cv</a>

			</li>
			<li>
				<a href="about.php">About</a>
			</li>			
			<li class="current">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
		<form action="mailto: rianne.blom@student.hu.nl" method="post" enctype="text/plain">
			<h3>Want to know more? Send me an email!</h3>
			<label for="name">
				<span>Name</span>
				<input type="text" id="name">
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email">
			</label>
			<label for="subject">
				<span>Subject</span>
				<input type="text" id="subject">
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input type="submit" id="send" value="Send">
		</form>
	</div>
	<div id="footer">
		<div>
			<span>Utrecht</span>
			<p>
				Rihannon Ozroth All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https://www.facebook.com/RhiannonOzroth/" id="facebook" target="_blank">
				<div class='social-media facebook'></div>
			</a>
			<a href="https://www.instagram.com/eira_aqua_aura/" id="instagram" target="_blank">
				<div class='social-media instagram'></div>
			</a>
	</div>
</body>
</html>
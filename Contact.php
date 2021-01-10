<html>
<head>
	<title> Contact Form Design </title>
	<!-- Bootstrap -->
    
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	
	<div class="contact-title">
		<h1 style="padding:0 0 25px 0;"> SEND US </h1>
		<h1 style="padding:0 0 25px 0;"> A RAVEN </h1>
		<h2 style="padding:0 0 25px 0;"> Do you have general questions about our social network? </h2>
		<h2> Send us a raven and we are always ready to answer you as fast as we can!! </h2>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="">
		<input name="firstname" type="text" class="form-control" placeholder="Your First Name" required>
		<br>
		<input name="lastname" type="text" class="form-control" placeholder="Your Last Name" required>
		<br>
		<input name="email" type="text" class="form-control" placeholder="Your Email" required>
		<br>
		<input name="Inquiry Subject" type="text" class="form-control" placeholder="Inquiry Subject" required>
		<br>
		<textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
		<br>
		<input type="submit" class="form-control submit" value="Send message">
	</div>
</body>
</html>

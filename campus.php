<!DOCTYPE html>
<html>
<head>
	<title>Smart Parking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<div class="inheader_pic"><img src="logo.png" height="120" width="320" id="logo"></div>
	</div>
	<div class="content">
		<form method="post">
			<select name="YourCampus">
				<option value="downtown">Downtown Campus</option>
				<option value="health">Health Science Campus</option>
				<option value="evansdale">Evansdale Campus</option>
			</select>
			<br>
			<input type="button" onclick="this.form.action='provide.php';this.form.submit();" class="reserve-top" value="Provide information" /><br>
			<input type="button" onclick="this.form.action='request.php';this.form.submit();" class="reserve-top" value="Request information" />
		</form>
	</div>

	
</body>
</html>
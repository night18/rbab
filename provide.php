<!DOCTYPE html>
<html>
<head>
	<title>Smart Parking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$campus = $_POST['YourCampus'];
	?>
	<div class="header">
		<div class="inheader_pic"><img src="logo.png" height="120" width="320" id="logo"></div>
	</div>
	<div class="content">
		<div>
			<h3>What is the parking status in <?php 
			if($campus == 'downtown'){
				echo "Downtown Campus";
			}else if($campus == 'health'){
				echo "Health Science Campus";
			}else if($campus == 'evansdale'){
				echo "Evansdale Campus";
			}
			 ?> ?</h3>
		</div>
		<form action = 'save.php' method="post">
			<input type="hidden" name="YourCampus" value=<?php echo $campus;?> >
			<button type="submit" name="status" class="reserve-top" value="no" >No Parking</button><br>
			<button type="submit" name="status" class="reserve-top" value="limited" >Limited Parking</button><br>
			<button type="submit" name="status" class="reserve-top" value="many" >Many Parking </button><br>
		</form>
	</div>

	
</body>
</html>
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
		<?
		$campus = $_POST['YourCampus'];
		$campusName = "There are some error, please Contact the designer.";
		if($campus == 'downtown'){
			$myfile = fopen("./database/downtown.txt", "r") or die("Unable to open file");
			$campusName = 'Downtown';
		}else if($campus == 'health'){
			$myfile = fopen("./database/health.txt", "r") or die("Unable to open file");
			$campusName = 'Health Science';
		}else if($campus == 'evansdale'){
			$myfile = fopen("./database/evansdale.txt", "r") or die("Unable to open file");
			$campusName = 'Evansdale';
		}
		if($myfile != NULL){
			$status_code = fread($myfile,1);
			$status = "";
			if($status_code == '0'){
				$status = "No parking";
			}else if($status_code == '1'){
				$status = "Limited parking";
			}else if($status_code == '2'){
				$status = "Many parking";
			}else{
				$status = "There are no data about this campus.";
			}

			$myText = "The parking status in ".$campusName." campus : " . $status;
			echo $myText;
		}else{
			echo "Error: ".$campus;
		}
		
	?>
	</div>

	
</body>
</html>
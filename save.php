<!DOCTYPE html>
<html>
<head>
	<title>Smart Parking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="plugin/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugin/sweetalert.css">
</head>
<body>
	
	<div class="header">
		<div class="inheader_pic"><img src="logo.png" height="120" width="320" id="logo"></div>
	</div>
	<div class="content">
		<?php
		$campus = $_POST['YourCampus'];
		$status = $_POST['status'];

		//status 0:no, 1: limited, 2: many

		if($campus == 'downtown'){
			$myfile = fopen("./database/downtown.txt", "w") or die("Unable to open file");
		}else if($campus == 'health'){
			$myfile = fopen("./database/health.txt", "w") or die("Unable to open file");
		}else if($campus == 'evansdale'){
			$myfile = fopen("./database/evansdale.txt", "w") or die("Unable to open file");
		}

		if($status == 'no'){
			$record = '0';
		}else if($status == 'limited'){
			$record = '1';
		}else if($status == 'many'){
			$record = '2';
		}
		echo $status;

		if($myfile != NULL){
			fwrite($myfile, $record);
			fclose($myfile);
			echo '<script language="javascript">';
			echo 'swal(
			{title: "Success!",
			 text: "Provide Information successfully",
			 type:"success"
			},function(isConfirm){
				if(isConfirm){
					window.location = "index.php";
				}else{
					window.location = "index.php";
				}
			}
			)';
			echo '</script>';
		}else{ 
			echo "Error: ".$campus;
		}	
	
	?>
	
	</div>

	
</body>
</html>
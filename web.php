<!DOCTYPE html>
<html>
	<head>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<meta charset="UTF-8" />
		<title>Edit Distance</title>	
		<link rel="icon" href="https://www.elevatus.io/wp-content/uploads/2021/11/Favicon.svg" sizes="32*32">
		<link href="css/style.css" rel="stylesheet" id="bootstrap-css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>
	<body>		
		<div class="wrapper fadeInDown">
			<div id="formContent">
				<div class="fadeIn first">
					<img src="img/elevatus.png" id="icon" alt="User Icon" />
					<h1>Elevatus Assignment</h1>
				</div>
				<!-- Inputs Form  -->
				<form id="check_form" action="" method="GET">
					<div class="alert alert-danger" role="alert" id="errors"></div>
					<input type="text" id="strA" class="fadeIn second error_strA" name="strA" placeholder="Please enter first string">
					<input type="text" id="strB" class="fadeIn third error_strB" name="strB" placeholder="Please enter second string">
					<input type="submit" class="fadeIn fourth" value="Calculate">
				</form>
				<div id="formFooter">
					<!-- results location  -->
					<p class="underlineHover" id="result" ></p>
				</div>	
			</div>
		</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Ajax call for web_call.php page -->
	<script src="js/script.js"></script>
	</body>
</html>
		
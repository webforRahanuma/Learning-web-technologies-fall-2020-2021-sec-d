<?php	 

	if(isset($_REQUEST['submit'])){
		$dob = $_REQUEST['dob'];
		
		if($dob == ""){
			echo " field required...";
		}else{
			echo $_REQUEST['dob'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Date of Birth</legend>
			<input type="date" name="dob" value=""><br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
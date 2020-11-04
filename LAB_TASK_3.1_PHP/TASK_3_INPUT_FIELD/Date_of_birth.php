<?php	
    $data = "";
	if(isset($_REQUEST['submit'])){
		$dob = $_REQUEST['dob'];
		
		if($dob == ""){
			echo " field required...";
		}else{
			$data = $dob;
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
			<input type="date" name="dob" value="<?=$data ?>"><br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
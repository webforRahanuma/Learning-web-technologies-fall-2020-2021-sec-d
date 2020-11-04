<?php
	echo $_POST['blood_group'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood_Group</title>
</head>
<body>
    <form method="post">
		<fieldset>
            <legend>Blood Group</legend>
            <select name="blood_group">
            <option value="field required..." selected>Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option> 
            <option value="AB-">AB-</option><br>
            </select>
        <hr>
        <input type="submit" name="" value="submit"> <br>
        </fieldset>
	</form>
</body>
</html>
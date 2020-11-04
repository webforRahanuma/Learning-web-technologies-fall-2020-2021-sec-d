<?php

    $blood = "";

    if(isset($_POST['submit'])){
        $blood = $_REQUEST['bloodGroup'];
    }

    else{
        $blood = "";
    }

?>

<!DOCTYPE html>
<head>
    <title>HTML Form - Blood Group</title>
</head>
<body>
    
    <form method="post">
        
        <fieldset >
            
            <legend>BLOOD GROUP</legend>
            <select name="bloodGroup">
                <option value="field required..." selected>Select Blood Group</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select> <br> <br>
			<input type="text" name="blood" value="<?=$blood?>">
			<hr>
   
       <input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>  
        
    </form>
    
</body>
</html>
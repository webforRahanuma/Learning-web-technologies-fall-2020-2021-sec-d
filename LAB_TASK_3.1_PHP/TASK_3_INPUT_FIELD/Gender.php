<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['gender'];
		
		if($gender== ""){
			echo " field required...";
		}else{
			$data = $gender;
		}
	}
?>



<!DOCTYPE html>
<head>
    <title>Gender</title>
</head>
<body>
    
    <form method="post">
        
        <fieldset>
            
            <legend>GENDER</legend>
            
                <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female"  > Female
				<input type="radio" name="gender" value="Other" > Other <br>
                <input type="text" name="field" value="<?=$gender?>"> 
                 <br>
                 <hr>
                 <input type="submit" name="submit" value="Submit">  
            
        </fieldset>
         
        
    </form>
    
</body>
</html>
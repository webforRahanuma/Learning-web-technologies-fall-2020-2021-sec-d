<?php

    if(isset($_REQUEST['submit'])){
        
        if (isset($_REQUEST['gender']))
        {
            echo $_REQUEST['gender'];
        }   
        
        else
        {
            echo " field required...";
        }
  
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gender</title>
</head>
<body>
    
    <form method="post">
        
        <fieldset>
            
            <legend>GENDER</legend>
            
                <input type="radio" value="Male" name="gender"  > Male 
                <input type="radio" value="Female" name="gender"  > Female
                <input type="radio" value="other" name="gender"  > other<hr>
                <input type="submit" name="submit" value="Submit">
            
        </fieldset>
         
        
    </form>
    
</body>
</html>
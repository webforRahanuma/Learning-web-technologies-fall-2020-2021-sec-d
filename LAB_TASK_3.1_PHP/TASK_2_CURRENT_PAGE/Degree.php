<?php
    if(isset($_REQUEST['submit']))
    {
    
        if(empty($_REQUEST['dept']))
        {
           echo " field required...";
        }
    else{     
        $dept = $_REQUEST['dept'];
        
        for($i = 0; $i < count($dept); $i++)
        {        
            echo $dept[$i]."<br>";       
        }       
    }   
}


?>


<!DOCTYPE html>
<head>
    <title>Degree</title>
</head>

<body>

    <form method="post">

        <fieldset>

            <legend>DEGREE</legend>
            <input type="checkbox" name="dept[]" value="SSC"> SSC
            <input type="checkbox" name="dept[]" value="HSC"> HSC
            <input type="checkbox" name="dept[]" value="Bsc"> Bsc
            <input type="checkbox" name="dept[]" value="Msc"> Msc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>

</html>
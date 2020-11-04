<?php

$dept = "";

if(isset($_REQUEST['submit'])){
    
    if(isset($_REQUEST['dept'])){
        $dept = "";
        $degree_arr = $_REQUEST['dept'];
        for($i = 0; $i < count($degree_arr); $i++){
            
            $dept = $dept.$degree_arr[$i].",";
            
        }
    }
    
    else{
        
        $dept = " field required...";
    }
    
}

else{
    
    $degree = "";
    
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
            <input type="text" name="deg" value="<?=$dept?>">
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>

</html>
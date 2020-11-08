<?php

if(isset($_REQUEST['submit'])){
    
    if(isset($_REQUEST['degree'])){
        
        $degree = $_REQUEST['degree'];
        
        for($i = 0; $i < count($degree); $i++){
            
            echo $degree[$i]."<br>";
            
        }
        
    }
    
    else{
        
        header('location: degree.html?msg=null_degree');
        
    }
    
}

else{
    
    header('location: degree.html?msg=error');
    
}

?>
<?php
    if(empty($_POST['dept'])){
        
        echo "Please atleast one option";
        
    }
    else{       
        $dept = $_POST['dept'];
        
        for($i = 0; $i < count($dept); $i++){
            
            echo $dept[$i]."<br>";          
        }      
    }
?>
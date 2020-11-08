<?php

if(isset($_REQUEST['submit'])){
    
    $name = $_REQUEST['name'];
    
    if(!empty($name)){
        
        if($name[0]==" "){
            
            header('location: name.html?msg=invalid_name');         
        }
        
        else{
            
            $test = explode(" ", $name);
             if(count($test) >= 2){
            
            $pattern = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                            '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9',);
            
            for($i = 0; $i < count($pattern); $i++){
                
                if(strpos($name, $pattern[$i])==true){
                    header('location: name.html?msg=invalid_name');
                    break;
                }
                
            }
            
            echo $name;           
        }            
          else{
                
                header('location: name.html?msg=invalid_name');               
            }
            
        }       
    } 
    else{
        
        header('location: name.html?msg=null_name');
        
    }   
}

else{
    
    header('location: name.html?msg=error');   
}

?>
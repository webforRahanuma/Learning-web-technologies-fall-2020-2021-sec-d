<?php
    if(isset($_REQUEST['submit'])){
        
        $email = $_REQUEST['email'];
        
        if(!empty($email)){
            
            if(strpos($email, ".")==true){
                
                echo $_POST['email'];         
            }
            
            else{
                header('location: email.html?msg=invalid');
            }       
        }
        
        else{
            header('location: email.html?msg=null_email');
        }   
    }
    else{
        
        header('location: email.html?msg=invalid');
        
    }

?>
<?php
session_start();
require_once('../HTML/header.php');
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
 
    if(empty($_POST['price']))
    {
         echo 'please enter input';
		
    }
 
    else
    {
		$id = $_REQUEST['id'];
        $price = $_REQUEST['price'];
    
        header('location:user_home.php?msg=invalid');
         
$user = [
	'id'=> $id,
    'price'=> $price
];
 
paymentdone($user);
 
    }
      
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
    <form method ='post'>
    <center>
        <table width="500px" border="1" cellspacing="0">
            <tr height="70px">
                <td colspan="3" align="center">
                    <h1>HAPPY PURCHASE</h1>
                </td>
                </tr>
                <tr height="35px">
                    <td width="70px" >
                         ID
                    </td>
        
                    <td width="300px">
                        <input type=" ID" name=" price" value =""> <br>
                   </td>
                    <td width="20px">
                        <h4 align="left" ></h4>
                         
                    </td>   
                </tr>
                <tr height="35px">
                    <td width="70px" >
                         Price
                    </td>
        
                    <td width="300px">
                       <input type="text" name=" price" value =""> <br>
                   </td>
                    <td width="20px">
                        <h4 align="left" ></h4>
                         
                    </td>   
                </tr>
                
            <tr height="40px">
                <td colspan="3" align="right">
                    <input type="submit" name="submit" value="submit"> <br>
                    <br/>
                    <br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
                     
                </td>
            </tr> 
        
        <?php require 'footer.php';?>	
        </table>
    </center>
</form>
</body>
</html>
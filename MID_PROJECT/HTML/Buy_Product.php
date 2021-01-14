<?php
 session_start();
 require_once('../HTML/header.php');
 require_once('../models/usersService.php');
 $getallitems = getallitems();
 if(isset($_REQUEST['submit']))
{
    if(empty($_POST['item']))
        {
            echo'Enter your input first';
 
        }
        else{
        
     header('location:Make_Payment.php?msg=invalid'); 
        }
          
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/style.css">
</head>
<body> 
    <form method ='post'>
<fieldset> 
     <center>  
        <table border="1">
        <tr>
            <td>ID</td>
            <td>Item</td>
            <td>Description</td>
            <td>Price</td>
        </tr>
        <?php        
            for($i=0; $i < count($getallitems); $i++) {
        ?>
                <tr>
                    <td><?= $getallitems[$i]['id'] ?></td>
                    <td><?= $getallitems[$i]['item'] ?></td>
                    <td><?= $getallitems[$i]['description'] ?></td>
                    <td><?= $getallitems[$i]['price'] ?></td> 
                </tr>
        <?php } ?>
        </center>       
    </table>
         </fieldset>
    <center>
        <table width="500px" border="1" cellspacing="0">
            <tr height="70px">
                <td colspan="3" align="center">
                    <h1>LET'S PURCHASE</h1>
                </td>
                </tr>
                <tr height="35px">
                    <td width="70px" >
                         Product Name
                    </td>
                    <td width="300px">
                        <input type="text" name="item"  > <br>
                   </td>
                    <td width="20px">
                        <h4 align="left" ></h4>    
                    </td>   
                </tr>
                <tr height="35px">
                    <td width="70px" >
                        Product ID
                    </td>
                    <td width="300px">
                        <input type="Product ID" name="item"  > <br>
                   </td>
                    <td width="20px">
                        <h4 align="left" ></h4>     
                    </td>   
                </tr>
                <tr height="35px">
                    <td width="70px" >
                        Product Price
                    </td>
                    <td width="300px">
                        <input type="Integer" name="item"  > <br>
                   </td>
                    <td width="20px">
                        <h4 align="left" ></h4>     
                    </td>   
                </tr>
                <tr height="35px">
                    <td width="70px" >
                         Confirm Order
                    </td>
                    <td width="300px">
                    <input type="radio" name="Confirm Order"  > Yes 
                <input type="radio" name="Confirm Order"  > No
            </td>
            <td width="20px">
                <h4 align="left" ></h4>	
            </td> 
            <tr height="40px">
                <td colspan="3" align="right">
                    <input type="submit" name="submit" value="submit"> <br>
                    <br/>
                    <br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
                </td>
            </tr>
        </tr>	
        </table>
    </center>
            </form>
</body>
</html>
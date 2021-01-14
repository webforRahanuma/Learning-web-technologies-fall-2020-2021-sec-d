<?php
session_start();
require_once('../HTML/header.php');
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
 
    if(empty($_POST['profiledatabase']))
        {
            echo'please update';
 
        }
        else{
            $profile= updatebuyerProfile();
 
            header('location:profile.php?msg=invalid');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
<form action="" method="post">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <center>
    <table>
                <tr>
                     
                    <textarea name="profiledatabase"  rows="10" cols="120" ></textarea>
                    
                </tr>
                 
                <tr height="40px">
                <td colspan="3" align="left">
                    <a href="Edit_Profile_Picture.php">Edit profile pic</a>
                    </td>
                </tr>
                <tr><td></td><td><hr><hr></td></tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="update"></td>
 
                </tr>
                
            </table>
                    <br><a href="profile.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
                </td>
            </tr>
            <?php require 'footer.php';?>
    </center>
    </form>
</body>
</html>
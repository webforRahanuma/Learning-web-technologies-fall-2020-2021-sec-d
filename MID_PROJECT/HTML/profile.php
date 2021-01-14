<?php
 session_start();
 require_once('../HTML/header.php');
 require_once('../models/usersService.php');
 $profile = buyerprofileinfo(); 
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
<form action="" method="post">
    <center>
    <?php          
            for($i=0; $i < count($profile); $i++) {
        ?>
                <tr>                    
            <textarea rows="10" cols="120"><?= $profile[$i]['profiledatabase'] ?></textarea>              
       |<tr height="40px">
            <td colspan="3" align="left">
                <a href="Add_Profile_pic.php">Add profile pic</a>
               
                </td>
            </tr>
                    <a href="Edit_Profile.php?id=<?= $profile[$i]['id']  ?>&profiledatabase=<?= $profile[$i]['profiledatabase'] ?>"><input type="button" value="EDIT"></a>                       
                </tr>
        <?php } ?>
                <br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
            </td>
        </tr>
        <?php require 'footer.php';?>
</center>
</form>
</body>
</html>
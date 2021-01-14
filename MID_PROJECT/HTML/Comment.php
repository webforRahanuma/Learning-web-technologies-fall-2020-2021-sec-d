<?php
session_start();
    if(isset($_REQUEST['submit']))
    {
    if(empty($_POST['comment']))
        {
            echo'Enter your Comment first';
        }
        else
        {
                $id = $_REQUEST['id'];
                 $comment = $_REQUEST['comment'];
                 header('location:user_home.php?msg=invalid'); 
                 $user = [
                    'id'=> $id,   
                 'comment'=> $comment
             ];
             buyercomment($user); 
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
<form method = "post">
    <center>
    <h4>Comment:</h4>  <textarea name="comment" rows="3" cols="40" "></textarea>
        <input type="submit" name="submit" value="Submit"><br>
            <br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>     
        </td>
    </tr>	
</center>
</form>
</body>
</html>


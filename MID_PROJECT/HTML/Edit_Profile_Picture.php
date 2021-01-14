<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
    <form enctype="multipart/form-data" method="post">
        Select image :
        <input type="file" name="file"><br/>
        <input type="submit" value="Upload" name="Submit1"> <br/>
        <br><a href="Edit_Profile.php"><input type="button" value=" Back"></a>

        <?php require 'footer.php';?>
    <h3 align="left"> 
    <?php
    session_start();
        if(isset($_POST['Submit1']))
        { 
        $filepath = "images/" . $_FILES["file"]["name"];

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
        {
        echo "<img src=".$filepath." height=200 width=300 />";
        } 
        else 
        {
        echo "Error !!";
        }
        } 
    ?>
    </h3>
<html>
<head>
<title>PHP File Upload example</title>
<link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
<form enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
<br/>
<br><a href="profile.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
<?php require 'footer.php';?>
</form>
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
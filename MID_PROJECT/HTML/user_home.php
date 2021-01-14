<?php
    session_start();
    require_once('../HTML/header.php');
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
    <center>
    <h1>Hello <?php echo $_COOKIE["flag"] ;?> </h1>
        <h1>Welcome to our agricultural land</h1>
        <img src="1-agriculture.jpg" alt="" height="150px">
        <img src="aa.jpg" alt="" height="150px"><br>
        <a href="Profile.php">Profile</a>
        <br/>
        <a href="Buy_Product.php">Buy Product</a>
        <br/>
        <a href="Make_Payment.php">Make Payment</a>
        <br/>
        <a href="Report.php">Report</a>
        <br/>
        <a href="Review.php">Review</a>
        <br/>
        <a href="Comment.php">Comment</a>
        <br/>
        <a href="All_Buyer_question.php">All_Buyer_question</a>
        <br/>
        <a href="Add_Info.php">Add information</a>
        <br/>
        <a href="Browse_information.php">Browse_information</a>
        <br/>
        <a href="logout.php">logout</a><br>
        <?php require 'footer.php';?>
    </center>
</body>
</html>
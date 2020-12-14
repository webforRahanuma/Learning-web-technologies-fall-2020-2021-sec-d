<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h5>Logged in as <?=$_SESSION['username']?></h5>

    <form>
        <table border="1">
            <tr>
                <td>Name</td>
                <td><?=$user['name']?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?=$user['username']?></td>
            </tr>
            <tr>
                <td>Email/Contact</td>
                <td><?=$user['contact']?></td>
            </tr>

            <tr>
                <td>User Type</td>
                <td><?=$user['user_type']?></td>
            </tr>


        </table>
    </form>
    
</body>
</html>
<?php 
include 'sessionCheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
</head>

<body>
    <h1>Online Outdoor Advertising Space Booking System</h1>
    <h3 id="Admin">Admin Home Page</h3>
    <a href="out.php"><input type="submit" value="Log Out" id="Box0"></a>
    <a href="addSpace.php"><input type="submit" value="Add Space" id="adminBox1"></a>
    <a href="updateSpace.php"><input type="submit" value="Update Space" id="adminBox2"></a>
    <a href="deleteSpace.php"><input type="submit" value="Delete Space" id="adminBox3"></a>
</body>

</html>
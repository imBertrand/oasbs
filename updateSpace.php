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
    <title>Update Space</title>
</head>

<body>
    <a href="index.php">
        <h1>Online Outdoor Advertising Space Booking System</h1>
    </a>
    <h3 id="update">Update Space</h3>
    <form action="major.php" method="post">
        <input type="text" placeholder="Space Id" name="spaceId" id="box1"><br>
        <input type="text" placeholder="Region" name="region" id="box2"><br>
        <input type="text" placeholder="City" name="city" id="box4"><br>
        <input type="text" placeholder="Location" name="location" id="box5"><br>
        <input type="submit" value="Save" name="UpdateSpace" id="addBox1">
        <input type="button" value="Cancel" onclick="window.location = 'admin.php'" id="addBox2">
    </form>
</body>

</html>
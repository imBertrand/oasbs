<?php 
include 'db.php';
include 'major.php';

$sql = "SELECT * from spaces";
$result=$conn->prepare($sql);
$result->execute();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Home Page</title>
</head>

<body>
    <h3 id="User">Available Outdoor Advertising Space</h3>
    <input type="submit" value="Report" id="userBox1">
    <table>
        <th>Region</th>
        <th>City</th>
        <th>Location</th>
        <th>Book</th>
        <?php while ($item=$result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td>
                <?php echo $item['region']; ?>
            </td>
            <td>
                <?php echo $item['city']; ?>
            </td>
            <td>
                <?php echo $item['location']; ?>
            </td>
            <td><a href="major.php?spaceId=<?php echo $item['spaceId']; ?>"><img src="add.png"></a></td>
        </tr>
        <?php } ?>
    </table>

        <input type="submit" value="Report" id="userBox1">
        <input type="submit" value="Log Out" id="userBox0">

<table>
    <th>Region</th>
    <th>City</th>
    <th>Location</th>
    <th>Book</th>

    <tr>
        <td>Central</td>
        <td>Kampala</td>
        <td>Wandegeya</td>
        <td><img src="add.png"</td>
    </tr>

    <tr>
        <td>Eastern</td>
        <td>Jinja</td>
        <td>Budondo</td>
        <td><img src="add.png"</td>
    </tr>

    <tr>
        <td>Western</td>
        <td>Mbarara</td>
        <td>Rutooma</td>
        <td><img src="add.png"</td>
    </tr>
</table>
</body>

</html>

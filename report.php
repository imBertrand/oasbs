<?php
include 'db.php';
include 'major.php';

$sql = "SELECT * from report";
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
    <title>Admin Page</title>
</head>

<body>
    <a href="index.php">
        <h1 class="index">Online Outdoor Advertising Space Booking System</h1>
    </a>
    <h3 id="User">Booked Spaces Report</h3>
    <table>
        <th>Region</th>
        <th>City</th>
        <th>Location</th>
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
        </tr>
        <?php } ?>
    </table>
</body>

</html>
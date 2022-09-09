<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Sign In</title>
</head>

<body>
    <h1>Online Outdoor Advertising Space Booking System</h1>
    <h3 id="signIn">Sign In</h3>
    <form action="major.php" method="post">
        <input type="text" placeholder="Username" name="username" id="box1"><br>
        <input type="password" placeholder="Password" name="password" id="box2"><br>
        <input type="submit" value="Sign In" name="sign-in" id="box3">
        <a href="adminSign.php">Sign In as Admin</a>
        <a href="signup.php" class="create">Create Account</a>
    </form>
</body>

</html>
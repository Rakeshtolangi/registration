<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav>
    <a href="#">
        <img src="img/logo.png" alt="logo">
    </a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">About me</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    <div>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="password...">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php"> signup</a>
        <form class="" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
    </div>
    </nav>
</body>
</html>

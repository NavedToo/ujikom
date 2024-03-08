<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <section>
        <center>
            <h1>Login</h1>
        </center>

        <form action="check.php" method="post" autocomplete="off">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br>
            <input type="submit" name="login" id="login" value="Login">
        </form>
    </section>
</body>

</html>
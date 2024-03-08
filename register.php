<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Register</title>
</head>

<body>
    <section>
        <h1>Register</h1>
        <form action="process.php" method="post">
            <label for="">Username</label>
            <input type="text" name="username" id="username" required><br>
            <label for="">Password</label>
            <input type="password" name="password" id="password" required><br>
            <label for="">Level</label>
            <select name="level" id="level">
                <option>--pilih--</option>
                <option>superadmin</option>
                <option>guru</option>
                <option>siswa</option>
                <option>staff</option>
                <option>admin</option>
                <option>orangtua</option>
            </select><br>
            <input type="submit" name="register" id="register" value="register">
        </form>
    </section>
</body>

</html>
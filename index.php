<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="includes/formhandler.php" method="post">
        <h2>Signup</h2>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="pwd" placeholder="Password" required><br>
        <input type="email" name="email" placeholder="Email" required><br><br>

        <button type="submit" name="submit">Signup</button>
    </form>
</body>

</html>
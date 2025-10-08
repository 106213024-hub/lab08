<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="description" content="login page">
</head>
<body>
    <?php include 'header.inc'; ?>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>
    <?php include 'footer.inc'; ?>
</body>
</html>
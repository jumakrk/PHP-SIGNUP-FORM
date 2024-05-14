<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sign up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Sign up form -->
    <form action="processform.php" method="post">
        <h2>Sign up</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>

        <div class="btn">
            <button name="submit">Sign up</button>
        </div>
    </form>
</body>
</html>

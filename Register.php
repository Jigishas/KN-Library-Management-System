<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="Register.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name">
        <label for="email">Email</label>

        <input type="email" name="email" placeholder="Email">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="" value="User" hidden>
        <button type="submit">Register</button>

    </form>
    </div>
</body>
</html>
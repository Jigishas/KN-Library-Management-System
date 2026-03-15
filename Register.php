<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'Db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
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
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="text" name="role" value="User" hidden>
        <button type="submit">Register</button>

    </form>
    </div>
</body>
</html>
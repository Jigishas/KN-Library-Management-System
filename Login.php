<?php
include 'Header.php';
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'Db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "You have logged in successfully";
    } else {
        echo "Invalid email or password";
    }
}
?>

<body>
    <div class="Form">
        <h2>Login</h2>
    <form action="Login.php" method="post" class="form-object">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>

    </form>
    </div>
</body>
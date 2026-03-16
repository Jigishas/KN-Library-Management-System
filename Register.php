<?php 
 function sanitize_input($name, $email, $password){
     $name = trim($name);
     $name = stripslashes($name);
     $name = htmlspecialchars($name);

     $email = trim($email);
     $email = stripslashes($email);
     $email = htmlspecialchars($email);

     $password = trim($password);
     $password = stripslashes($password);
     $password = htmlspecialchars($password);

     return array($name, $email, $password);
    
 }
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'Db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    list($name, $email, $password) = sanitize_input($name, $email, $password);

    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    if(mysqli_query($conn, $sql)){
        echo "You have Registered successfully";
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
<?php 
include 'Header.php';
?>
<body>
    <div class="Form">
        <h2>Register</h2>
    <form action="Register.php" method="post" class="form-object">
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
        <br>
        <a href="login.php">Login</a>

    </form>
    </div>
</body>
</html>
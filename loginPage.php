<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
        session_start();
        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Your authentication logic goes here
            if($username === "admin" && $password === "admin123") {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php"); // Redirect to dashboard page
                exit();
            } else {
                echo "<p class='error-message'>Invalid username or password</p>";
            }
        }
        ?>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button><a href="/Hospital_Management/index.php">Submit</a></button>
        </form>
    </div>
</body>
</html>

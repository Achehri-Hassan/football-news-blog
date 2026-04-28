<?php

  

require_once "config/connection.php";
require_once "classes/user.php";

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {


    $userClass = new User();


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $result = $userClass->create($name, $email, $hashed_password);

    if ($result) {
        $message = "Account created successfully! You can login now.";
        $messageType = "success";
    } else {
        $message = "Error: Could not create account (Email might already exist).";
        $messageType = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div style="max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
        <h2>Register</h2>

        <?php if ($message): ?>
            <p style="color: <?php echo $messageType == 'success' ? 'green' : 'red'; ?>;">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form action="" method="POST">
            <div style="margin-bottom: 15px;">
                <label>Full Name:</label><br>
                <input type="text" name="name" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Email:</label><br>
                <input type="email" name="email" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Password:</label><br>
                <input type="password" name="password" required style="width: 100%; padding: 8px;">
            </div>

            <button type="submit" name="register" style="width: 100%; padding: 10px; background: #28a745; color: white; border: none; cursor: pointer;">
                login
            </button>
        </form>

        <p style="margin-top: 15px;">Already have an account? <a href="login.php">Login here</a></p>
    </div>

</body>

</html>
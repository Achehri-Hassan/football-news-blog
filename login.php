<?php


session_start();
require_once "classes/user.php";

$Users = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $user = $Users->login($email);

    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["user"] = $user["username"];
        $_SESSION["email"] = $user["email"];

        header("Location: index.php");
        exit();

    } else {
        echo "Invalid login";
    }
}
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <link rel="stylesheet" href="../css/variable.css">
  <link rel="stylesheet" href="../css/contact.css">

  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
</head>

<body>

<main>
  <section class="contact-container">

    <div class="contact__image">
      <img src="bhg.jpg" alt="Login" />
      <h2 class="image-overlay-text">Welcome Back</h2>
    </div>

    <div class="contact__form-section">

      <div class="form__header">
        <h2 class="form__title">Login</h2>
      </div>

      <!-- LOGIN FORM -->
      <form class="form__body" method="post" action="login.php">

        <div class="form__group">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email" required />
        </div>

        <div class="form__group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required />
        </div>

        <button type="submit" class="form__button" name="login">
          Login
        </button>

      </form>

      <a href="register.php">Create account</a>

    </div>
  </section>
</main>

</body>
</html>
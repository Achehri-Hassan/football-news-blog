

<?php 

session_start();
require_once "user.php";

$Users = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["Register"])) {

        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!empty($name) && !empty($email) && !empty($password)) {

            $result = $Users->create($name, $email, $hashedPassword);

            if ($result) {

                
                $_SESSION["user"] = $name;
                $_SESSION["email"] = $email;

                header("Location: index.php");
                exit();

            } else {
                echo "Registration failed";
            }
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- link css design -->
  <link rel="stylesheet" href="../css/variable.css">
  <link rel="stylesheet" href="../css/contact.css">

  <!-- link icon  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>

  <main>
    <section class="contact-container">
      <div class="contact__image">
        <img src="Article_imag/lionel.jpg" alt="Support" />
        <h2 class="image-overlay-text">Hi There</h2>
      </div>

      <div class="contact__form-section" style="margin-top: 25px;">
        <div class="form__header">
          <h2 class="form__title">Register</h2>
        </div>

        <form class="form__body" method="post">

          <div class="form__group">
            <label>Full name</label>
            <input type="text" placeholder="Enter your name" name="name" required/>
          </div>

          <div class="form__group">
            <label>Email</label>
            <input type="email" placeholder="Enter your email" name="email"  required/>
          </div>

          <div class="form__group">
            <label>Password</label>
            <input type="password" placeholder="Enter your name"  name="password" required/>
          </div>



          <button type="submit" class="form__button" name="Register">Submit</button>
        </form>

        <a href="login.php">Login</a>
      </div>
    </section>
  </main>
</body>

</html>
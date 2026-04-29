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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
  </head>

  <style>
      .login{
         margin-top: 70px;
      }
  </style>
  <body>
 

    <main>
      <section class="contact-container">
        <div class="contact__image">
          <img src="bhg.jpg" alt="Support" />
          <h2 class="image-overlay-text">Hi There</h2>
        </div>

        <div class="contact__form-section login">
          <div class="form__header">
            <h2 class="form__title">Login</h2>
          </div>

        
            <div class="form__group">
              <label>Email</label>
              <input type="email" placeholder="Enter your email" />
            </div>

              <div class="form__group">
              <label>Password</label>
              <input type="password" placeholder="Enter your name" />
            </div>

           

            <button type="submit" class="form__button">Submit</button>
          </form>

          <a href="Register.php">Register</a>
        </div>
      </section>
    </main>
  </body>
</html>

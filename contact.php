<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- link css design -->
     <link rel="stylesheet" href="css/variable.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">

    <!-- link icon  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- ----HEADER--- -->
    <header>
      <div class="head">
        <a href="#" class="logo"><i class="fa-brands fa-readme"></i></a>

        <div>
          <nav>
            <a href="index.php">Home</a>
            <a href="#">About Us</a>
            <a href="article.php">Article</a>
          </nav>
          <button class="btn-login">Login</button>
        </div>
      </div>
    </header>

    <main>
      <section class="contact-container">
        <div class="contact__image">
          <img src="/assets/pexels-mikhail-nilov-7988201 1.jpg" alt="Support" />
          <h2 class="image-overlay-text">Hi There</h2>
        </div>

        <div class="contact__form-section">
          <div class="form__header">
            <h2 class="form__title">Contact Us</h2>
          </div>

          <form class="form__body">
            <div class="form__group">
              <label>Full name</label>
              <input type="text" placeholder="Enter your name" />
            </div>

            <div class="form__group">
              <label>Email</label>
              <input type="email" placeholder="Enter your email" />
            </div>

            <div class="form__group">
              <label>Message</label>
              <textarea placeholder="How can we help?"></textarea>
            </div>

            <button type="submit" class="form__button">Send Message</button>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>

<?php



require_once "../classes/article.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $path = "../assets/Article/" . $imageName;

    move_uploaded_file($tmpName, $path);

    $article = new Article();
    $article->createArticle($title, $content, $imageName);

    header("Location: ../user/index.php");
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- link css style -->

  <link rel="stylesheet" href="../css/variable.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/contact.css">


</head>

<body>


  <!-- ----HEADER--- -->
  <header>
    <div class="head">
      <a href="#" class="logo"><i class="fa-brands fa-readme"></i></a>

      <div>
        <nav>
          <a href="#">Home</a>
          <a href="#">About Us</a>
          <a href="article.php">Article</a>
          <a href="contact.php">Contact</a>
        </nav>
        <button class="btn-login">Login</button>
      </div>
    </div>
  </header>

  <main>

    <section class="contact-container">
      <div class="contact__image">
        <img src="../assets/creat-me.jpg" alt="Support" />
        <h2 class="image-overlay-text">Hi There</h2>
      </div>

      <div class="contact__form-section">
        <div class="form__header">
          <h2 class="form__title">Add Article</h2>
        </div>

        <form class="form__body" method="post" enctype="multipart/form-data">
          <div class="form__group">
            <label>Title </label>
            <input type="text" placeholder="Enter your name" name="title" />
          </div>

          <div class="form__group">
            <input type="file" name="image" required>
          </div>


          <div class="form__group">
            <label>Author</label>
            <input type="text" placeholder="author" />
          </div>

          <div class="form__group">
            <label>Content</label>
            <textarea placeholder="How can we help?" name="content"></textarea>
          </div>



          <button type="submit" class="form__button" name="add">Add Article</button>
        </form>
      </div>
    </section>


  </main>




</body>

</html>
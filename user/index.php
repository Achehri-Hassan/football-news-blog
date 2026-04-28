<?php

require "../admin/article.php";

$article = new Article();
$articles = $article->readAll();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- link css design -->
  <link rel="stylesheet" href="../css/variable.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <!-- link icon  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
  <title>My Blog</title>
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
          <a href="details.php">Article</a>
          <a href="contact.php">Contact</a>
        </nav>
        <button class="btn-login">Login</button>
      </div>
    </div>
  </header>

  <!-- main content -->
  <main>
    <section class="hero-section">
      <h1>Blog & articles</h1>

      <div class="category-filters">
        <a href="#" class="filter-pill active">All</a>
        <a href="#" class="filter-pill">Botola Pro</a>
        <a href="#" class="filter-pill">La Liga</a>
        <a href="#" class="filter-pill">Premier League</a>
        <a href="#" class="filter-pill">Champions League</a>
        <a href="#" class="filter-pill">Saudi League</a>
      </div>
    </section>

    <section class="featured-card">
      <img
        src="../assets/Article/yamin.jpg"
        alt="Football"
        class="featured-img" />
      <div class="featured-content">
        <span class="tag-news">News</span>
        <h2 class="featured-title">
          Maximizing Performance: The New Era of Football Training
        </h2>
        <p class="featured-desc">
          Explore how top European clubs are integrating advanced data
          analytics and bio-metrics to push players beyond their limits.
        </p>
        <a href="#" class="btn-read">Read more</a>
      </div>
    </section>

    <section class="article-card">


      <?php foreach ($articles as $art): ?>





        <div class="article">
          <p class="news">News</p>
          <img src="../assets/Article/<?= htmlspecialchars($art['image']) ?>" alt="">

          <div class="category">
            <p><?= date("d-m-Y", strtotime($art["created_at"])) ?></p>
          </div>

          <p>
            <?= htmlspecialchars($art['summary']) ?>
          </p>
        </div>
      <?php endforeach; ?>


      <div class="article">
        <p class="news">News</p>
        <img src="../assets/Article/A2.jpg" alt="JavaScript Guide" />

        <div class="category">
          <p>April 15, 2026</p>
        </div>

        <p>
          A complete beginner-friendly guide to JavaScript with real-world
          examples and projects. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Tempora, illo?
        </p>
      </div>

      <div class="article">
        <p class="news">News</p>
        <img src="../assets/Article/A3.jpg" alt="React Tutorial" />

        <div class="category">
          <p>April 20, 2026</p>
        </div>

        <p>
          A complete beginner-friendly guide to JavaScript with real-world
          examples and projects. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Tempora, illo?
        </p>
      </div>

      <div class="article">
        <p class="news">News</p>
        <img src="../assets/Article/A5.jpg" alt="React Tutorial" />

        <div class="category">
          <p>April 20, 2026</p>
        </div>

        <p>
          A complete beginner-friendly guide to JavaScript with real-world
          examples and projects. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Tempora, illo?
        </p>
      </div>

      <div class="article">
        <p class="news">News</p>
        <img src="../assets/Article/mas.jpg" alt="React Tutorial" />

        <div class="category">
          <p>April 20, 2026</p>
        </div>

        <p>
          A complete beginner-friendly guide to JavaScript with real-world
          examples and projects. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Tempora, illo?
        </p>
      </div>

      <div class="article">
        <p class="news">News</p>
        <img src="../assets/Article/raja.jpg" alt="React Tutorial" />

        <div class="category">
          <p>April 20, 2026</p>
        </div>

        <p>
          A complete beginner-friendly guide to JavaScript with real-world
          examples and projects. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Tempora, illo?
        </p>
      </div>


    </section>

    <section>
      <div class="pagination">
        <a href="#" class="pagination__btn">1</a>
        <a href="#" class="pagination__btn">2</a>
        <a href="#" class="pagination__btn">3</a>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__cta">
      <h2 class="cta__title">Let's get started on something great</h2>
      <p class="cta__text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat?
      </p>
      <a href="contact.html" class="cta__button">Contact</a>

      <hr class="cta__divider" />

      <nav class="footer__nav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="article.html">Article</a>
        <a href="contact.html">Contact</a>
      </nav>
    </div>

    <div class="footer__bottom">
      <div class="footer__logo">
        <i class="fa-brands fa-readme"></i>
      </div>
      <p class="footer__copyright">2026 <span>Lorem, ipsum dolor.</span></p>
    </div>
  </footer>
</body>
</html>
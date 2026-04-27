<?php


require "Article.php";

$article = new Article();
$articles = $article->readAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- link icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Courser students</title>
</head>

<body>

   

    <div class="grid-container" id="article">

        <?php foreach ($articles as $art): ?>

            <div class="card">

                <img src="uploads/<?= htmlspecialchars($art['image']) ?>" alt="image">
                <div class="card-content">

                    <h3>📚<?= htmlspecialchars($art['title']) ?></h3>

                    <p>
                        <?= htmlspecialchars($art['content']) ?>
                    </p>

                    <div class="card-actions">

                        <a href="edit.php?id=<?= $art['id'] ?>" class="btn edit">Edit</a>

                        <a href="delete.php?id=<?= $art['id'] ?>"
                            class="btn delete"
                            onclick="return confirm('Are you sure?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>




    </div>

</body>

</html>
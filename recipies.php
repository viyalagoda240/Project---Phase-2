<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .recipe-card img {
            height: 200px;
            object-fit: cover;
        }

        .hero{
            padding-top: 120px;
        }
    </style>
</head>

<body>

    <div class="col-12 m-0" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 9999;">
        <?php include 'header.php'; ?>
    </div>

    <section id="recipes" class="py-5">
        <div class="container hero">
            <h2 class="mb-4">Our Recipes</h2>
            <div class="row">
                <?php
                for ($x = 0; $x < 15; $x++) {
                ?>
                    <div class="col-md-4">
                        <div class="card recipe-card">
                            <img src="resource/recipeImg/image5.jpg" class="card-img-top" alt="Recipe">
                            <div class="card-body">
                                <h5 class="card-title">Spaghetti Carbonara</h5>
                                <p class="card-text">A classic Italian pasta dish with creamy sauce.</p>
                                <a href="singleRecipe.php" class="btn btn-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <?php include "footer01.php" ?>

</body>

</html>
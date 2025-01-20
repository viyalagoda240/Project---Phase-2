<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .recipe-categories span {
            margin-right: 10px;
            background-color: #f8f9fa;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
        }

        .comments-section {
            margin-top: 30px;
        }

        .comment {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .comment .comment-header {
            font-weight: bold;
        }

        .reply {
            margin-left: 20px;
            border-left: 3px solid #f8f9fa;
            padding-left: 15px;
        }

        .comment-form textarea {
            resize: none;
        }

        .related-recipes {
            margin-top: 50px;
        }

    </style>
</head>

<body>

    <?php include 'header01.php'; ?>

    <section id="recipeDetails" class="py-5">
        <div class="container">
            <h1 class="mb-4">Delicious Pancakes</h1>

            <div class="row">
                <div class="col-md-6">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="resource/recipeImg/image5.jpg" class="d-block w-100" alt="Recipe Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="resource/recipeImg/image6.jpg" class="d-block w-100" alt="Recipe Image 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="mb-3">Submitted By: <span class="text-success">John Doe</span></h4>
                    <h5 class="mb-3">Ingredients</h5>
                    <ul>
                        <li>1 cup of flour</li>
                        <li>2 eggs</li>
                        <li>1 cup of milk</li>
                        <li>1 tablespoon of sugar</li>
                    </ul>

                    <h5 class="mb-3">Instructions</h5>
                    <p>
                        1. Mix the dry ingredients in a bowl.<br>
                        2. Beat the eggs and milk together in a separate bowl.<br>
                        3. Slowly add the wet ingredients to the dry ingredients and stir until smooth.<br>
                        4. Heat a pan and cook the pancakes until golden brown on each side.<br>
                        5. Serve with syrup and enjoy!
                    </p>

                    <h5 class="mb-3">Categories</h5>
                    <div class="recipe-categories">
                        <span>Breakfast</span>
                        <span>Snacks</span>
                        <span>Vegetarian</span>
                    </div>
                </div>
            </div>

            <div class="comments-section">
                <h3>Comments</h3>
                <div class="comment">
                    <div class="comment-header">User1</div>
                    <p>This recipe is amazing! My family loved it.</p>
                </div>
                <div class="reply">
                    <div class="comment-header">Recipe Owner</div>
                    <p>Thank you! I'm glad your family enjoyed it.</p>
                </div>
                <div class="comment">
                    <div class="comment-header">User2</div>
                    <p>Can I use almond milk instead of regular milk?</p>
                </div>
                <div class="reply">
                    <div class="comment-header">Recipe Owner</div>
                    <p>Yes, almond milk works perfectly as a substitute.</p>
                </div>

                <div class="comment-form mt-4">
                    <h5>Add a Comment</h5>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <textarea class="form-control" name="comment" rows="3" placeholder="Write your comment..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="related-recipes">
                <h3 class="mt-5">Related Recipes</h3>
                <div class="row mt-4">
                <?php
                for ($x = 0; $x < 3; $x++) {
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
            </div>

        </div>
    </section>

    <?php include 'footer01.php'; ?>
</body>

</html>

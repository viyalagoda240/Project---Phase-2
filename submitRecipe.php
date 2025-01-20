<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Recipies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #selectedImages {
            margin-top: 10px;
            list-style-type: none;
            padding: 0;
        }

        #selectedImages li {
            margin-bottom: 5px;
        }
        
        .hero{
            padding-top: 50px;
        }
    </style>
</head>

<body>

<div class="col-12 m-0" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 9999;">
    <?php include 'header01.php'; ?>
</div>

    <section id="submit" class="py-5 bg-light">
        <div class="container hero">
            <h2 class="mb-4">Submit Your Recipe</h2>
            <form id="recipeForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="submitterName" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="submitterName" name="submitterName" value="Your Name Here" readonly>
                </div>

                <div class="mb-3">
                    <label for="recipeName" class="form-label">Recipe Name</label>
                    <input type="text" class="form-control" id="recipeName" name="recipeName" required>
                </div>

                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredients</label>
                    <div id="ingredientsContainer">
                        <div class="input-group mb-2">
                            <span class="input-group-text ingredient-number">1</span>
                            <input type="text" class="form-control ingredient-input" name="ingredients[]" placeholder="Enter ingredient" required>
                            <button type="button" class="btn btn-outline-danger remove-ingredient">Remove</button>
                        </div>
                    </div>
                    <button type="button" id="addIngredient" class="btn btn-outline-primary">Add Ingredient</button>
                </div>

                <div class="mb-3">
                    <label for="instructions" class="form-label">Instructions</label>
                    <textarea class="form-control" id="instructions" name="instructions" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category1" value="Breakfast">
                        <label class="form-check-label" for="category1">Breakfast</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category2" value="Lunch">
                        <label class="form-check-label" for="category2">Lunch</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category3" value="Dinner">
                        <label class="form-check-label" for="category3">Dinner</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category4" value="Snacks">
                        <label class="form-check-label" for="category4">Snacks</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category5" value="Desserts">
                        <label class="form-check-label" for="category5">Desserts</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category6" value="Beverages">
                        <label class="form-check-label" for="category6">Beverages</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category7" value="Vegan">
                        <label class="form-check-label" for="category7">Vegan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category8" value="Vegetarian">
                        <label class="form-check-label" for="category8">Vegetarian</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category9" value="Gluten-Free">
                        <label class="form-check-label" for="category9">Gluten-Free</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category10" value="Keto">
                        <label class="form-check-label" for="category10">Keto</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category11" value="Paleo">
                        <label class="form-check-label" for="category11">Paleo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categories[]" id="category12" value="Low-Carb">
                        <label class="form-check-label" for="category12">Low-Carb</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="recipeImages" class="form-label">Upload Images</label>
                    <input type="file" class="form-control" id="recipeImages" name="recipeImages[]" multiple accept="image/*">
                    <ul id="selectedImages"></ul>
                </div>

                <button type="submit" class="btn btn-success">Submit Recipe</button>
            </form>
        </div>
    </section>

    <?php include "footer.php" ?>

    <script>
        document.getElementById('addIngredient').addEventListener('click', function () {
            const ingredientsContainer = document.getElementById('ingredientsContainer');
            const ingredientCount = ingredientsContainer.children.length + 1;

            const ingredientGroup = document.createElement('div');
            ingredientGroup.classList.add('input-group', 'mb-2');
            ingredientGroup.innerHTML = `
                <span class="input-group-text ingredient-number">${ingredientCount}</span>
                <input type="text" class="form-control ingredient-input" name="ingredients[]" placeholder="Enter ingredient" required>
                <button type="button" class="btn btn-outline-danger remove-ingredient">Remove</button>
            `;
            ingredientsContainer.appendChild(ingredientGroup);
            updateIngredientNumbers();
        });

        document.getElementById('ingredientsContainer').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-ingredient')) {
                e.target.parentElement.remove();
                updateIngredientNumbers();
            }
        });

        function updateIngredientNumbers() {
            const ingredientNumbers = document.querySelectorAll('.ingredient-number');
            ingredientNumbers.forEach((element, index) => {
                element.textContent = index + 1;
            });
        }

        document.getElementById('recipeImages').addEventListener('change', function () {
            const selectedImagesList = document.getElementById('selectedImages');
            selectedImagesList.innerHTML = '';

            Array.from(this.files).forEach((file, index) => {
                const listItem = document.createElement('li');
                listItem.textContent = `${index + 1}. ${file.name}`;
                selectedImagesList.appendChild(listItem);
            });
        });

        document.getElementById('recipeForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you, ' + document.getElementById('submitterName').value + ', for submitting your recipe!');
        });
    </script>
</body>

</html>

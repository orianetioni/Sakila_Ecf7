<?php

$category_id = $_GET["category_id"];
$movies = new movie();
$movies->findbyCategories($category_id);

if (isset($_GET['category_id'])) : {
        $category_id = $_GET['category_id'];
?>
<div class="container">
    <div class="row m-1">
        <?php foreach ($movies->findbyCategories($category_id) as $movie) : ?>
            <div class="card col-3 p-2 m-0">
                <h4 class="card-header"><?= $movie->title ?></h4>
                <div class="card-body">
                    <p class="card-text"><?= $movie->description ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
    }
else : ?>
    <div class="container">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <p class="card-text">Aucune catégorie n'est pas renseignée.</p>
            </div>
        </div>
<?php endif; ?>
<?php
$movies = new movie();
$movies->findAll();

?>
<div class="container">
    <form class="col-4 m-auto mt-2" action="" method="POST">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" placeholder="Titre" aria-label="Recipient's username" aria-describedby="button-addon2">
            <input class="btn btn-secondary" type="submit" value="rechercher"></input>
        </div>
    </form>
    <div class="row m-1">
        <?php foreach ($movies->findAll() as $movie) : ?>
            <div class="card col-4 p-2 m-0">
                <h3 class="card-header"><?= $movie->title ?></h3>
                <div class="card-body">
                    <p class="card-text"><?= $movie->description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Durée du film : <?= $movie->length ?> minutes</li>
                    <li class="list-group-item">Année de sortie : <?= $movie->release_year ?></li>
                </ul>
                <div class="card-body text-end">
                <a class="btn btn-success " href="index.php?p=rental">Louer</a>
                <a class="btn btn-danger " href="index.php?p=rental">Retour</a>
                  
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
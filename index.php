<?php
require './app/autoloader.php'; 
require './database/db.php';

Autoloader::register(); 

if (isset($_GET['p']))
{
    $p = $_GET['p'];
}
else{
    $p ='home';
}

ob_start();

if ($p === 'home'){
require './view/home.php';

}elseif($p === 'movie'){
    require './view/movie.php';

}elseif($p === 'movieCat'){
    require './view/movieCat.php';

}elseif($p === 'category'){
    require './view/category.php';

}elseif($p === 'customer'){
    require './view/customer.php';

}elseif($p === 'rental'){
     require './view/rental.php';

}


$content = ob_get_clean();
require './view/template/templates.php';
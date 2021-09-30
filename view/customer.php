<?php

$customers = new customer();
$customers->findAll();

?>

<div class="container">
    <div class="row m-2">
        <?php foreach ($customers->findAll() as $customer) : ?>
            <div class="card col-4 p-2">
                <div class="card-body">
                    <h4 class="card-title text-center"><?= $customer->last_name ?> <?= $customer->first_name ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $customer->email ?></h6>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
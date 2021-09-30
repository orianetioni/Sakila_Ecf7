<?php

$listrental = new rental($rental_id='',$customer_id='');
$listrental->findAll();


//var_export ($listrental);
?>
<h3 class="text-center py-3">Les locations</h3>

<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">id location</th>
        <th scope="col">Abonnés</th>
        <th scope="col">Titre du film</th>
        
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listrental->findAll() as $data) : ?>
    <tr class="table-light">
        <td><?= $data->rental_id?></td>
        <td><?= $data->first_name?> <?= $data->last_name?></td>
        <td><?= $data->title?></td>
    </tr>
  </tbody>

  <?php endforeach; ?>
</table>




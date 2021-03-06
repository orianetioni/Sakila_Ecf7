<?php

$listrental = new rental($rental_id='',$customer_id='');
$listrental->findAll();

?>
<h3 class="text-center py-3">Les locations</h3>

<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">Abonnés</th>
        <th scope="col">Titre du film</th>
        <th scope="col">Date de location </th>
        <th scope="col">Date de retour </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listrental->findAll() as $data) : ?>
    <tr class="table-light">
        <td><?= $data->first_name?> <?= $data->last_name?></td>
        <td><?= $data->title?></td>
        <td> <?php echo date('M d, Y', strtotime($data->rental_date)) ?></td>
        <td> <?php echo date('M d, Y', strtotime($data->return_date)) ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>




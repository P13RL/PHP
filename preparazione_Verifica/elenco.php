<?php
include 'autoloader.php';
include 'header.php';

$gestione = new Gestione();
$val = $gestione->getLista();
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ente</th>
        <th scope="col">Ammontare</th>
        <th scope="col">Anno</th>
        <th scope="col">Note</th>
    </tr>
    </thead>
    <tbody>
    <?php while($lista = $val -> fetch_assoc()): ?>
    <tr>
        <th scope="row"> <?= $lista['id'] ?></th>
        <td><?= $lista['ente'] ?> </td>
        <td><?= $lista['importo'] ?></td>
        <td><?= $lista['anno'] ?></td>
        <td><?= $lista['note'] ?></td>
        <td>
            <a href="<?= Gestione::urlDettaglio($lista['id'])?>">Dettaglio </a>
        </td>


    </tr>
    <?php endwhile;?>
    </tbody>
</table>

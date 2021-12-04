<?php
include 'autoloader.php';
include 'header.php';

$gestione = new Gestione();
?>

<form method="POST">
    <div class="m-3">
        <label for="ente" class="form-label">Filtro: </label>
        <select class="form-select" id="ente" name="ente">
           <option value="index"> Seleziona ente per il filtraggio </option>
            <?php foreach(Gestione::enti as $key => $val): ?>
                <option value="<?= $key ?>" > <?= $val ?> </option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="m-3">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form>
<?php
    if(isset($_POST['submit'])){
        $val = $gestione->getListaFiltro($_POST);
?>

<?php if(!is_null($val->fetch_assoc())){?>
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
    <?php while($lista = $val -> fetch_assoc()):?>

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
<?php } ?>
<?php } ?>
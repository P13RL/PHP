<?php
include 'autoloader.php';
include 'header.php';
$gestione = new Gestione();
$donazione = $gestione->getDonazione($_GET['dettagli'])->fetch_assoc();

if(isset($_POST['submit'])){
    $gestione->update($_GET['dettagli'], $_POST);
    header("Location: elenco.php");
}
?>

<form method="POST">
    <div class="m-3">
        <label for="ente" class="form-label">Ente al quale devolvere</label>
        <select class="form-select" id="ente" name="ente">
            <?php foreach(Gestione::enti as $key => $val): ?>
            <?php if($val == $donazione['ente']){?>
                <option value="<?= $key ?>"  selected> <?= $val ?> </option>
            <?php }
                else{ ?>
                    <option value="<?= $key ?>"> <?= $val ?> </option>
                <?php }?>

            <?php endforeach;?>
        </select>
    </div>
    <div class="m-3">
        <label for="importo" class="input-number-label">Ammontare donazione: </label>
        <input type="number" min="0" class="form-control" id="importo" name="importo" value="<?= $donazione['importo']?>" disabled>
    </div>
    <div class="m-3">
        <label for="anno" class="form-label">Anno donazione:</label>
        <input type="text" class="form-control" id="anno" name="anno" value="<?= $donazione['anno']?>" disabled>
    </div>
    <div class="m-3">
        <label for="note" class="form-label">Eventuali note:</label> <br>
        <input type="text" class="form-control" id="note" name="note" value="<?= $donazione['note']?>" disabled>
    </div>
    <div class="m-3">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form>


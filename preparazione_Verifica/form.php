<?php
include 'autoloader.php';
include 'header.php';
$gestione = new Gestione();
if(isset($_POST['submit']))
    $gestione -> add($_POST);
?>


<form method="POST">
    <div class="m-3">
        <label for="ente" class="form-label">Ente al quale devolvere</label>
        <select class="form-select" id="ente" name="ente">
            <?php foreach(Gestione::enti as $key => $val): ?>
                <option value="<?= $key ?>" > <?= $val ?> </option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="m-3">
        <label for="importo" class="input-number-label">Ammontare donazione: </label>
        <input type="number" min="0" class="form-control" id="importo" name="importo">
    </div>
    <div class="m-3">
        <label for="anno" class="form-label">Anno donazione:</label>
        <input type="text" class="form-control" id="anno" name="anno">
    </div>
    <div class="m-3">
        <label for="note" class="form-label">Eventuali note:</label> <br>
        <input type="text" class="form-control" id="note" name="note">
    </div>
    <div class="m-3">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>
</form>

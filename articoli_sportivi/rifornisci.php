<?php
include 'autoloader.php';
include 'header.php';
$gestione = new Gestione();
$articolo = $gestione->getArticolo($_GET['rifornimento'])->fetch_assoc();
if(isset($_POST['submit'])){
    $gestione->updateArticolo($_POST);
    header("Location: rifornimento.php");
}
?>

<div class="container pt-3">
    <form method="POST">
        <div class="mb-3">
            <label for="nomeArticolo" class="form-label">Nome Articolo</label>
            <input type="text" class="form-control" id="nomeArticolo" placeholder="Nome articolo" name="nomeArticolo" disabled>
        </div>
        <div class="mb-3">
            <label for="quantitaArticolo" class="form-label">Quantità Articolo</label>
            <input type="number" min="0" value="<?= $articolo['quantitaArticolo']?>" class="form-control" id="quantitaArticolo" name="quantitaArticolo" placeholder="Quantità articolo">
        </div>
        <div class="mb-3">
            <label class="form-label" for="prezzoArticolo">Prezzo Articolo</label>
            <input type="number" class="form-control" id="prezzoArticolo" name="prezzoArticolo" min="0" disabled>
        </div>
        <button type="submit"  id="submit" name="submit" value="submit"class="btn btn-primary">Aggiorna articolo</button>
    </form>
</div>

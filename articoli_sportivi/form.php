<?php
include 'autoloader.php';
$gestione = new Gestione();
if(isset($_POST['submit'])){
    $gestione->add($_POST);
}
?>
<!-- start html !-->
<?php include 'header.php';?>
<!-- inserimento articolo !-->

<div class="container pt-3">
<form method="POST">
    <div class="mb-3">
        <label for="nomeArticolo" class="form-label">Nome Articolo</label>
        <input type="text" class="form-control" id="nomeArticolo" placeholder="Nome articolo" name="nomeArticolo">
    </div>
    <div class="mb-3">
        <label for="quantitaArticolo" class="form-label">Quantità Articolo</label>
        <input type="number" min="0" class="form-control" id="quantitaArticolo" name="quantitaArticolo" placeholder="Quantità articolo">
    </div>
    <div class="mb-3">
        <label class="form-label" for="prezzoArticolo">Prezzo Articolo</label>
        <input type="number" class="form-control" id="prezzoArticolo" name="prezzoArticolo" min="0">
    </div>
    <button type="submit"  id="submit" name="submit" value="submit"class="btn btn-primary">Aggiungi articolo</button>
</form>
</div>

<!-- end !-->
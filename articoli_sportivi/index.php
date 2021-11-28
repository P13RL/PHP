<?php
include 'autoloader.php';
$gestione = new Gestione();
$lista = $gestione->getLista();

if(isset($_GET['modifica'])){
    $gestione->rimuoviUnita($_GET['modifica']);
    header("Location: index.php");
}
if(isset($_GET['elimina'])){
    $gestione->eliminaProdotto($_GET['elimina']);
    header("Location: index.php");
}
//includo l'header
include 'header.php';

?>
<div class="container pt-3">

<?php if(isset($lista)){?>
<?php while($val =  $lista->fetch_assoc()): ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <b> Nome: </b><?= $val['nomeArticolo'] ?></h5>
            <p class="card-text"> <b>Quantità: </b></N><?= $val['quantitaArticolo'] ?> </p>
            <p class="card-text"> <b> Prezzo: </b><?= $val['prezzo'] ?> </p>
            <a href="<?= Gestione::urlModificaUnita($val['id']) ?>" class="btn btn-primary"> Rimuovi Unità</a>
            <a href="<?= Gestione::urlEliminaArticolo($val['id']) ?>" class="btn btn-danger"> Elimina Articolo</a>

        </div>
    </div>
<?php endwhile;?>
<?php }?>
</div>


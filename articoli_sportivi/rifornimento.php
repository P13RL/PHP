<?php
include 'autoloader.php';
include 'header.php';
$gestione = new Gestione();
$lista = $gestione->getLista();

?>

<div class="container pt-3">
<?php if(isset($lista)){?>
    <?php while($val =  $lista->fetch_assoc()): ?>
        <?php if(intval($val['quantitaArticolo']) <=3){ ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> <b> Nome: </b><?= $val['nomeArticolo'] ?></h5>
                <p class="card-text"> <b>Quantità: </b><?= $val['quantitaArticolo'] ?> </p>
                <p class="card-text"> <b> Prezzo: </b><?= $val['prezzo'] ?> </p>
                <a href="<?= Gestione::urlRifornisci($val['id']) ?>" class="btn btn-primary"> Rifornimento articolo</a>
                <a href="<?= Gestione::urlEliminaArticolo($val['id']) ?>" class="btn btn-danger mt-2"> Elimina Articolo</a>

            </div>
        </div>
            <?php } ?>
    <?php endwhile;?>
<?php }?>
</div>


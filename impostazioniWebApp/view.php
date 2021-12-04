<?php 
include("autoloader.php");
$settings = new Settings();
$settings->load();

?>


<html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col"> Impostazione </th>
                        <th scope="col"> Valore </th>
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <th scope="row">Nome Tema</th>
                        <td><?=$settings->getNomeTema()?></td>
                    </tr>
                    <tr> 
                        <th scope="row">Tipo Tema</th>
                        <td><?=$settings->getTemaLabel()?></td>
                    </tr>
                    <tr> 
                        <th scope="row">Numero voci per pagina</th>
                        <td><?=$settings->getVoci()?></td>
                    </tr>
                    <tr> 
                        <th scope="row">TIpo di delete</th>
                        <td><?=$settings->getDeleteLabel()?></td>
                    </tr>
                </tbody>
            </table>
            <a href="<?= $settings::getUrlForm() ?>" class="btn btn-danger ">Personalizza impostazioni</a>
            <a href="<?= $settings::getUrlPage() ?>" class="btn btn-danger">Visualizza stile pagina</a> 
        </div>
    </body>
</html>
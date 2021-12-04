<?php
    include("autoloader.php");
    $settings = new Settings();
    $settings -> load();
    if(isset($_POST['submit'])){
        $settings = new Settings();
        $settings -> update($_POST); 
    }


    ?>


<html> 
    <head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>  
    <div class="container">
    <form action="form.php" method="POST">
        <div class="mb-3">
            <label for="nomeTema"> Nome tema utilizzato:</label>
            <select name="nomeTema">
                <option id="tema1" value="Tema1" <?php echo $settings->getNomeTema()=="Tema1" ? 'selected' :'' ?>> Tema 1</option>
                <option id="tema2"  value ="Tema2" <?php echo $settings->getNomeTema()=="Tema2" ? 'selected' :'' ?>> Tema 2</option>
                <option id="tema3"  value="Tema3" <?php echo $settings->getNomeTema() == "Tema3" ? 'selected' :'' ?>> Tema 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label> Tipo tema:</label>
            <label for="chiaro"> Chiaro </label>
            <input type="radio" id="chiaro" name="tema" value="chiaro" <?php echo $settings->getTema() ? 'checked' : ''?>>
            <label for="scuro"> Scuro </label>
            <input type="radio" id="scuro" name="tema" value="scuro" <?php echo $settings->getTema() ? '' : 'checked'?>>
        </div>
        <div class="mb-3">
            <label for="numero"> Voci per pagina</label>
            <input type="number" min="0"name="numero" value="<?= $settings->getVoci() ?>">
        </div>
        
        <div class="mb-3">
            <label for="delete"> Tipo delete: </label>
             <select id="delete" name="delete">
                <option value="hard" <?= $settings->getDelete() ? '' : 'selected'?>> hard </option>
                <option value="soft" <?= $settings->getDelete() ? 'selected' : ''?>> soft </option>
            </select>
        </div>


        <input type="submit" name="submit" class="btn btn-secondary">
        <a href="<?= $settings::getUrlView() ?>" class="btn btn-danger"> Visualizza impostazioni</a>

        <div>
        <label>Personalizzate</label>
        <input type="radio" id="0" name="default" value="zero" <?= ($settings->getDefault()) == 'zero' ? 'checked':''?> >
       <label>Default 1</label>  
        <input type="radio" id="1" name="default" value="one" <?= ($settings->getDefault()) == 'one' ? 'checked':''?>> 
        <label>Default 2</label>
        <input type="radio" id="2" name="default" value="two" <?= ($settings->getDefault()) == 'two' ? 'checked':''?>>
        <label>Default 3</label>
        <input type="radio" id="3" name="default" value="three" <?= ($settings->getDefault()) == 'three' ? 'checked':''?>>
        </div>
    </form>
    </div>
</body>

</html>
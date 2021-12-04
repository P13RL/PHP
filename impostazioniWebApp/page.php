<?php
include("autoloader.php");
$settings = new Settings();
$settings -> load();
?>

<html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body> 
        <style>
            <?php if(!$settings->getTema()): ?>
                body{
                    background-color: rgba(54,54,54);
                    color: white;
                }
                .page-link{
                    background-color: black;
                    color: white;
                }
                .colorato{
                    background-color: gray;
                    color: white;
                }
            <?php endif ?>
            <?php if($settings->getTema()): ?>
                .colorato{
                    background-color: blue;
                }
            <?php endif ?>
            
            <?php if($settings->getNomeTema() == 'Tema1'): ?>
                *, html, body, .container, .btn{
                    font-weight: bold;
                }
            <?php endif ?>
            <?php if($settings->getNomeTema() == 'Tema2'): ?>
                *, html, body, .container, .btn{
                    font-style: oblique;
                }
            <?php endif ?>
            <?php if($settings->getNomeTema() == 'Tema3'): ?>
                .colorato{
                    background-color: red;
                }
            <?php endif ?>
            

        </style>
        <div class="container h-stack">
           <div class="vstack gap-2 col-md-5 mx-auto">
                <div>afhakwfwf</div> 
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for($i=1; $i<=$settings->getVoci() ;++$i): ?>
                            
                            <li class="page-item"><a class="page-link" href="#"> <?=$i?></a></li>
                            
                        <?php endfor?>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <buttont type="button" class="btn colorato"><?= $settings->getDeleteLabel()?></button>
            </div>
        </div>
    </body>
</html>
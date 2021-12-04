
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= Gestione::FORM ?>">Inserisci donazione</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Gestione::ELENCO ?>">Tutte le donazioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Gestione::FILTRODONAZIONI ?>">Filtro donazioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Gestione::DONAZIONIMAGGIORI ?>">Donazioni superiori a 100 euro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
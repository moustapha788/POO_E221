<header class="container-fluid px-0 bg-dark  sticky-top my_header">
    <nav class="container-fluid navbar navbar-expand-lg bg-mine ">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">
                <img class="w-25" src="<?= $Constantes::WEB_ROOT . "images/logo-sonatel-academy.png" ?>" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h4 d-flex gap-5 col-12">
                    <?php if (isset($_SESSION["USER_CONNECT"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="home">Home</a>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION["USER_CONNECT"])) : ?>
                        <?php if ($Session::is_connect()) : ?>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lister
                                </a>
                                <ul class="dropdown-menu bg-mine " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/lister-personnes">Lister toutes les personnes</a></li>
                                    <li><a class="dropdown-item" href="/lister-users">Lister tous les utilisateurs</a></li>
                                    <li><a class="dropdown-item" href="/lister-RPs">Lister les responsables pédagogiqes</a></li>
                                    <li><a class="dropdown-item" href="/lister-ACs">Lister les attachés de classes</a></li>
                                    <li><a class="dropdown-item" href="/lister-etudiants">Lister la liste des étudiants(es)</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if ($Session::is_connect()) : ?>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ajouter
                                </a>
                                <ul class="dropdown-menu bg-mine" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Ajouter un responsable pédagogiqe</a></li>
                                    <li><a class="dropdown-item" href="#">Ajouter un attaché de classes</a></li>
                                    <li><a class="dropdown-item" href="#">Ajouter un étudiant(e)</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <?php if ($Session::is_connect()) : ?>
                            <li class="nav-item dropdown  align-self-end">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu bg-mine" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/logout">Se déconnecter</a></li>
                                    <li><a class="dropdown-item" href="#">Paramètres</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>

                    <?php endif; ?>
                    <?php if (!$Session::is_connect()) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Se connecter</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

</header>
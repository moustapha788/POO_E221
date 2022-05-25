<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . "bootstrap/css/bootstrap.css" ?>">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . "css/style.css" ?>">
    <title>Document</title>
</head>

<body class="">
    <?php require_once("navbar.html.php");/* navbar */ ?>

    <div class="container bg-dark bg-opacity-75 text-white page  py-5">
        <div class="container-fluid px-4">
            <?= $content_for_views /* chargement des contenus des vues */ ?>
        </div>
    </div>

    <?php require_once("footer.html.php");/* footer */ ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> -->
    <script defer src="<?= $Constantes::WEB_ROOT . "bootstrap/js/bootstrap.js" ?>"></script>
    <script src="<?= $Constantes::WEB_ROOT . "js/script.js" ?>"></script>
</body>

</html>
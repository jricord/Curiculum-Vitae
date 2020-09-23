<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/menu_responsive.css">
    <link rel="stylesheet" href="./css/index.css">

    <title>home</title>
</head>

<body>

    <header>
        <?php
        include "./menu_responsive.php";
        ?>


    </header>

    <main>
        <img class="logo-header" src="./img/logo_bodega_def.png" alt="logo" width="70%">

        <button href="./connexion.php" class="button-connexion">Se connecter</button>
        <!-- si le login et le password sont corrects alors connexion vers compte associé -->
    </main>

    <script src="./js/menu_responsive.js"></script>
</body>

</html>
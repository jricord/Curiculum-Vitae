<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/menu_general.css">
  <link rel="stylesheet" href="./css/accueil.css">
  <link rel="stylesheet" href="./css/footer.css">

  <title>Accueil</title>
</head>

<body>


  <header>

    <?php
    include "./menu_general.php";
    ?>

  </header>


  <main>
    <article>
      <div class="scene">
        <h1>La Bôdega des Arts</h1>

        <img src="./pictures/ian-williams-rKE6rXOl14U-unsplash.jpg" alt="">
        <h2>l'Atypique</h2>
        <p>Vous êtes à la recherche de lieux atypiques et chaleureux où vous retrouver entre amis, assister à un spectacle, une représentation, un vernissage, un concert privé… Scène ouverte à tous les nouveaux talents...</p>

        <img src="./pictures/avel-chuklanov-Hn3S90f6aak-unsplash.jpg" alt="diapo">
        <h2>l'Artiste</h2>
        <p> Vous êtes un artiste et vous souhaitez partager vos créations et vos idées ou tout simplement partager un moment délicieux à la Bodega. Le charme et l'authenticité de la Bôdega sauront vous séduire.</p>

        <img src="./pictures/alice-donovan-rouse-yu68fUQDvOI-unsplash.jpg" alt="">
        <h2>Pour l'accueil</h2>
        <p>L’artiste « Mô », peintre et décoratrice d’intérieur, au cœur de cette initiative vous accueillera et vous guidera dans une nouvelle aventure au cœur même de son domaine.
          Une histoire de famille avant tout, une envie de partage et de nouvelles créations.</p>

        <img src="./pictures/oscar-keys-ojVMh1QTVGY-unsplash.jpg" alt="scene-ouverte">
      </div>
    </article>
  </main>

  <footer>
    <?php
    include "./footer.php";
    ?>
  </footer>

  <script src="./js/menu_responsive.js"></script>

</body>

</html>
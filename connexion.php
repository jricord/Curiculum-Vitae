<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/menu_general.css">
  <link rel="stylesheet" href="./css/connexion.css">
  <link rel="stylesheet" href="./css/footer.css">

  <title>Connexion</title>
</head>

<body>


  <header>
    <?php
    include "./menu_general.php";
    ?>

  </header>


  <main>
    <section>

      <h1>Connexion</h1>
      <?php
      include "./formulaire_connexion.php";
      ?>
    </section>
  </main>

  <footer>
    <?php
    include "./footer.php";
    ?>
  </footer>

  <script src="./js/menu_responsive.js"></script>

</body>

</html>
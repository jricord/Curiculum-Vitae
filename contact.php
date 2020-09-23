<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/menu_general.css">
<link rel="stylesheet" href="./css/contact.css">
 <link rel="stylesheet" href="./css/footer.css">

  <title>contact</title>
</head>

<body>


  <header>

    <?php
    include "./menu_general.php";
    ?>

  </header>


  <main>
    <section>
      <h1>Contact</h1>

        <p>Pour toute demande de renseignements :</p>
        <p>La privatisation de la Bodega des Arts pour vos expositions et vos évènements (ART - DESIGN - SHOW - CONCERT).</p>

        <P>Nos évènements en cours et à venir.</P>
        <p>N'hésitez pas à remplir le formulaire ci-joint ou à nous contacter par mail ou par téléphone et à créer votre profil d'artiste.</p>
    </section>

<section>
  <?php
  include "./formulaire_contact.php";
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
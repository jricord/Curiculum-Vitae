<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/menu_general.css">
<link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/inscription.css">

  <title>inscription</title>
</head>

<body>


  <header>
    <?php
    include "./menu_general.php";
    ?>
   
  </header>


  <main>
        <section>
        
          
            <h1>Créer votre profil :</h1>
            <p>Créez votre galerie, accessible aux membres de la Bôdega des Arts.</p>
            <p>Organisez et planifiez vos évènements et représentations.</p>
            <p>Faites connaissance avec l'art et les artistes de la Bôdega des Arts.</p>
            <small>*champs requis</small>
            <small>*les champs grisés resteront confidentiels</small>

            <?php
            include "./formulaire_inscription.php";
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
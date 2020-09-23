<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/menu_general.css">
  <link rel="stylesheet" href="./css/evenements.css">
  <link rel="stylesheet" href="./css/footer.css">

  <title>évènements</title>
</head>

<body>


  <header>

    <?php
    include "./menu_general.php";
    ?>

  </header>


  <main>


    <div class="events">
      <div class="events-1">
        <article>
          <h1>« Jazz & Soul »</h1>
          <p>Concert privé au cœur de la campagne du Lubéron, venez apprécier la nature qui se marie avec le groupe « Jazzy »</p>
          <p class="date">Le 12/12/2020 à partir de 20h30</p>

          <img src="./pictures/amber-kipp-x1C1V82Pnkc-unsplash.jpg" alt="saxophone">

        </article>

      </div>

      <div class="events-2">
        <article>
          <h1>« Manu coffee »</h1>
          <p>Un one man show en petit comité, scène ouverte menée par Manu, vous souhaitez tester votre talent...c’est le moment.</p>
          <p>Tous les mardis jusqu’à fin février 2021</p>
          <p class="date">Le 12/12/2020 à partir de 20h30</p>


          <img src="./pictures/lloyd-dirks-4SLz_RCk6kQ-unsplash.jpg" alt="theatre">

        </article>
      </div>

      <div class="events-3">
        <article>
          <h1>« Expo' photo »</h1>
          <p>3 talents d’exception vous présentent leurs œuvres, venez les rencontrer autour d’un cocktail sous le platane de la Bastide</p>
          <p class="date">Du 02/03/2021 au 15/03/2021</p>

          <img src="./pictures/brigitta-schneiter-MHGDVDWjAb4-unsplash.jpg" alt="expo">

        </article>
      </div>
    </div>


  </main>

  <footer>
    <?php
    include "./footer.php";
    ?>
  </footer>

  <script src="./js/menu_responsive.js"></script>


</body>

</html>
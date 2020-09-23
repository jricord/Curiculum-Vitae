<div class="form-inscription">
    <form method="post" action="cible.php">

       
        <label for="name-artist">Nom d'artiste</label>
        <input type="text" name="name" id="name-artist">

        <label for="name-surname">Nom et prénom</label>
        <input type="text" name="names" id="name-surname">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <label for="email">confirmation E-mail</label>
        <input type="email" name="email" id="email">

        <label for="password">Mot de passe</label>
        <input type="password" name="mdp" id="password">

        <label for="passeword-confirm">Confirmation de votre mot de passe</label>
        <input type="password" name="mot de passe" id="password-confirm">

        <div class="radio">
            <div>
                <input type="radio" id="homme" name="sexe" value="homme" checked>
                <label for="homme">Homme</label>
            </div>

            <div>
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
            </div>
        </div>

        <a href="./profil.php" target="_blank">
            <!-- ici href vers page profil vierge mais rediriger vers la page profil vierge de l'utilisateur  -->
            <input type="submit" value="s'inscrire" id="submit-inscription"></a>

        <!-- à voir les liens vers les pages en erreur 404 sur page cible.php 
    definit dans "action" de la balise form-->
        <!-- une page cible.php pour chaque formulaire -->

    </form>
</div>
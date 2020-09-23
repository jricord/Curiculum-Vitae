<div class="form-connexion">
<form method="post" action="cible.php">
    <label for="email">E-mail</label>
        <input type="email" name= "email"  id="email">
    <label for="mdp">Mot de passe</label>
        <input type="password" name= "mot-de-passe"  id="mdp">
   
    <a href="#" target="_blank"> 
     <!-- direction la page de l'utilisateur -->
        <input type="submit" value="Connexion" id="submit-connexion"></a>
    <a href="./inscription.php" target="_blank">
        <input type="submit" value="Créer un compte" id="account"></a>
    <!-- à voir les liens vers les pages en erreur 404 sur page cible.php -->
    <!-- une page cible.php pour chaque formulaire  le terme ecrit dans "action" -->

</form>
<a href="#">informations de compte oubliées ?</a> 
</div>
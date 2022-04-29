<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Formulaire.html">
</head>
<body>

<div class="box-login">

    <h2>Inscrivez-vous.</h2>

    <form>
        <div class="form-groupe">
            <label for="utilisateur">Nom d'utilisateur</label>
            <input type="text" id="utilisateur" placeholder="Nom d'utilisateur" maxlength="24">
            <img src="ressources/check.svg" alt="icone de validation" class="icone-verif">
            <span class="message-alerte">Choisissez un pseudo entre 3 et 24 caractères</span>
        </div>
        <div class="form-groupe">
            <label for="email">Entrez votre mail</label>
            <input type="email" id="email" placeholder="Votre mail">
            <img src="ressources/check.svg" alt="icone de validation" class="icone-verif">
            <span class="message-alerte">Rentrez un email valide.</span>
        </div>
        <div class="form-groupe">
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" placeholder="Mot de passe">
            <img src="ressources/check.svg" alt="icone de validation" class="icone-verif">
            <span class="message-alerte">Un symbole, une lettre minuscule, un chiffre.</span>
            <div class="ligne">
                <div class="l1"><span>faible</span></div>
                <div class="l2"><span>moyen</span></div>
                <div class="l3"><span>fort</span></div>
            </div>
        </div>
        <div class="form-groupe">
            <label for="mdpconf">Confirmer le mot de passe</label>
            <input type="password" id="mdpconf" placeholder="Confirmez">
            <img src="ressources/check.svg" alt="icone de validation" class="icone-verif">
        </div>

        <button type="submit">Création du compte</button>
    </form>

</div>
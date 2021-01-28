<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>App Mobile</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue">
                    <p class="reveal-1">Créer</p>
                    <p  class="reveal-2">un compte</p>
                </div>
            </div>
            <div class="padd-around">
                <form id="enregister-form" method="post">
                    <div class="box">
                        <select>
                            <option>Croix Rouge</option>
                            <option>Banque alimentaire</option>
                            <option>Resto du coeur</option>
                            <option>Secours populaire</option>
                        </select>
                    </div>
                    <label>Nom</label>
                    <input type="text" name="nom" placeholder="Votre nom..." required spellcheck="false" autocomplete="off">
                    <label>Prénom</label>
                    <input type="text" name="prenom" placeholder="Votre prénom..." required spellcheck="false" autocomplete="off">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre e-mail..." required spellcheck="false" autocomplete="off">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe..." required spellcheck="false" autocomplete="off">
                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
            <div class="padd-around center">
                <p>Avez-vous déjà un compte ?</p>
                <p class="footerblue">Se connecter</p>
            </div>
        </div>
    </section>
    <img class="bleu-login" src="{{asset('media/images/bleu-login.svg')}}">
    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

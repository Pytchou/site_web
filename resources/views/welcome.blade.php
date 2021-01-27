<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Mobile</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/reboot.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>
<body>


<section class="row wrap x-center bg-black">
    <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
        <div class="padd-around column">   
            <div class="textcenter">
                <p>Créer <br> un compte</p>
            </div>
        </div>
        <div class="padd-around">
            <form id="enregister-form" method="post">
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Votre nom..." required spellcheck="false" autocomplete="off">
                <label>Prénom</label>
                <input type="text" name="prenom" placeholder="Votre prénom..." required spellcheck="false" autocomplete="off">
                <label>Email</label>
                <input type="email" name="email" placeholder="Votre e-mail..." required spellcheck="false" autocomplete="off">
                <label>Password</label>
                <input type="password" name="password" placeholder="Votre mot de passe..." required spellcheck="false" autocomplete="off">
                <button type="submit" class="btn">S'inscrire</button>
            </form>
        </div>
        <div class="padd-around center">
            <p>Avez-vous déjà un compte ?</p>
            <p class="footer">Se connecter</p>
        </div>
    </div>
</section>


<script type="text/javascript" src="{{asset('js/sript.js')}}"></script>
</body>
</html>

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
            <div class="padd-around" id="enregister-form">
                <form method="post" action="register_validator">
                    @csrf
                    <label>Je rejoins l'association :</label>
                    <div class="box">
                        <select>
                            <option>Croix Rouge</option>
                            <option>Banque alimentaire</option>
                            <option>Resto du coeur</option>
                            <option>Secours populaire</option>
                        </select>
                    </div>
                    {!! $errors->first('lastname', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom</label>
                    <input type="text" name="lastname" placeholder="Votre nom..." >
                    {!! $errors->first('name', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Prénom</label>
                    <input type="text" name="name" placeholder="Votre prénom..." >
                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre e-mail..." >
                    {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe..." >
                    {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Confirmation de votre mot de passe</label>
                    <input type="password" name="password_confirmation" placeholder="Votre mot de passe..." >
                    {!! $errors->first('agree', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label class="form-check-label" for="check">Accepter les termes et la politique de confidentialité.</label>
                    <input type="checkbox" class="form-check-input"  name="agree" id="check" checked>


                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
            <div class="padd-around center" style="justify-content: center; text-align: center;">
                <p>Avez-vous déjà un compte ?</p>
                <p class="footerblue">Se connecter</p>
            </div>
        </div>
    </section>
    <img class="bleu-login" src="{{asset('media/images/bleu-login.svg')}}">
    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

</body>
</html>

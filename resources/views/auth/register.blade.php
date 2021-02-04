<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Enregistrement</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center" style="height: 100vh; display: flex; align-items: center;">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue" style="line-height: 27px; margin-bottom: -10px;">
                    <p>Créer</p>
                    <p>un compte</p>
                </div>
            </div>
            <div class="padd-around" id="enregister-form">
                <form method="post" action="form1">
                    @csrf
                    <label>Je rejoins l'association :</label>
                    <div class="box">
                        <select name="partner">
                            <option>--Sélectionner--</option>
                            <option>Croix Rouge</option>
                            <option>Banque alimentaire</option>
                            <option>Resto du coeur</option>
                            <option>Secours populaire</option>
                        </select>
                    </div>
                    {!! $errors->first('firstname', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Prénom</label>
                    <input type="text" name="firstname" placeholder="Votre prénom..." >
                    {!! $errors->first('lastname', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom</label>
                    <input type="text" name="lastname" placeholder="Votre nom..." >
                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre e-mail..." >
                    {!! $errors->first('phone', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Numéro de téléphone</label>
                    <input type="text" name="phone" placeholder="Votre numéro de téléphone.." >
                    {!! $errors->first('address', '<div class="alert alert-warning" role="alert">:message</div>')!!}


                    <button type="submit" class="btn">Suivant</button>
                </form>
            </div>
            <div class="padd-around center" style="justify-content: center; text-align: center;">
                <p>Avez-vous déjà un compte ?</p>
                <p class="footerblue">Se connecter</p>
            </div>
        </div>
    </section>

    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

</body>
</html>

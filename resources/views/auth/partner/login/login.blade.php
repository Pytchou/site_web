<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Inscription</title>
    <link href="../css/app.css" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center" style="height: 100vh; display: flex; align-items: center;">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue" style="line-height: 27px; margin-bottom: -10px;">
                    <p>Se</p>
                    <p>Connecter</p>
                </div>
            </div>
            <div class="padd-around" id="enregister-form">
                <form method="post" action="/benevole/login_validator">
                    @csrf

                    @if(isset($error))
                        <div class="alert alert-warning" role="alert">
                            {{$error}}
                        </div>
                    @endif

                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre e-mail saisie lors de votre enregistrement..." >
                    {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe saisie lors de votre enregistrement..." >


                    <button type="submit" class="btn">Suivant</button>
                </form>
            </div>
            <div class="padd-around center" style="justify-content: center; text-align: center;">
                <p>Vous n'avez pas de compte ?</p>
                <p class="footerblue"><a href="/partenaire/register1" >Enregistrer mon association</a></p>
            </div>
        </div>
    </section>
    <img class="bleu-login" src="{{asset('media/images/bleu-login.svg')}}">
    <p>bondour</p>
    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

</body>
</html>

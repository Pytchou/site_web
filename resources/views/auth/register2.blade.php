<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Enregistrement</title>
    <link href="../css/app.css" rel="stylesheet">
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
                <form method="post" action="/register/form2">
                    @csrf

                    @if(isset($partner))
                        <input type="hidden" name="partner" value="{{$partner}}">
                    @else
                        <input type="hidden" name="partner" value="N/A" >
                    @endif
                    @if(isset($firstname))
                        <input type="hidden" name="firstname" value="{{$firstname}}">
                    @else
                        <input type="hidden" name="firstname" value="N/A" >
                    @endif
                    @if(isset($lastname))
                        <input type="hidden" name="lastname" value="{{$lastname}}">
                    @else
                        <input type="hidden" name="lastname" value="N/A" >
                    @endif
                    @if(isset($email))
                        <input type="hidden" name="email" value="{{$email}}" >
                    @else
                        <input type="hidden" name="email" value="N@A.fr" >
                    @endif
                    @if(isset($phone))
                        <input type="hidden" name="phone" value="{{$phone}}" >
                    @else
                        <input type="hidden" name="phone" value="N/A" >
                    @endif

                   {!! $errors->first('address', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Adresse</label>
                    <input type="text" name="address" placeholder="Votre prénom..." >
                    {!! $errors->first('address_detail', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Complément d'adresse </label>
                    <input type="text" name="address_detail" placeholder="Votre nom..." >
                    {!! $errors->first('zip', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Code postal</label>
                    <input type="text" name="zip" placeholder="Votre e-mail..." >
                    {!! $errors->first('city', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Ville</label>
                    <input type="text" name="city" placeholder="Votre numéro de téléphone.." >
                    {!! $errors->first('agree', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <div class="row" id="agree">
                        <input type="checkbox" class="form-check-input"  name="agree" id="check" checked>
                        <label class="form-check-label" for="check">Accepter les termes et la politique de confidentialité.</label>
                    </div>


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

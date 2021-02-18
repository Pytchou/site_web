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
                <form method="post" action="/partenaire/register_form2">
                    @csrf

                    @if(isset($validator))
                        {{dd($validator)}}
                    @endif

                    @if(isset($name_partner))
                        <input type="hidden" name="name_partner" value="{{$name_partner}}">
                    @else
                        <input type="hidden" name="name_partner" value="N/A" >
                    @endif
                    @if(isset($max_partner))
                        <input type="hidden" name="max_partner" value="{{$max_partner}}">
                    @else
                        <input type="hidden" name="max_partner" value="255" >
                    @endif
                    @if(isset($siret))
                        <input type="hidden" name="siret" value="{{$siret}}">
                    @else
                        <input type="hidden" name="siret" value="N/A" >
                    @endif
                    @if(isset($naf))
                        <input type="hidden" name="naf" value="{{$naf}}" >
                    @else
                        <input type="hidden" name="naf" value="N/A" >
                    @endif
                    @if(isset($phone))
                        <input type="hidden" name="phone" value="{{$phone}}" >
                    @else
                        <input type="hidden" name="phone" value="N/A" >
                    @endif
                    @if(isset($contact))
                        <input type="hidden" name="contact" value="{{$contact}}" >
                    @else
                        <input type="hidden" name="contact" value="N/A" >
                    @endif

                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre adresse mail..." >
                    {!! $errors->first('address', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Adresse</label>
                    <input type="text" name="address" placeholder="Adresse de l'association..." >
                    {!! $errors->first('address_details', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Complément d'adresse</label>
                    <input type="text" name="addresse_details" placeholder="Complément d'adresse..." >
                    {!! $errors->first('zip', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Code postal</label>
                    <input type="text" name="zip" placeholder="Votre code postal..." >
                    {!! $errors->first('city', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Ville</label>
                    <input type="text" name="city" placeholder="Votre ville..." >
                    {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe..." >
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

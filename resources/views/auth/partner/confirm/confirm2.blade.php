<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Enregistrement</title>
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center" style="height: 100vh; display: flex; align-items: center;">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue" style="line-height: 27px; margin-bottom: -10px;">
                    <p>Valider</p>
                    <p>un compte</p>
                </div>
            </div>
            <div class="padd-around" id="enregister-form">
                <form method="post" action="/partenaire/register_partner_confirm_notify">
                    @csrf

                    @if(isset($id))
                        <input type="hidden" name="id" value="{{$id}}">
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
                    @if(isset($email))
                        <input type="hidden" name="email" value="{{$email}}" >
                    @else
                        <input type="hidden" name="email" value="N@A.fr" >
                    @endif

                    {!! $errors->first('contact', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom & Prénom Président</label>
                    <input type="text" name="contact" value="{{$contact}}" >
                    {!! $errors->first('address', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Adresse</label>
                    <input type="text" name="address" value="{{$address}}" >
                    {!! $errors->first('address_details', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Complément d'adresse</label>
                    @if(isset($address_details))
                        <input type="text" name="address_details" value="{{$address_details}}">
                    @else
                        <input type="text" name="address_details" value="Rien">
                    @endif
                    {!! $errors->first('zip', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Code postal</label>
                    <input type="text" name="zip" value="{{$zip}}" >
                    {!! $errors->first('city', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Ville</label>
                    <input type="text" name="city" value="{{$city}}" >
                    {!! $errors->first('longitude', '<div class="alert alert-warning" role="alert">:message</div>')!!}


                    <button type="submit" class="btn">Valider les Informations</button>
                </form>
            </div>
        </div>
    </section>
    <img class="bleu-login" src="{{asset('media/images/bleu-login.svg')}}">
    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

</body>
</html>

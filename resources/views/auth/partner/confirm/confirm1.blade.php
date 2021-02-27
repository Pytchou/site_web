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
                <form id ="form" method="post" action="/partenaire/register_partner_confirm_form1">
                    @csrf

                    <input type="hidden" name="id" value="{{$partner->id}}">
                    {!! $errors->first('name_partner', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom Association</label>
                    <input type="text" name="name_partner" value="{{$partner->name}}" >
                    {!! $errors->first('max_partner', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nombre maximum de volontaire</label>
                    <input type="text" name="max_partner" value="{{$partner->volunteers_max_score}}">
                    {!! $errors->first('siret', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Siret</label>
                    <input type="text" name="siret" value="{{$partner->siret}}">
                    {!! $errors->first('naf', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Naf</label>
                    <input type="text" name="naf" value="{{$partner->naf}}" >
                    {!! $errors->first('phone', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Numéro de téléphone</label>
                    <input type="text" name="phone" value="{{$partner->phone}}" >
                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" value="{{$partner->email}}" >

                    @if(isset($partner->contact))
                        <input type="hidden" name="contact" value="{{$partner->contact}}" >
                    @endif
                    @if(isset($partner->address))
                        <input type="hidden" name="address" value="{{$partner->address}}" >
                    @endif
                    @if(isset($partner->address_details))
                        <input type="hidden" name="address_details" value="{{$partner->address_details}}" >
                    @endif
                    @if(isset($partner->zip))
                        <input type="hidden" name="zip" value="{{$partner->zip}}" >
                    @endif
                    @if(isset($partner->city))
                        <input type="hidden" name="city" value="{{$partner->city}}" >
                    @endif
                    @if(isset($partner->longitude))
                        <input type="hidden" name="longitude" value="{{$partner->longitude}}" >
                    @endif
                    @if(isset($partner->latitude))
                        <input type="hidden" name="latitude" value="{{$partner->latitude}}">
                    @endif
                    <button type="submit" class="btn">Suivant</button>
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

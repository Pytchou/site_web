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
                <form id ="form" method="post" action="/partenaire/register_partner_insert_data">
                    @csrf

                    @if(isset($name_partner))
                        <input type="hidden" name="name_partner" value="{{$name_partner}}">
                    @else
                        <input type="hidden" name="name_partner" value="N/A" >
                    @endif
                    @if(isset($max_partner))
                        <input type="hidden" name="max_partner" value="{{$max_partner}}">
                    @else
                        <input type="hidden" name="max_partner" value="N/A" >
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
                    @if(isset($contact))
                        <input type="hidden" name="contact" value="{{$contact}}" >
                    @else
                        <input type="hidden" name="contact" value="N/A" >
                    @endif
                    @if(isset($address))
                        <input type="hidden" name="address" value="{{$address}}" >
                    @else
                        <input type="hidden" name="address" value="N/A" >
                    @endif
                    @if(isset($address_details))
                        <input type="hidden" name="address_details" value="{{$address_details}}" >
                    @else
                        <input type="hidden" name="address_details" value="N/A" >
                    @endif
                    @if(isset($zip))
                        <input type="hidden" name="zip" value="{{$zip}}" >
                    @else
                        <input type="hidden" name="zip" value="N/A" >
                    @endif
                    @if(isset($city))
                        <input type="hidden" name="city" value="{{$city}}" >
                    @else
                        <input type="hidden" name="city" value="N/A" >
                    @endif
                    @if(isset($password))
                        <input type="hidden" name="password" value="{{$password}}" >
                    @else
                        <input type="hidden" name="password" value="N/A" >
                    @endif
                    @if(isset($agree))
                        <input type="hidden" name="agree" value="{{$agree}}" >
                    @else
                        <input type="hidden" name="agree" value="N/A" >
                    @endif



                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
            <script type="text/javascript">

                if (document.readyState === 'complete') {
                    document.getElementById("form").submit()
                } else {
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById("form").submit()
                    });
                }

            </script>
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

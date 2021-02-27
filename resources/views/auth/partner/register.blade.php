<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Inscription</title>
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center" style="height: 100vh; display: flex; align-items: center;">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue" style="line-height: 27px; margin-bottom: -10px;">
                    <p>Créer</p>
                    <p>un compte</p>
                    <p>Partenaire</p>
                </div>
            </div>
            <div class="padd-around" id="enregister-form">
                <form method="post" action="/partenaire/register_form1">
                    @csrf
                    {!! $errors->first('name_partner', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom Association</label>
                    <input type="text" name="name_partner" placeholder="Le nom de votre association est..." >
                    {!! $errors->first('max_partner', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nombre maximum de bénévole(s)</label>
                    <input type="text" name="max_partner" placeholder="Nombre maximum de volontaire...">
                    {!! $errors->first('siret', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Siret</label>
                    <input type="text" name="siret" placeholder="Numéro de SIRET..." value="N/A">
                    {!! $errors->first('naf', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Naf</label>
                    <input type="text" name="naf" placeholder="Code naf..." value="N/A" >
                    {!! $errors->first('phone', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Numéro de téléphone</label>
                    <input type="text" name="phone" placeholder="Votre numéro de téléphone..." >
                    {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre adresse mail..." >
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

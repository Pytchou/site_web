@component('mail::message')
# Validation de votre association ( {{$request->name_partner}} ) sur le site web {{env('APP_URL')}}

<p>Madame, Monsieur,</p>

<p>Nous nous permettons de vous contacter à la suite de la validation de votre compte sur notre site web effectué
    par nos équipes.</p>

<p>En effet, à partir de maintenant vous pouvez vous connecter à l’aide de vos identifiants ou en cliquant que le
    bouton ci-dessous :</p>

@component('mail::button', ['url' => url('/partenaire/login')])
Se connecter
@endcomponent

<p>Nous vous rappelons que ces informations sont strictement personnelles et nous vous invitons à les conservés en lieu sûr.</p>

<p>En vous en souhaitant bonne réception.</p>

<p>Cordialement</p>
<p>L’équipe de modération {{ config('app.name') }}</p>
@endcomponent

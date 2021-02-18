@component('mail::message')
# Inscription d'un partenaire sur le site web

<p>L'association {{$request->name_partner}} vient de se créer un compte sur le site web mais il doit être confirmé.</p>
<p>Merci de cliquer sur le lien suivant et de procéder à la validation des informations.</p>

@component('mail::button', ['url' => "/partenaire/confirm/{$request->name_partner}/{$confirmation_token}"])
Confirmer mon compte
@endcomponent

Cordialement,<br>
L'équipe du site web
@endcomponent

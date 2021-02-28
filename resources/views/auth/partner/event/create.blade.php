<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Créer un évènement</title>
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body>

<main>
    <section class="row wrap x-center" style="height: 100vh; display: flex; align-items: center;">
        <div class="xLarge-4 large-4 medium-6 small-12 xSmall-12">
            <div class="padd-around column reveal">
                <div class="texthead blue" style="line-height: 27px; margin-bottom: -10px;">
                    <p>Créer</p>
                    <p>un évènement</p>
                </div>
            </div>
            <div class="padd-around" id="enregister-form">
                <form method="post" action="/partenaire/register_form1">
                    @csrf
                    {!! $errors->first('name_event', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Nom de l'évènement</label>
                    <input type="text" name="name_event" placeholder="Nom de l'évènement..." >
                    {!! $errors->first('start_date', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Date de début</label>
                    <input type="date" id="start" name="trip-start"
                        value="{{ $variable }}"
                        min="2021-01-01"
                        max="2030-12-31">
                    {!! $errors->first('end_date', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Date de fin</label>
                    <input type="date" id="start" name="trip-start"
                        value=""
                        min="2021-01-01"
                        max="2030-12-31">
                    {!! $errors->first('description', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                    <label>Description</label>
                    <textarea id="description" name="description">
                        Description...
                    </textarea>
                    <button type="submit" class="btn">Validé</button>
                </form>
            </div>
        </div>
    </section>
    <img class="bleu-login" src="{{asset('media/images/bleu-login.svg')}}">
    <img class="bleu-login2" src="{{asset('media/images/bleu-login.svg')}}">
</main>

</body>
</html>

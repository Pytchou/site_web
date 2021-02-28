<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Banque alimentaire</title>
    <link href="{{url(('css/app.css'))}}" rel="stylesheet">

</head>

<body>
<header class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
    <section>
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 divheader">
            <div>
                <p class="bienvenue">Bonjour et bienvenue</p>
                <img class="front" src="{{asset('media/image/front.svg')}}">
                <img class="ombre" src="{{asset('media/image/ombre.svg')}}">
            </div>
            <div class="margin">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nobis fuga vitae suscipit neque. Molestiae exercitationem, ratione quia,
                ad amet nam laboriosam minus aut voluptatem illo laudantium sequi temporibus,
                mollitia culpa!
            </div>
        </div>
    </section>
</header>
</body>
</html>

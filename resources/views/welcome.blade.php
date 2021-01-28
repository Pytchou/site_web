<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Site web</title>
    <link href="css/app.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://kit.fontawesome.com/7be350b690.js" crossorigin="anonymous"></script>
<body>
    <header id="bleu">

        <section class="row wrap">
            <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
                <div class="padd-around center">
                    <nav>
                        <ul>
                            <li class="texthead white">
                                <a href="/">Accueil</a>
                                <a href="/register">Créer un compte</a>
                                <a href="/mentions-legales">Information</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </section>

    </header>

    <main>

        <section class="row wrap">
            <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 " id="divheader">
                <div class="padd-around">
                    <p class="bienvenue">Bonjour et bienvenue</p>
                    <img class="front" src="{{asset('media/image/front.svg')}}">
                    <img class="ombre" src="{{asset('media/image/ombre.svg')}}">
                </div>
                <div class="padd-around center" id="left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nobis fuga vitae suscipit neque. Molestiae exercitationem, ratione quia,
                    ad amet nam laboriosam minus aut voluptatem illo laudantium sequi temporibus,
                    mollitia culpa!
                </div>
            </div>
        </section>

        <section class="row wrap">

            <div class="list">
                <div class="item js-marker" data-lat="44.837528228759766" data-lng="-0.5740066766738892" data-place_restante="128" data-title="Centre Bordeaux Croix Rouge" data-email="Aucune donnée" data-phone="05 56 52 34 85" data-address="50 Rue Ferrere"></div>
                <div class="item js-marker" data-lat="44.8356819152832" data-lng="-0.5753112435340881" data-place_restante="185" data-title="Centre Bordeaux Banque Alimentaire" data-email="ba330@banquealimentaire.org" data-phone="05 56 43 10 63" data-address="15 rue Bougainville"></div>
                <div class="item js-marker" data-lat="44.8302308" data-lng="-0.5618266" data-title="Centre Bordeaux Resto du Coeur" data-place_restante="85" data-email=" contact@restosducoeur.org" data-phone="05 57 95 87 55" data-address="14 Rue du Fort Louis"></div>
                <div class="item js-marker" data-lat="44.8325" data-lng="-0.6338" data-title="Centre Mérignac Secours Populaire" data-place_restante="45" data-email="secours-populaire-francais-merignac@orange.fr" data-phone="05 56 45 29 81" data-address="19 Avenue du Château d'Eau"></div>
                <div class="item js-marker" data-lat="44.8749" data-lng="-0.5178" data-title="Centre Lormont Secours Populaire"  data-place_restante="96" data-email="info@secourspopulaire.fr" data-phone="05 56 06 14 24" data-address="8 Rue du Colonel Fabien"></div>
                <div class="item js-marker" data-lat="44.7123637" data-lng="-1.0528869" data-title="Centre Lanton Resto du Coeur" data-place_restante="49" data-email="contact@restosducoeur.org" data-phone="Aucune Donnée" data-address="5 Place des Sports"></div>
                <div class="item js-marker" data-lat="44.914859771728516" data-lng="-0.4276067018508911" data-place_restante="155" data-title="Centre St Loubès Resto du Coeur" data-email="ad33.st-loubes@restosducoeur.org" data-phone="05 56 68 60 42" data-address="41 Rue du Stade"></div>
            </div>


            <div class="map" id="map"></div>

            <div class="partnership_card" id="js-container">

                <div class="testa">
                    <p class="price-offers" id="title">Nom Association</p>
                    <p id="part_title"></p>
                </div>

                <div class="txt-offers-left">
                    <div class="container-text">
                        <p class="components">Nombres places restantes: <span id="place_restante"></span></p>
                        <p class="components">Email : <span id="email"></span></p>
                        <p class="components">Tel :<span id="phone"></span></p>
                        <p class="components">Adresse : <span id="address"></span></p>
                    </div>

                <div class="container-btns">
                    <div class="btns-offers">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="/register" target="_blank"><p>Nous rejoindre</p></a>
                    </div>
                </div>

            </div>

            </div>
        </section>

        <section class="column wrap">
            <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 column">
                <h1 class="padd-around center colab"> Certains de nos partenaires</h1>
                <div id="logo-container">
                    <div class="xLarge-3 large-3 medium-3 small-6 xSmall-6 border-logos shadow-logos center column containers">
                        <h2 style="padding: 15px;">Croix rouge</h2>
                        <hr>
                        <img id="croix-rouge" src="{{asset('media/images/croix-rouge.png')}}" >
                    </div>
                    <div class="xLarge-3 large-3 medium-3 small-6 xSmall-6 border-logos shadow-logos center column containers">
                        <h2 style="padding: 15px;">Banque alimentaire</h2>
                        <hr>
                        <img id="banque-alimentaire" src="{{asset('media/images/logo_banque_alimentaire.png')}}" >
                    </div>
                    <div class="xLarge-3 large-3 medium-3 small-6 xSmall-6 border-logos shadow-logos center column containers">
                        <h2 style="padding: 15px;">Resto du coeur</h2>
                        <hr>
                        <img id="resto-du-coeur" src="{{asset('media/images/Restos_du_coeur_Logo.png')}}" >
                    </div>
                    <div class="xLarge-3 large-3 medium-3 small-6 xSmall-6 border-logos shadow-logos center column containers">
                        <h2 style="padding: 15px;">Secours populaire</h2>
                        <hr>
                        <img id="secours-populaire" src="{{asset('media/images/Secours_populaire_logo.png')}}" >
                    </div>
                </div>
            </div>
        </section>

        <xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 24.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 141.73 5.67" style="enable-background:new 0 0 141.73 5.67;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#0F388E;}
        </style>
            <polygon class="st0" points="141.73,4.07 141.73,5.67 0,5.67 0,0 "/>
        </svg>
    </main>


    <footer>
        <section class="row wrap" id="foot">
            <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <p>Informations</p>
                    <ul>
                        <li class="center">
                            <a href="/rgpd">RGPD</a>
                        </li>
                        <li class="center">
                            <a href="/cgu">CGU</a>
                        </li>
                        <li class="center">
                            <a href="/mentions-legales">Mentions Légales</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <p>
                        Nos différents partenaires
                    </p>
                    <ul>
                        <li class="center"><a href="https://www.banquealimentaire.org/" target="_blank">Les banques alimentaires</a></li>
                        <li class="center"><a href="https://www.restosducoeur.org//" target="_blank">Les restos du coeur</a></li>
                        <li class="center"><a href="https://www.secourspopulaire.fr/" target="_blank">Le secours populaire</a></li>
                        <li class="center"><a href="https://www.croix-rouge.fr/" target="_blank">La croix rouge</a></li>
                    </ul>
                </div>
            </div>
            <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <p>Contact</p>
                    <ul>
                        <li class="center">
                            <a href="mailto:email@example.com">email@exemple.com</a>
                        </li>
                        <li class="center">
                            <a href="tel:+33781815136">0781815136</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.3.0"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>

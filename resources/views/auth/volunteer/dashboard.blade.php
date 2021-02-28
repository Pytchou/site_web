<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../css/app.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!--Burger Menu-->
<section>
    <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
        <div>
        <div>
            <ul>
                <li>
                    <a href="">Tableau de bord</a>
                </li>
                <li>
                    <a href="">Toutes les campagnes</a>
                </li>
                <li>
                    <a href="">Membres</a>
                </li>
                <li>
                    <a href="">Statistiques</a>
                </li>
                <li>
                    <a href="">Assistance</a>
                </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</section>

<header>
    <section class="row wrap">
        <nav>
            <div class="logo-nav">
                <img src="{{asset('media/images/croix-rouge.png')}}" alt="">
            </div>
            <ul>
                <li class="content">
                    <a href="" class="link link--metis">Tableau de bord</a>
                </li>
                <li class="content">
                    <a href="" class="link link--metis">Toutes les campagnes</a>
                </li>
                <li class="content">
                    <a href="" class="link link--metis">Membres</a>
                </li>
                <li class="content">
                    <a href="" class="link link--metis">Statistiques</a>
                </li>
                <li class="content">
                    <a href="" class="link link--metis">Assistance</a>
                </li>
            </ul>
        </nav>
    </section>
</header>

<main>

    <!--ESPACE section-->
    <section class="row wrap" style="height: 10vh;">
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
        </div>
    </section>

    <section id="bloc" class="row wrap">
        <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
            <div class="padd-around column">
                <h1>Rejoindre une campagne</h1>
                <p>De nombreuses campagnes d'aide alimentaire sont disponibles via nos partenaires. 
                    Cliquez sur le bouton ci-dessous pour rejoindre l'une d'entre elle.
                </p>
                <div class="center">
                    <a href="#" class="btn2">+</a>
                    <p class="padd-around" style="text-transform: uppercase;">
                        Rejoindre une campagne
                    </p>
                </div>
            </div>
        </div>
        <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <div class="padd-around column" id="bloc1">
                    <div>
                        <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    </div>
                    <div>
                        <p>Participants</p>
                        <p>Avancement de la campagne</p>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-bar">
                                    <div class="skill-per" per="67"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <div class="padd-around column" id="bloc2">
                    <div>
                        <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    </div>
                    <div>
                        <p>Participants</p>
                        <p>Avancement de la campagne</p>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-bar">
                                    <div class="skill-per" per="67"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <div class="padd-around column" id="bloc3">
                    <div>
                        <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    </div>
                    <div>
                        <p>Participants</p>
                        <p>Avancement de la campagne</p>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-bar">
                                    <div class="skill-per" per="67"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--ESPACE section-->
    <section class="row wrap" style="height: 8vh;">
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
        </div>
    </section>

    <section class="row wrap">
        <div class="center recentproject">
            <p>Campagnes recentes</p>
            <p>Date de creation</p>
            <p>Fondateur</p>
            <p>Dernière participation</p>
            <p>Etat</p>
        </div>
        <div class="column center">
            <div>
                <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
            </div>
            <div>
                <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
            </div>
            <div>
                <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
            </div>
            <div>
                <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
                <p>Test</p>
            </div>
        </div>
    </section>

</main>

<script>
    $('.skill-per').each(function(){
    var $this = $(this);
    var per = $this.attr('per');
    $this.css("width",per+'%');
    $({animatedValue: 0}).animate({animatedValue: per},{
        duration: 1000,
        step: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        },
        complete: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
        }
    });
});
</script>

</body>
</html>

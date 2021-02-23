<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<header>
    <section class="row wrap">
        <nav>
            <div class="logo-nav">
                <img src="{{asset('media/images/croix-rouge.png')}}" alt="">
            </div>
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
        </nav>
    </section>
</header>

<main>


    <!--Première section-->
    <section id="main" class="row wrap padd-around"  style="height: 100vh;">

        <div id="bloc" class="xLarge-12 large-12 medium-12 small-12 xSmall-12 center">
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <h1>Rejoindre une campagne</h1>
                <p>De nombreuses campagnes d'aide alimentaire sont disponibles via nos partenaires.
                Cliquez sur le bouton ci-dessous pour rejoindre l'une d'entre elle.</p>
                <div style="align-items: center;display: flex;">
                    <a href="#" class="btn2">+</a>
                    <p class="padd-around" style="text-transform: uppercase; color: #3568ef; font-weight: bold; font-size: 18px">
                        Rejoindre une campagne
                    </p>
                </div>
            </div>
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc1">
                        <img class="logo-section" style="margin-bottom: 15vh;" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                        <p style="color: #4A7745">Participants</p>
                        <p style="color: #4A7745">Avancement de la campagne</p>
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
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc2">
                        <img class="logo-section" style="margin-bottom: 15vh;" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                        <p style="color: #885A40">Participants</p>
                        <p style="color: #885A40">Avancement de la campagne</p>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-bar">
                                    <div class="skill-per" per="32"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc3">
                        <img class="logo-section" style="margin-bottom: 15vh;" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                        <p style="color: #3A7295">Participants</p>
                        <p style="color: #3A7295">Avancement de la campagne</p>
                        <div class="skills">
                            <div class="skill">
                                <div class="skill-bar">
                                    <div class="skill-per" per="54"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="recentproject" class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
            <div class="padding">
                <div style="align-items: center; display: flex">
                    <p>Campagnes recentes</p>
                    <p>Date de creation</p>
                    <p>Fondateur</p>
                    <p>Dernière participation</p>
                    <p>Etat</p>
                </div>
            </div>
            <div class="padding">
                <div class="padd-around" style="border: solid black 1px;border-radius: 10px;align-items: center;">
                    <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                </div>
            </div>
            <div class="padding">
                <div class="padd-around" style="border: solid black 1px;border-radius: 10px;align-items: center;">
                    <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                </div>
            </div>
            <div class="padding">
                <div class="padd-around" style="border: solid black 1px;border-radius: 10px;align-items: center;">
                    <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                </div>
            </div>
            <div class="padding">
                <div class="padd-around" style="border: solid black 1px;border-radius: 10px;align-items: center;">
                    <img class="logo-section" src="{{asset('media/images/croix-rouge.png')}}" alt="">
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                    <p>desqds</p>
                </div>
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



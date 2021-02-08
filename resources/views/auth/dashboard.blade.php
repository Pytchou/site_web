<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
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
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="">All Projects</a>
                </li>
                <li>
                    <a href="">Members</a>
                </li>
                <li>
                    <a href="">Stats</a>
                </li>
                <li>
                    <a href="">Help</a>
                </li>
            </ul>
        </nav>
    </section>
</header>

<main>

    <aside>
        <section class="row wrap">
            <section class="column y-center">
                <a href="" class="icon">
                    <i class="fas fa-home"></i>
                </a>
                <a href="" class="icon">
                    <i class="fas fa-calendar-times"></i>
                </a>
                <a href="" class="icon">
                    <i class="fas fa-comment-dots"></i>
                </a>
                <a href="" class="icon">
                    <i class="fas fa-question-circle"></i>
                </a>
                <a href="" class="icon">
                    <i class="fas fa-cog"></i>
                </a>
            </section>
        </section>
    </aside>

    <!--Première section-->
    <section id="main" class="row wrap padd-around" style="width: auto">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12 center">
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <h1>Ajouter un Evénement</h1>
                <p>Create a new project on ProManage. Collaborate
                    your work. Directory to your local projects</p>
                <div style="align-items: center;display: flex;">
                    <a href="#" class="btn2">+</a>
                    <p class="padd-around" style="text-transform: uppercase; color: #EC4E6E; font-weight: bold">
                        Create New Project
                    </p>
                </div>

            </div>
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc1" style="align-items: flex-end;">
                        <p>dzeqsfdezqs</p>
                    </div>
                </div>
            </div>
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc2" style="align-items: flex-end;">
                        <p>dzeqsfdezqs</p>
                    </div>
                </div>
            </div>
            <div class="xLarge-3 large-3 medium-12 small-12 xSmall-12">
                <div class="padd-around">
                    <div class="padd-around column" id="bloc3" style="align-items: flex-end;">
                        <p>dzeqsfdezqs</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="recentproject" class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
            <div class="padding">
                <div style="align-items: center; display: flex">
                    <p>Recent Projects</p>
                    <p>Created</p>
                    <p>Reporter</p>
                    <p>Due</p>
                    <p>Stats</p>
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

</body>
</html>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Inscription</title>
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
                <form method="post" action="/register/form1">
                    @csrf
                    <label>Quelle association :</label>
                    <div class="box">
                        <select name="partner">
                            <option>--Sélectionner--</option>
                            <option>Croix Rouge</option>
                            <option>Banque alimentaire</option>
                            <option>Resto du coeur</option>
                            <option>Secours populaire</option>
                        </select>
                    </div>

                    <label>Nom</label>
                    <input type="text" name="name_partner" placeholder="Le nom de votre association est..." >

                    <label>Maximum de volontaire</label>
                    <input type="text" name="max_partner" placeholder="Nombre maximum de volontaire..." >

                    <label>Siret</label>
                    <input type="email" name="num_siret" placeholder="Numéro de SIRET..." >

                    <label>Naf</label>
                    <input type="text" name="code_naf" placeholder="Code naf..." >

                    <label>Numéro de téléphone</label>
                    <input type="text" name="phone" placeholder="Votre numéro de téléphone..." >

                    <label>Email</label>
                    <input type="email" name="email" placeholder="Votre adresse mail..." >

                    <label>Contact</label>
                    <input type="text" name="conctat" placeholder="Le contact de l'asssociation..." >

                    <label>adresse</label>
                    <input type="text" name="adresse_partner" placeholder="Adresse de l'association..." >

                    <label>Complément d'adresse</label>
                    <input type="text" name="adresse_details" placeholder="Complément d'adresse..." >

                    <label>Code postal</label>
                    <input type="text" name="zip" placeholder="Votre code postal..." >

                    <label>Ville</label>
                    <input type="text" name="city" placeholder="Votre ville..." >


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

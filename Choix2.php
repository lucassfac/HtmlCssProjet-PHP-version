<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selection 2</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="scripts/config.js" defer></script>
        <script src="scripts/script_methode1.js" defer></script>
    </head>
    <body class="no-bg">
        <header>
            <div class="barre_select">
                <img src = "images/logo_SYC.png" alt = "logo site web." title = "logo SYC" id="logo">
                <!-- faire un button avec des infos en plus (trois petites barres)-->
                <div class="menu">
                    <span class="material-icons">menu</span>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class = "form-container">
                    <div class = "wrapper">
                        <form class = "methode1" method="post">
                            <label for="car-select">Taper votre plaque d'immatriculation : </label>
                            <input type="text" id="car-input" placeholder="AA-123-BB" required/>
                            <button type="submit" class = "envoyer">Valider</button>
                        </form>
                        <div class = "separateur">
                            ou
                        </div>
                        <form class = "methode2" method="post">
                            <label for="car-select">Choisissez une voiture :</label>
                            <select id="car-select">
                                <option value="car1">Voiture 1</option>
                                <option value="car2">Voiture 2</option>
                                <option value="car3">Voiture 3</option>
                            </select>
                            <button type="submit" class = "envoyer">Valider</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class = "page_footer">
                <span class="material-icons">copyright</span> Lucas B. 2023
            </div>
        </footer>      
    </body>
</html>

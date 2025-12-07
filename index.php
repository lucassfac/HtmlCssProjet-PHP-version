<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Select Your Car</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="barre">
            <img src="images/logo_SYC.png" alt="Logo SYC" id="logo">
            <div class="menu">
                <span class="material-icons">menu</span>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="defzone hero-content">
                <h1>Trouvez la voiture <span class="ma-classe2-color">qui vous correspond</span></h1>
                <p>Ne laissez plus le hasard décider. Grâce à notre algorithme, analysez vos besoins et découvrez le véhicule idéal alliant fiabilité et budget maîtrisé.</p>
            </div>
        </section>

        <section class="cards-section">
            
            <div class="card action-card">
                <div class="icon-circle">
                    <span class="material-icons">manage_search</span>
                </div>
                <h3>Je cherche une voiture</h3>
                <p>Répondez à quelques questions pour trouver le modèle parfait adapté à votre profil.</p>
                <a href="Choix1.php">
                    <button class="btn">Commencer le quiz</button>
                </a>
            </div>

            <div class="card action-card">
                <div class="icon-circle">
                    <span class="material-icons">verified_user</span>
                </div>
                <h3>Check Fiabilité</h3>
                <p>Vous avez déjà une idée ? Vérifiez si la marque est fiable et économique à l'entretien.</p>
                <a href="Choix2.php">
                    <button class="btn secondary-btn">Vérifier une marque</button>
                </a>
            </div>

        </section>
    </main>

    <footer>
        <div class="page_footer">
            <span class="material-icons">copyright</span> Lucas B. 2023
        </div>
    </footer>
</body>
</html>
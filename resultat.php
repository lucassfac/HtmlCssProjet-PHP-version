<?php
session_start();

// SÉCURITÉ : Si l'utilisateur essaie d'accéder à cette page sans avoir fait de recherche
if (!isset($_SESSION['resultat_fiabilite'])) {
    // Redirection vers la page de choix
    header("Location: Choix2.php");
    exit();
}

// Récupération des données stockées par traitement.php
$data = $_SESSION['resultat_fiabilite'];
$note = $data['note'];

// Fonction simple pour générer les étoiles en PHP cette fois
function afficherEtoiles($note) {
    $html = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $note) {
            $html .= '<span class="material-icons">star</span>';
        } else {
            $html .= '<span class="material-icons">star_border</span>';
        }
    }
    return $html;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat Fiabilité</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="no-bg">
    <header>
        <div class="barre">
            <a href="index.php">
                <img src="images/logo_SYC.png" alt="Logo SYC" id="logo">
            </a>
            <div class="menu">
                <span class="material-icons">menu</span>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="card" style="max-width: 600px; padding: 40px;">
                
                <div class="icon-circle" style="margin: 0 auto 20px auto; width: 100px; height: 100px;">
                    <span class="material-icons" style="font-size: 50px;">verified</span>
                </div>

                <h1 style="font-size: 1.8rem; margin-bottom: 5px;">
                    <?php echo ucfirst($data['marque']) . ' ' . ucfirst($data['motorisation']); ?>
                </h1>
                <h3 style="color: #666; font-weight: 400; margin-bottom: 30px;">
                    Modèle année <?php echo $data['annee']; ?>
                </h3>

                <div style="color: var(--primary); font-size: 3rem; margin-bottom: 20px;">
                    <?php echo afficherEtoiles($note); ?>
                </div>
                
                <div style="background: rgba(255, 165, 0, 0.1); border-left: 4px solid orange; padding: 20px; text-align: left; border-radius: 8px; margin-bottom: 30px;">
                    <p style="margin: 0; color: #333; font-weight: 500;">
                        <?php echo $data['description']; ?>
                    </p>
                </div>

                <a href="Choix2.php">
                    <button class="secondary-btn" style="padding: 10px 25px; border-radius: 50px;">
                        <span class="material-icons" style="font-size: 16px; vertical-align: middle;">arrow_back</span>
                        Faire une autre recherche
                    </button>
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
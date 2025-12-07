<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vérification Fiabilité - Select Your Car</title>
        
        <link rel="stylesheet" href="style.css"/>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        
        <script src="scripts/config.js" defer></script>
        <script src="scripts/carSelectLogo.js" defer></script> 
    </head>
    
    <body class="no-bg">
        <header>
            <div class="barre">
                <a href="index.php" title="Retour à l'accueil">
                    <img src="images/logo_SYC.png" alt="Logo SYC" id="logo">
                </a>
                <div class="menu">
                    <span class="material-icons">menu</span>
                </div>
            </div>
        </header>

        <main>
            <section>
                <div class="form-container">
                    <h1>Vérifiez la fiabilité</h1>
                    <p>Sélectionnez un modèle et sa motorisation pour accéder aux fiches techniques et aux retours d'expérience.</p>
                    
                    <form class="methode2" method="post" action="traitement.php">
                        
                        <div class="form-group">
                            <label for="marque">
                                <span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">directions_car</span> 
                                Marque du véhicule :
                            </label>
                            <select id="marque" name="marque">
                                <option value="" disabled selected>-- Choisissez une marque --</option>
                                <option value="renault">Renault</option>
                                <option value="peugeot">Peugeot</option>
                                <option value="vw">Volkswagen</option>
                                <option value="citroen">Citroën</option>
                                <option value="bmw">BMW</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="annee">
                                <span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">today</span> 
                                Année de mise en circulation :
                            </label>
                            <input 
                                type="number" 
                                id="annee" 
                                name="annee" 
                                min="1990" 
                                max="2025" 
                                placeholder="Ex: 2018"
                                style="width: 100%; padding: 12px 15px; border-radius: 12px; border: 2px solid #e0e0e0; background: rgba(255,255,255,0.9); font-family: 'Poppins';"
                            >
                        </div>

                        <div class="form-group">
                            <label for="motorisation">
                                <span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">engineering</span> 
                                Motorisation / Modèle :
                            </label>
                            <select id="motorisation" name="motorisation">
                                <option value="" disabled selected>-- Choisissez le moteur --</option>
                                <option value="essence">Essence (Atmosphérique/Turbo)</option>
                                <option value="diesel">Diesel (HDi, dCi, TDI...)</option>
                                <option value="hybride">Hybride / Hybride Rechargeable</option>
                                <option value="electrique">Électrique</option>
                            </select>
                        </div>

                        <button type="submit" class="envoyer">
                            Consulter la fiche <span class="material-icons" style="font-size:18px; vertical-align:middle; margin-left:5px;">arrow_forward</span>
                        </button>
                    </form>
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
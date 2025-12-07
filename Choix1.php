<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz de Sélection - Select Your Car</title>
        
        <link rel="stylesheet" href="style.css"/>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        
        <script src="scripts/scriptChoix1.js" defer></script>
    </head>
    
    <body>
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
                    <h1>Trouvez votre voiture idéale</h1>
                    <p>Répondez à ces 7 questions pour que notre algorithme identifie le véhicule parfait pour vous.</p>
                    
                    <form method="get" id="form-choix1" action="">
                        <div class="form-group">
                            <label for="profil"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">person</span> Quel est votre profil ?</label>
                            <select id="profil" name="profil">
                                <option value="jeune">Jeune conducteur</option>
                                <option value="familial">Familial (Enfants, bagages)</option>
                                <option value="sportif">Conducteur sportif</option>
                                <option value="eco">Conducteur éco-responsable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="budget"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">savings</span> Votre budget achat ?</label>
                            <select id="budget" name="budget">
                                <option value="moins_10000">Moins de 10 000 €</option>
                                <option value="entre_10000_20000">Entre 10 000 € et 20 000 €</option>
                                <option value="plus_20000">Plus de 20 000 €</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="usage"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">commute</span> Usage principal ?</label>
                            <select id="usage" name="usage">
                                <option value="trajets_courts">Ville / Domicile-Travail</option>
                                <option value="longs_trajets">Autoroute / Longs trajets</option>
                                <option value="mixte">Mixte (Ville & Route)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kilometrage"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">add_road</span> Kilométrage annuel ?</label>
                            <select id="kilometrage" name="kilometrage">
                                <option value="moins_10000">Moins de 10 000 km</option>
                                <option value="10000_20000">De 10 000 à 20 000 km</option>
                                <option value="plus_20000">Plus de 20 000 km</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">directions_car</span> Type de carrosserie ?</label>
                            <select id="type" name="type">
                                <option value="compacte">Compacte / Citadine</option>
                                <option value="berline">Berline</option>
                                <option value="suv">SUV / 4x4</option>
                                <option value="cabriolet">Cabriolet</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="carburant"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">local_gas_station</span> Motorisation préférée ?</label>
                            <select id="carburant" name="carburant">
                                <option value="essence">Essence</option>
                                <option value="diesel">Diesel</option>
                                <option value="electrique">Électrique</option>
                                <option value="hybride">Hybride</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fiabilite"><span class="material-icons" style="font-size:16px; vertical-align:text-bottom;">build</span> Votre priorité ?</label>
                            <select id="fiabilite" name="fiabilite">
                                <option value="equilibre">Compromis Fiabilité/Prix</option>
                                <option value="fiabilite_max">Fiabilité absolue (Budget + élevé)</option>
                                <option value="entretien_faible">Entretien le moins cher possible</option>
                            </select>
                        </div>

                        <button type="submit" class="envoyer">
                            Lancer la recherche <span class="material-icons" style="font-size:18px; vertical-align:middle; margin-left:5px;">search</span>
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
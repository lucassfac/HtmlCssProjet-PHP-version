document.addEventListener("DOMContentLoaded", () => {
    // 1. Configuration (On récupère le formulaire ici)
    // J'ai ajouté un ID "form-choix1" dans ton HTML Choix1 pour être précis, au lieu de querySelector("form")
    const form = document.querySelector("#form-choix1") || document.querySelector("form"); 

    // Sécurité : Si on n'est pas sur la page Choix 1, on arrête le script ici
    if (!form) return; 

    const profil = document.getElementById("profil");
    const budget = document.getElementById("budget");
    const usage = document.getElementById("usage");
    const kilometrage = document.getElementById("kilometrage");
    const type = document.getElementById("type");
    const carburant = document.getElementById("carburant");
    const fiabilite = document.getElementById("fiabilite");

    // 2. Envoi des éléments
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const formData = {
            profil: profil.value,
            budget: budget.value,
            usage: usage.value,
            kilometrage: kilometrage.value,
            type: type.value,
            carburant: carburant.value,
            fiabilite: fiabilite.value
        };

        fetch("traitementChoix1.php", { // Assure-toi que ce fichier PHP existe bien
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            // Tu pourras rediriger ici aussi si tu veux plus tard
            console.log("Succès:", data);
            alert("Données envoyées ! Réponse : " + JSON.stringify(data, null, 2));
        })
        .catch(error => {
            console.error("Erreur:", error);
        });
    });
});


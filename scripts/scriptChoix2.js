document.addEventListener("DOMContentLoaded", () => {
    // Configuration spécifique au Choix 2
    const formFiabilite = document.getElementById("form-fiabilite");

    // Sécurité : Si le formulaire n'existe pas sur cette page, on arrête.
    if (formFiabilite) {
        formFiabilite.addEventListener("submit", (event) => {
            event.preventDefault();

            const formData = new FormData(formFiabilite);
            const data = Object.fromEntries(formData.entries());

            fetch("traitement.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    window.location.href = "resultat.php";
                } else {
                    alert("Erreur : " + (result.message || "Inconnue"));
                }
            })
            .catch(error => {
                console.error("Erreur:", error);
            });
        });
    }
});
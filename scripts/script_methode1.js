// Fonction de validation
function plaqueValide(entree) {
    entree = entree.trim().toUpperCase();
    const valid1 = /^[A-Z]{2}-\d{3}-[A-Z]{2}$/; // format FR AA-123-AA
    const valid2 = /^[A-Z]{2}\d{3}[A-Z]{2}$/;   // format sans tirets
    return valid1.test(entree) || valid2.test(entree);
}

// Vérif en direct pendant la saisie
input1.addEventListener("input", () => {
    input1.setCustomValidity("");
    if (input1.value.trim() !== "" && !plaqueValide(input1.value.trim())) {
        input1.setCustomValidity("Format de plaque invalide !");
    }
});

function bouttonValider () {
    const confirmBox = document.getElementById("confirmation");
    const confirmText = document.getElementById("confirmation-text");
    confirmText.textContent = "Plaque validée : " + data.plaque;

    confirmBox.classList.add("show");  // rend visible
    confirmBox.classList.remove("hidden");
}

function bouttonErreur () {
    // si erreur tu peux aussi afficher en rouge
    const confirmBox = document.getElementById("confirmation");
    const confirmText = document.getElementById("confirmation-text");

    confirmText.textContent = "Erreur : " + (data.message || "inconnue");
    confirmBox.querySelector(".circle").style.background = "#E53935"; // rouge
    confirmBox.classList.add("show");
    confirmBox.classList.remove("hidden");
}

// Gestion de la soumission
methode1.addEventListener("submit", (event) => {
    event.preventDefault();

    const plaque = input1.value.trim().toUpperCase();

    if (plaque === "") {
        input1.setCustomValidity("Remplir la plaque d'immatriculation !");
        input1.reportValidity();
        return;
    }
    if (!plaqueValide(plaque)) {
        input1.setCustomValidity("Format de plaque invalide !");
        input1.reportValidity();
        return;
    }

    const data = { plaque: plaque };

    fetch("traitement.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    })
    .then(res => res.text())
    .then(msg => {
        alert(msg); // tu peux remplacer par afficher dans un <div>
    })
    .catch(err => console.error("Erreur:", err));
});

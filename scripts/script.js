//envoi des elements du formulaire
form.addEventListener("submit", (event) => {
    event.preventDefault()

    const formData = {
        profil: profil.value,
        budget: budget.value,
        usage: usage.value,
        kilometrage: kilometrage.value,
        type: type.value,
        carburant: carburant.value,
        fiabilite: fiabilite.value
    }

    fetch("traitementChoix1.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        alert(JSON.stringify(data, null, 2)) // null, 2 = indentation pour lisibilité
    })
    .catch(error => {
        console.error("Erreur:", error)
    })
})


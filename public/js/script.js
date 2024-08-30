function checkAutre(select) {
    // Récupère toutes les divs liées au formulaire spécifique
    const relatedDivs = select.parentElement.parentElement.querySelectorAll("div[id^='Autre']");

    // Masque uniquement les divs liées à l'élément select
    relatedDivs.forEach(div => {
        div.style.display = "none";
    });

    // Affiche la bonne div en fonction du select et de la valeur choisie
    if (select.id === "activite" && select.value === "Autre") {
        document.getElementById("autreActiviteDiv").style.display = "block";
    } else if (select.id === "profil" && select.value === "AutreProfil") {
        document.getElementById("autreProfilDiv").style.display = "block";
    } else if (select.id === "education" && select.value === "AutreProfilEducation") {
        document.getElementById("AutreProfilEducationDiv").style.display = "block";
    } else if (select.id === "sante" && select.value === "AutreProfilSante") {
        document.getElementById("AutreProfilSanteDiv").style.display = "block";
    } else if (select.id === "motif" && select.value === "AutreMotif") {
        document.getElementById("AutreMotifDiv").style.display = "block";
    }
}

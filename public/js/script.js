function checkAutre(select) {
    // Détermine l'ID de la div associée en fonction de l'ID du select
    var divId;
    
    if (select.id === "activite" && select.value === "Autre") {
        divId = "autreActiviteDiv";
    } else if (select.id === "profil" && select.value === "AutreProfil") {
        divId = "autreProfilDiv";
    }
    
    // Masque les divs par défaut
    document.getElementById("autreActiviteDiv").style.display = "none";
    document.getElementById("autreProfilDiv").style.display = "none";
    
    // Affiche la div correspondante
    if (divId) {
        document.getElementById(divId).style.display = "block";
    }
}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'évaluation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <h1>Questionnaire de Satisfaction des utilisateurs</h1>
    <h2>1. Informations générales</h2>
    <h5>1.1 Age</h5 >
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Moins de 18 ans</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">18-34 ans</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">35-44 ans</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">45-64 ans</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">65 ans et plus</label>
        </div>
    </form>
    <h5>1.2 Sexe</h5 >
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Homme</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Femme</label>
        </div>
    </form>
    <h5>1.3 Secteur</h5 >
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Public</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Privé</label>
        </div>
    </form>
    <h5>1.4 Secteur d'activités</h5>
    <form action="">
    <!-- Liste déroulante Secteur d'activités-->
        <div>
            <select id="activite" name="activite" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Sélectionnez une activité</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Industrie">Industrie</option>
                <option value="Construction">Construction</option>
                <option value="Commerce">Commerce</option>
                <option value="Transport">Transport</option>
                <option value="Information et Communication">Information et Communication</option>
                <option value="Finance et Assurance">Finance et Assurance</option>
                <option value="Immobilier">Immobilier</option>
                <option value="Services professionnels">Services professionnels</option>
                <option value="Administration publique">Administration publique</option>
                <option value="Education">Éducation</option>
                <option value="Santé">Santé</option>
                <option value="Arts et Loisirs">Arts et Loisirs</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <!-- Zone de texte cachée par défaut -->
        <div id="autreActiviteDiv" style="display: none;">
            <label for="autreActivite">Veuillez préciser votre secteur d'activité:</label>
            <input type="text" id="autreActivite" name="autreActivite">
        </div>
    </form>

    <h6>1.4.1 Profil dans l'éducation</h6>
    <form action="">
    <!-- Liste déroulante Profil dans l'éducation-->
        <div>
            <select id="education" name="education" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Sélectionnez un profil</option>
                <option value="Etudiant">Etudiant</option>
                <option value="Chercheur">Chercheur</option>
                <option value="Professeur">Professeur</option>
                <option value="AutreProfilEducation">Autre</option>
            </select>
        </div>

        <!-- Zone de texte cachée par défaut -->
        <div id="AutreProfilEducationDiv" style="display: none;">
            <label for="AutreProfilEducation">Veuillez préciser votre secteur d'activité:</label>
            <input type="text" id="AutreProfilEducation" name="AutreProfilEducation">
        </div>
    </form>
    <h6>1.4.1 Profils dans le secteur médical</h6>
    <form action="">
    <!-- Liste déroulante Profil dans la santé-->
        <div>
            <select id="sante" name="sante" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Sélectionnez un profil</option>
                <option value="Responsable">Responsable</option>
                <option value="Docteur">Docteur</option>
                <option value="Sagefemme">Sagefemme</option>
                <option value="Aide">Aide soignante</option>
                <option value="AutreProfilSante">Autre</option>
            </select>
        </div>

        <!-- Zone de texte cachée par défaut -->
        <div id="AutreProfilSanteDiv" style="display: none;">
            <label for="AutreProfilSante">Veuillez préciser votre secteur d'activité:</label>
            <input type="text" id="AutreProfilSante" name="AutreProfilSante">
        </div>
    </form>

    <h5>1.5 Catégories de profils professionnels</h5>
    <form action="">
        <!-- Liste déroulante pour les profils professionnels -->
        <div>
            <select id="profil" name="profil" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Sélectionnez un profil</option>
                <option value="Etudiant">Étudiant</option>
                <option value="Decideur">Décideur</option>
                <option value="Entrepreneur">Entrepreneur</option>
                <option value="AutreProfil">Autre</option>
            </select>
        </div>

        <!-- Zone de texte pour autre profil professionnel -->
        <div id="autreProfilDiv" style="display: none;">
            <label for="autreProfil">Veuillez préciser votre profil professionnel:</label>
            <input type="text" id="autreProfil" name="autreProfil">
        </div>
    </form>
    <h2>2. Utilisation du site</h2>
    <h5>2.1 Fréquence d'utilisation</h5>
    <form action="">
        <!-- Liste déroulante pour les Fréquence d'utilisation -->
        <div>
            <select id="frequence" name="frequence" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Choisissez une fréquence d'utilisation</option>
                <option value="Qutidienne">Qutidienne</option>
                <option value="Hebdomadaire">Hebdomadaire</option>
                <option value="Mensuelle">Mensuelle</option>
                <option value="MoinsUneFois">Moins d'une fois par mois</option>
            </select>
        </div>
    </form>
    <h5>2.2 Principal motif d'utilisation</h5>
    <form action="">
        <!-- Liste déroulante pour le motif d'utilisation -->
        <div>
            <select id="motif" name="motif" onchange="checkAutre(this)">
                <option value="" disabled selected hidden>Choisissez le principal motif d'utilisation</option>
                <option value="Recherche">Recherche académique</option>
                <option value="Personnel">Travail personnel</option>
                <option value="Curiosite">Curiosité personnelle</option>
                <option value="AutreMotif">Autre</option>
            </select>
        </div>
    </form>
    <h2>3. Facilité d'utilisation</h2>
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Très facile</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Facile</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Moyenne</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Difficile</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Très defficile</label>
        </div>
    </form>
    <h2>4. Actualisation des informations</h2>
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Toujours à jour</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Souvent à jour</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Parfois à jour</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Rarement à jour</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Jamais à jour</label>
        </div>
    </form>
    <h2>6. Satisfaction générales</h2>
    <form action="" method="" id="">
        @csrf
        <!-- Case à cocher -->
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Très satisfait</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Satisfait</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Neutre</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Insatisfait</label>
        </div>
        <div class ="checkbox-container">
            <input type="checkbox" id="agree" name="agree" value="1">
            <label for="agree" style="margin-left: 8px;">Très insatisfait</label>
        </div>
    </form>
    <h2>7. Suggestions pour amélioration</h2>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

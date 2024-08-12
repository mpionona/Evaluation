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
    <!-- Liste déroulante -->
    <div>
        <select id="activite" name="activite" onchange="checkAutre(this)">
            <option value=""><em>Sélectionnez une activité</em></option>
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

<h5>1.5 Catégories de profils professionnels</h5>
<form action="">
    <!-- Liste déroulante pour les profils professionnels -->
    <div>
        <select id="profil" name="profil" onchange="checkAutre(this)">
            <option value=""><em>Sélectionnez un profil</em></option>
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
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

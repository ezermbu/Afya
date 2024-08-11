// Exemple de données du patient
const patientData = {
    nom: "Jean Dupont",
    dateNaissance: "01/01/1980",
    groupeSanguin: "A+",
    sexe: "Homme",
    taille: "180 cm",
    poids: "75 kg",
    adresse: "123 Rue de la Santé, Paris",
    telephone: "0123456789",
    antecedentsFamiliaux: "Pas de maladies héréditaires",
    fauteuilRoulant: "Non",
    allergies: "Aucune",
    medicamentsActuels: "Aucun",
    maladieChronique: "Hypertension",
    diagnostiquesPoses: "Hypertension",
    planTraitement: "Suivi régulier",
    recommandations: "Réduire le sel",
    prescriptions: "Bêta-bloquants",
    chronologieVisites: "Visite du 01/01/2024",
    resultatsTests: "Analyse sanguine normale",
    evaluationsSuivi: "Bon contrôle de la pression artérielle"
};

// Fonction pour remplir les données dans la fiche médicale
function populateData() {
    document.getElementById('nom').textContent = `Nom : ${patientData.nom}`;
    document.getElementById('date-naissance').textContent = `Date de naissance : ${patientData.dateNaissance}`;
    document.getElementById('groupe-sanguin').textContent = `Groupe sanguin : ${patientData.groupeSanguin}`;
    document.getElementById('sexe').textContent = `Sexe : ${patientData.sexe}`;
    document.getElementById('taille').textContent = `Taille : ${patientData.taille}`;
    document.getElementById('poids').textContent = `Poids : ${patientData.poids}`;
    document.getElementById('adresse').textContent = `Adresse : ${patientData.adresse}`;
    document.getElementById('telephone').textContent = `Téléphone : ${patientData.telephone}`;
    document.getElementById('antecedents-familiaux').textContent = `Antécédents familiaux : ${patientData.antecedentsFamiliaux}`;
    document.getElementById('fauteuil-roulant').textContent = `Fauteuil roulant : ${patientData.fauteuilRoulant}`;
    document.getElementById('allergies').textContent = `Allergies : ${patientData.allergies}`;
    document.getElementById('medicaments-actuels').textContent = `Médicaments actuels : ${patientData.medicamentsActuels}`;
    document.getElementById('maladie-chronique').textContent = `Maladie chronique : ${patientData.maladieChronique}`;
    document.getElementById('diagnostiques-poses').textContent = `Diagnostiques posés : ${patientData.diagnostiquesPoses}`;
    document.getElementById('plan-traitement').textContent = `Plan de traitement : ${patientData.planTraitement}`;
    document.getElementById('recommandations').textContent = `Recommandations : ${patientData.recommandations}`;
    document.getElementById('prescriptions').textContent = `Prescriptions : ${patientData.prescriptions}`;
    document.getElementById('chronologie-visites').textContent = `Chronologie des visites : ${patientData.chronologieVisites}`;
    document.getElementById('resultats-tests').textContent = `Résultats des tests : ${patientData.resultatsTests}`;
    document.getElementById('evaluations-suivi').textContent = `Évaluations et suivi : ${patientData.evaluationsSuivi}`;
}

// Appel de la fonction pour afficher les données
populateData();

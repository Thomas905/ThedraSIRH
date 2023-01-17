<?php
$host = "localhost";
$dbname = "thedrasirh";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$nom_entreprise = $_POST['nom_entreprise'];
$prenom_prospect = $_POST['prenom_prospect'];
$nom_prospect = $_POST['nom_prospect'];
$email_prospect = $_POST['email_prospect'];
$telephone_prospect = $_POST['telephone_prospect'];
$fonction_prospect = $_POST['fonction_prospect'];
$interet = implode(',', $_POST['interet']);
$commentaire = $_POST['commentaire'];

if(empty($nom_entreprise) || empty($prenom_prospect) || empty($nom_prospect) || empty($email_prospect) || empty($telephone_prospect) || empty($fonction_prospect) || empty($interet)){
    echo "Veuillez remplir tous les champs obligatoires";
    exit;
}

$sql = "INSERT INTO prospects (nom_entreprise, prenom_prospect, nom_prospect, email_prospect, telephone_prospect, fonction_prospect, interet, commentaire) VALUES (:nom_entreprise, :prenom_prospect, :nom_prospect, :email_prospect, :telephone_prospect, :fonction_prospect, :interet, :commentaire)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':nom_entreprise', $nom_entreprise);
$stmt->bindParam(':prenom_prospect', $prenom_prospect);
$stmt->bindParam(':nom_prospect', $nom_prospect);
$stmt->bindParam(':email_prospect', $email_prospect);
$stmt->bindParam(':telephone_prospect', $telephone_prospect);
$stmt->bindParam(':fonction_prospect', $fonction_prospect);
$stmt->bindParam(':interet', $interet);
$stmt->bindParam(':commentaire', $commentaire);

$stmt->execute();

if($stmt->rowCount() == 1) {
    session_start();
    $_SESSION['message'] = "Données enregistrées avec succès.";
    header("Location: index.php");
} else {
    session_start();
    $_SESSION['message'] = "Erreur lors de l'enregistrement des données.";
    header("Location: index.php");
}
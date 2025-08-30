<?php
// traitement1.php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupère le JSON brut
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    // Exemple pour les donnees
    $profil = isset($data['profil']) ? $data['profil'] : '';
    $budget = isset($data['budget']) ? $data['budget'] : '';
    $usage = isset($data['usage']) ? $data['usage'] : '';
    $kilometrage = isset($data['kilometrage']) ? $data['kilometrage'] : '';
    $type = isset($data['type']) ? $data['type'] : '';
    $carburant = isset($data['carburant']) ? $data['carburant'] : '';
    $fiabilite = isset($data['fiabilite']) ? $data['fiabilite'] : '';

    // Traitement...
    // Par exemple, tu peux renvoyer une réponse JSON :
    echo json_encode(['success' => true, 'profil' => $profil, 'budget' => $budget, 'usage' => $usage, 'kilometrage' => $kilometrage, 'type' => $type, 'carburant' => $carburant, 'fiabilite' => $fiabilite]);
    exit();
}
?>
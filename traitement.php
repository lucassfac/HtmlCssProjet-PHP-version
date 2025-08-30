<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupère le JSON brut
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    // Exemple pour la plaque
    $plaque = isset($data['plaque']) ? $data['plaque'] : '';

    // Traitement...
    // Par exemple, tu peux renvoyer une réponse JSON :
    echo json_encode(['success' => true, 'plaque' => $plaque]);
    exit();
}
?>
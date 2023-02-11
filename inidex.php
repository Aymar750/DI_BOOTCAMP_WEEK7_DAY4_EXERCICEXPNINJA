<?php

// Initialiser cURL
$ch = curl_init();

// Définir l'URL à récupérer
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/todos/1");

// Retourner le transfert sous forme de chaîne de caractères au lieu de l'afficher directement
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Exécuter la requête cURL
$json_data = curl_exec($ch);

// Fermer la session cURL
curl_close($ch);

// Décoder les données JSON
$data = json_decode($json_data, true);

// Accéder aux données en tant que tableau
print_r($data);

?>

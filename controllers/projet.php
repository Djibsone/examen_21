<?php
require_once('../models/connexion.php');

if (isset($_POST['soumettre'])) {
    if (!empty($_POST['code']) && !empty($_POST['nomprojet']) && !empty($_POST['datlance']) && !empty($_POST['duree']) && !empty($_POST['local'])) {
        $code = htmlspecialchars($_POST['code']);
        $nomprojet = htmlspecialchars($_POST['nomprojet']);
        $datlance = htmlspecialchars($_POST['datlance']);
        $duree = htmlspecialchars($_POST['duree']);
        $local = htmlspecialchars($_POST['local']);

        $check = getProjet($code);
        $result = $check->rowCount();
        
        if ($result) {
            $_SESSION['error'] = 'Le projet existe déjà !';
        } else {
            $stmt = addProjet($code, $nomprojet, $datlance, $duree, $local);    
            ($stmt) ? $_SESSION['success'] = 'Enregistrment effectué avec succès' : $_SESSION['error'] = 'Erreur d\'enregistrement';
        }
        
    } else {
        $_SESSION['error'] = 'Les champs à inserer sont obligatores';
    }
    
    // Fermer l'écriture de la session
    session_write_close();
    header('Location: ../');

}
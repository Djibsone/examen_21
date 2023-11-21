<?php
require_once('../models/connexion.php');

if (isset($_POST['modifier'])) {
    if (!empty($_POST['nomprojet']) && !empty($_POST['datlance']) && !empty($_POST['duree']) && !empty($_POST['local'])) {
        $code = $_SESSION['code'];
        $nomprojet = htmlspecialchars($_POST['nomprojet']);
        $datlance = htmlspecialchars($_POST['datlance']);
        $duree = htmlspecialchars($_POST['duree']);
        $local = htmlspecialchars($_POST['local']);

        $stmt = updateProjet($nomprojet, $datlance, $duree, $local, $code); 
        if ($stmt) {
            $_SESSION['success'] = 'Modification effectuée avec succès';
            header('Location: ../');
        } else {
            $_SESSION['error'] = 'Erreur de modification';
            header('Location: ../views/modifie.php');
        }
           
        ($stmt) ? $_SESSION['success'] = 'Modification effectuée avec succès' : $_SESSION['error'] = 'Erreur de modification';
        header('Location: ../');
        
    } else {
        $_SESSION['error'] = 'Les champs à modifier sont obligatores';
        header('Location: ../views/modifie.php');
    }
    
    // Fermer l'écriture de la session
    session_write_close();

}
<?php
require_once('../models/connexion.php');

if (isset($_POST['ok'])) {
    if (!empty($_POST['code'])) {
        $code = htmlspecialchars($_POST['code']);
        $_SESSION['code'] = $code;

        $check = getProjet($code);
        $result = $check->rowCount();
        
        if ($result) {
            $projets = rechercheProjets($code);
            foreach($projets as $projet);
        } else {
            $_SESSION['error'] = 'Le projet n\'existe pas !';
        }
       
    } else {
        $_SESSION['error'] = 'Indiquez le code du projet svp';
    } 
}
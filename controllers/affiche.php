<?php
require_once('./models/connexion.php');

    $projets = getAllProjets();
    // $stmt = $projets->fetch(PDO::FETCH_ASSOC);
    // var_dump($stmt);
    
    //compter le numbre candidats par filere
    $total_projets = countProjets();

    //Select localite
    $localites = getLocalite();
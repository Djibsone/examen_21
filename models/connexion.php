<?php
session_start();
//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=examen_20;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

//Récupérer tous les candidats
function getAllProjets(){
    $db = dbConnect();

    $req = $db->query('SELECT codprojet,nomprojet,datelance,duree,l.nomlocal FROM projet p LEFT JOIN localite l ON p.codlocal=l.codlocal ORDER BY rand()');
    return $req;
    // SELECT *, l.nomlocal FROM projet p INNER JOIN localite l ON p.codlocal=l.codlocal ORDER BY rand() LIMIT 0, 6
    //$req = $db->query('SELECT * FROM projet ORDER BY codprojet DESC');
    //$req->execute();
    return $req;
}


//Récupérer un candidat
function getProjet($code){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM projet WHERE codprojet = ?');
    $req->execute(array($code));
    return $req;
}

//Ajouter un candidat
function addProjet($code, $nomprojet, $datlance, $duree, $local){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO projet VALUES(?,?,?,?,?)');
    //$req = $db->prepare('INSERT INTO projet/*(codprojet,nomprojet,datelance,duree,codlocal)*/ VALUES(?,?,?,?,?)');

    if($req->execute(array($code, $nomprojet, $datlance, $duree, $local)))
        return true;
    else
        return false;
}

//rechercher les projets
function rechercheProjets($code) {
    $db = dbConnect();
    $req = $db->prepare('SELECT codprojet,nomprojet,datelance,duree,l.codlocal,nomlocal FROM projet p LEFT JOIN localite l ON p.codlocal=l.codlocal WHERE codprojet LIKE :code');
    $req->execute(array(':code' => '%' . $code . '%'));
    return $req;
}

//Compter le nombre de candidat
function countProjets() {
    $db = dbConnect();
    $stmt = $db->query('SELECT COUNT(*) AS total_projets FROM projet');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_projets'];
}

//Recuperer localites
function getLocalite(){
    $db = dbConnect();
    $req = $db->query('SELECT * FROM localite ORDER BY codlocal DESC');
    return $req;
}

//Modifier un info user
function updateProjet($nomprojet, $datlance, $duree, $local, $code){
    $db = dbConnect();

    $req = $db->prepare('UPDATE projet SET nomprojet = ?, datelance = ?, duree = ?, codlocal = ? WHERE codprojet = ?');

    if($req->execute(array($nomprojet, $datlance, $duree, $local, $code)))
        return true;
    else
        return false;
}


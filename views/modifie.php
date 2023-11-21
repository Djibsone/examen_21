<?php include '../controllers/recherche.php' ?>

<!-- header start -->
<?php include './header.php' ?>
<!-- header end -->

  <div class="containe">

    <div class="content">

        <div class="card">
            <h2>Réchercher un projet en fonction de son code</h2>
            <div class="form-group">
                <?php include './msg_error_success.php' ?> 
            </div>
            <a href="../">
                <button type="" class="goBack">
                    <i style="cursor: pointer;" class="fa fa-arrow-left fa-2x" title="Rétour"></i>
                </button>
            </a>
            <form action="" method="post">
            <div class="form-group">
                <label for="code">Code projet</label>
                <input type="text" name="code" placeholder="XXXXXX">
            </div>
                <div class="form-group row my-3">
                    <label class="col-sm-2 col-form-label col-form-label-lg">Envoyer</label>
                    <div class="col-sm-2">
                        <input type="submit" class="ok" name="ok" value="Réchercher">
                    </div>
                </div>
            </form>
            <h2>MODIFIER DES PROJETS</h2>
            
            <form action="../controllers/modifie.php" method="post">
                <div class="form-group">
                    <label for="">Code projet</label>
                    <input type="text" name="" placeholder="XXXXXX" value="<?= $projet['codprojet'] ?>" disabled>
                </div>
                
                <div class="form-group">
                    <label for="nomprojet">Nom du projet</label>
                    <input type="text" name="nomprojet" placeholder="XXXXXX" value="<?= $projet['nomprojet'] ?>">
                </div>
                
                <div class="form-group">
                    <label for="datlance">Date de lancement</label>
                    <input type="date" name="datlance" value="<?= $projet['datelance'] ?>">
                </div>
                
                <div class="form-group">
                    <label for="duree">Durée</label>
                    <input type="text" name="duree" placeholder="XXXXXX" value="<?= $projet['duree'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Localité</label>
                    <select name="local">
                        <option value="<?= ($projet['codlocal']) ? $projet['codlocal']  : null ?>"><?= ($projet['nomlocal']) ? $projet['nomlocal']  : 'Selectionnez localité' ?></option>
                        <?php
                        require_once('../models/connexion.php'); 
                        $db = dbConnect();
                        $req = $db->query('SELECT * FROM localite ORDER BY codlocal DESC');
                        $localites = $req;
                        foreach($localites as $localite): 
                        ?>
                        <option value="<?= $localite['codlocal'] ?>"><?= $localite['nomlocal'] ?></option>                        
                        <?php endforeach; ?> 
                    </select>
                </div>
            
                <div class="form-group">
                    <button type="submit" name="modifier">Modifier</button>
                    <button type="reset">Annuler</button>
                </div>
            </form>
        </div>
  </div>

<!-- footer start -->
<?php include './views/footer.php' ?>
<!-- footer end -->
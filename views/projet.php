<?php include './controllers/affiche.php' ?>

<div class="card">
  <h2>SAISIE DES PROJETS</h2>
  <div class="form-group">
    <?php include './views/msg_error_success.php' ?>
  </div>
  <form action="./controllers/projet.php" method="post">
    <div class="form-group">
      <label for="code">Code projet</label>
      <input type="text" name="code" placeholder="XXXXXX">
    </div>
    
    <div class="form-group">
      <label for="nomprojet">Nom du projet</label>
      <input type="text" name="nomprojet" placeholder="XXXXXX">
    </div>
    
    <div class="form-group">
      <label for="datlance">Date de lancement</label>
      <input type="date" name="datlance">
    </div>
    
    <div class="form-group">
      <label for="duree">Durée</label>
      <input type="text" name="duree" placeholder="XXXXXX">
    </div>

    <div class="form-group">
      <label for="">Localité</label>
      <select name="local">
        <option>Selectionnez localité</option>
        <?php foreach($localites as $localite): ?>
          <option value="<?= $localite['codlocal'] ?>"><?= $localite['nomlocal'] ?></option>
        <?php endforeach; ?> 
      </select>
    </div>
    
    <div class="form-group">
      <button type="submit" name="soumettre">Soumettre</button>
      <button type="reset">Annuler</button>
  </div>
  </form>

</div>
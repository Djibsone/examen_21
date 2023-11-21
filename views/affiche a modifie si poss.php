<!-- header start -->
<?php include './header.php' ?>
<!-- header end -->

<!-- <div class="containe">

    <div class="content">

        <div class="container-fluide">
            <div class="form-group">
                <div class="panel-body">
                    <h2>LISTE DES PROJETS (<span style="color: red"><?= ($total_projets) ? $total_projets : 0 ?></span>)</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-full-width">
                            <thead class="">
                                <tr>
                                    <th>CODE DU PROJET</th>
                                    <th>NOM DU PROJET</th>
                                    <th>DATE DE LANCEMENT</th>
                                    <th>DUREE</th>
                                    <th>LOCALITE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($projets as $projet): ?>

                                    <tr>
                                        <td><?= $projet['codprojet'] ?></td>
                                        <td><?= $projet['nomprojet'] ?></td>
                                        <td><?= $projet['datelance'] ?></td>
                                        <td><?= $projet['duree'] ?></td>
                                        <td><?= $projet['nomlocal'] ?></td>
                                        <td><a href="./views/modifie.php" class="edit_btn" title="Edit"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->


<!--  -->
<div class="containe">

    <div class="content">
<div class="container-fluid"> <!-- Utilisation de la classe container-fluid -->
    <div class="content">
        <div class="container-fluid">
            <div class="form-group">
                <div class="panel-body">
                    <h2>LISTE DES PROJETS (<span style="color: red"><?= ($total_projets) ? $total_projets : 0 ?></span>)</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-full-width w-100"> <!-- Utilisation des classes table-full-width et w-100 -->
                            <thead class="">
                                <tr>
                                    <th>CODE DU PROJET</th>
                                    <th>NOM DU PROJET</th>
                                    <th>DATE DE LANCEMENT</th>
                                    <th>DUREE</th>
                                    <th>LOCALITE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($projets as $projet): ?>
                                    <tr>
                                        <td><?= $projet['codprojet'] ?></td>
                                        <td><?= $projet['nomprojet'] ?></td>
                                        <td><?= $projet['datelance'] ?></td>
                                        <td><?= $projet['duree'] ?></td>
                                        <td><?= $projet['nomlocal'] ?></td>
                                        <td><a href="./views/modifie.php" class="edit_btn" title="Edit"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- footer start -->
<?php include './views/footer.php' ?>
<!-- footer end -->

<!-- footer start -->
<?php include './views/footer.php' ?>
<!-- footer end -->
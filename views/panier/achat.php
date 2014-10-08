<?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

        <div class="row">

            <?php include VIEWS_DIR . '_common/sidebar.php' ?>

            <div class="col-md-9">
                
                <h2 class="sub-header">Mon panier</h2>
                <?php if(!$produits) : ?>
                <div class="alert alert-warning" role="alert"><strong>Votre panier est vide!</strong> <a href="main.php">retour à l'accueil</a></div>
                <?php else : ?>
                <div class="well">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($produits as $p) : ?>
                          <tr>
                            <td><img height="100" width="100" src="<?php echo $p->getWebImage(); ?>"></td>
                            <td><a href="produit.php?idp=<?php echo $p->getId(); ?>"><?php echo $p->getTitre(); ?></a></td>
                            <td><?php echo $p->getShortDescription(); ?></td>
                            <td><?php echo $p->getPrix(); ?></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <?php endif; ?>

                </div>

               

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php include VIEWS_DIR . '_common/footer.php' ?>
<?php include VIEWS_DIR . '_common/header.php' ?>

    <div class="container">

        <div class="row">

            <?php include VIEWS_DIR . '_common/sidebar.php' ?>

            <div class="col-md-9">
                
                <div class="well">

                    <form method="post" class="form-signin" role="form" enctype="multipart/form-data">
                        <h2 class="form-signin-heading">Création d'un produit</h2>
                        <input type="text" class="form-control" placeholder="Titre" required="" autofocus="" name="titre">
                        <textarea class="form-control" placeholder="Contenu" required="" name="contenu"></textarea>
                        <input type="number" class="form-control" placeholder="Prix" required="" name="prix">
                        <input type="file" class="form-control" required="" name="image">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
                    </form>

                </div>

               

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php include VIEWS_DIR . '_common/footer.php' ?>
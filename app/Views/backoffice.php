<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des évènements</title>


    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
    <div class="container vh-150 d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="card card-default p-5 rounded-5">
                <form action="<?= site_url('create-evenement') ?>" method="post">
                    <label class="form-label">Titre:</label><br>
                    <input type="text" class="form-control" name="titre" required><br><br>

                    <label class="form-label">Description:</label><br>
                    <input type="text" class="form-control" name="description" required><br><br>

                    <label class="form-label">Date (nom):</label><br>
                    <input type="date" class="form-control" name="date" required><br><br>

                    <label class="form-label">Lieu:</label><br>
                    <input type="text" class="form-control" name="lieu" required><br><br>

                    <label class="form-label">Catégorie:</label><br>
                    <input type="text" class="form-control" name="categorie" required><br><br>

                    <label class="form-label">Image:</label><br>
                    <input type="file" class="form-control" name="image" accept="image/png, image/jpeg" /><br><br>

                    <label class="form-label">Nombre de Places:</label><br>
                    <input type="number" class="form-control" name="places" required><br><br>

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Détails <b>d'Evènements</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info add-new">
                                <i class="fa fa-plus"></i>
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table table-bordered">
                    <table>
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Catégories</th>
                                <th>Images</th>
                                <th>Nombres de places</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($evenements as $ev): ?>
                                <tr>
                                    <td><?= $ev['titre'] ?></td>
                                    <td><?= $ev['description'] ?></td>
                                    <td><?= $ev['date'] ?></td>
                                    <td><?= $ev['lieu'] ?></td>
                                    <td><?= $ev['categorie'] ?></td>
                                    <td><?= $ev['image'] ?></td>
                                    <td><?= $ev['places'] ?></td>
                                    <td>
                                        <a class="edit" data-toggle="tooltip" href="evenements/modifierEvenement/<?= $ev['id'] ?>">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="delete" data-toggle="tooltip" data-original-title="Delete" href="delete-evenement/<?= $ev['id'] ?>">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>
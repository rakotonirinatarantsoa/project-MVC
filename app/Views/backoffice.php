<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des évènements</title>
</head>
<body>
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
                        <?php foreach ($evenement as $ev): ?>
                            <tr>
                                <td><?= $ev['titre'] ?></td>
                                <td><?= $ev['description'] ?></td>
                                <td><?= $ev['date'] ?></td>
                                <td><?= $ev['lieu'] ?></td>
                                <td><?= $ev['categorie'] ?></td>
                                <td><?= $ev['image'] ?></td>
                                <td>
                                    <a class="add" data-toggle="tooltip" data-original-title="Add" href="">
                                        <i class="material-icons"></i>
                                    </a>
                                    <a class="edit" data-toggle="tooltip" data-original-title="Edit" href="">
                                        <i class="material-icons"></i>
                                    </a>
                                    <a class="delete" data-toggle="tooltip" data-original-title="Delete" href="">
                                        <i class="material-icons"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

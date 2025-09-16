<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des évènements</title>


    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
     <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
</head>

<style>
    th, td {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #3b3b3bff;
    }
</style>

<body>
      <?= $this->include('sections/headerAdmin') ?>
        <div class="table-responsive my-5">
            <div class="table-wrapper my-5">
                <div class="table-title my-5 mx-5">
                    <div class="titre" style="display: flex; justify-content: space-between; margin: 32px 0;">
                        <div class="mt-5">
                            <p style="font-size: 24px; font-weight: bold; color: #333333ff, font-family: 'Inter', sans-serif;">Détails des évènements :</p>
                            <!-- <h2>Détails <b>des évènements</b></h2> -->
                        </div>
                        <div class="mt-5">
                            <button type="button" class="btn btn-info add-new"  style="background: #00afa3; color: #fff">
                                <i class="fa fa-plus"></i>
                                <a href="#ajouter" style="text-decoration: none; color: #fff;">Ajouter</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table table-bordered w-75 mx-auto" style="margin: 24px 0 48px 0;">
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
                                <th>Vendus</th>
                                <th>Prix</th>
                                <th>Gain</th>
                                <th style="width: 115px;">Action</th>
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
                                    <td><?= $ev['vendus'] ?></td>
                                    <td><?= $ev['prix'] ?></td>
                                    <td><?= $ev['gain'] ?></td>
                                    <td>
                                        <div class="action-container" style="display: flex; justify-content: space-around;">
                                            <a class="edit" data-toggle="tooltip" href="evenements/modifierEvenement/<?= $ev['id'] ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="delete" data-toggle="tooltip" data-original-title="Delete" href="delete-evenement/<?= $ev['id'] ?>">
                                                <i class="fa fa-trash" style="color: rgba(241, 25, 25, 0.8);"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container vh-150 d-flex justify-content-center align-items-center" id="ajouter">
        <div >
            
            <div class="card card-default p-5 rounded-5 shadow">
                <p style="font-size: 24px; font-weight: bold; color: #333333ff, font-family: 'Inter', sans-serif;margin-top: 32px" id="ajouter">Ajout de nouveaux évènements :</p>
                <form action="<?= site_url('create-evenement') ?>" method="post">

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Titre:</label><br>
                            <input type="text" class="form-control" name="titre" required><br><br>
                        </div>
                        <div class="col">
                            <label class="form-label">Description:</label><br>
                            <input type="text" class="form-control" name="description" required><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Date:</label><br>
                            <input type="date" class="form-control" name="date" required><br><br>
                        </div>
                        <div class="col">
                            <label class="form-label">Lieu:</label><br>
                            <input type="text" class="form-control" name="lieu" required><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Catégorie:</label><br>
                            <input type="text" class="form-control" name="categorie" required><br><br>
                        </div>
                        <div class="col">
                            <label class="form-label">Image:</label><br>
                            <input type="file" class="form-control" name="image" accept="image/png, image/jpeg" /><br><br>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Nombre de Places:</label><br>
                            <input type="number" class="form-control" name="places" required><br><br>
                        </div>
                        <div class="col">
                            <label class="form-label">Prix:</label><br>
                            <input type="number" class="form-control" name="prix" required><br><br>
                        </div>
                    </div>
                    

                    

                    <button type="submit" class="btn" style="background: #00afa3; color: #fff">Enregistrer</button>
                </form>
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
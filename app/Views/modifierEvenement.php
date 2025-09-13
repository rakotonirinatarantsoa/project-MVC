<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Document</title>
</head>
<body>
    <div class="container vh-150 d-flex justify-content-center align-items-center">
        <div class="card border-primary p-3 w-55 rounded-5">
            <form action="/evenements/modifier/<?= $evenements['id'] ?>" method="post">
                <label for="" class="form-label">Titre</label>
                <input type="text" name="" id="" class="form-control" value="<?= $evenements['titre'] ?>">

                <label for="" class="form-label">Description</label>
                <input type="text" name="" id="" class="form-control" value="<?= $evenements['description'] ?>">

                <label for="" class="form-label">Date</label>
                <input type="date" name="" id=""class="form-control" value="<?= $evenements['date'] ?>">

                <label for="" class="form-label">Lieu</label>
                <input type="text" name="" id=""class="form-control" value="<?= $evenements['lieu'] ?>">

                <label for="" class="form-label">Catégorie</label>
                <input type="text" name="" id=""class="form-control" value="<?= $evenements['categorie'] ?>">

                <label for="" class="form-label">Image</label>
                <input type="file" name="" id=""class="form-control" accept="image/png, image/jpeg" value="<?= $evenements['image'] ?>">

                <label for="" class="form-label">Nombre de places</label>
                <input type="number" name="" id=""class="form-control" value="<?= $evenements['places'] ?>">
                <br>
                <button type="submit" class="btn btn primary">Enregistrer</button>
            </form>
        </div>
    </div>
</body>
</html>
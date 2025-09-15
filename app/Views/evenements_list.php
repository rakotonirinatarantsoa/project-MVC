<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher</title>

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
<body>
    <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <?php if(!empty($evenements)): ?>
                    <?php foreach ($evenements as $ev): ?>
                        <div class="col-xl-4" style="display: flex; align-items:center; justify-content: center;" data-aos="fade-up">
                            <div id="<?= $ev['id'] ?>" class="swiper-slide event-item d-flex flex-column justify-content-end w-500" style="background-image: url(assets/img/<?= $ev['image'] ?>); width: 350px; height: 300px; padding: 16px; margin: 20px;">
                                <h3 style="color: white; "><?= $ev['date'] ?></h3>
                                <div class="price align-self-start" style="color: white; font-size: 16px;"><?= $ev['titre'] ?></div>
                                <p class="description" style="color: white; font-size: 12px;">
                                    <?= $ev['description'] ?>
                                </p>
                                <p class="lieu" style="color: white;">
                                    <?= $ev['lieu'] ?>
                                </p>
                                <p class="categorie" style="color: white;">
                                    <?= $ev['categorie'] ?>
                                </p>
                                <a id="page-reserver" href="/reserver/<?= $ev['id'] ?>">Reserver</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="container vh-150 d-flex justify-content-center align-items-center">
                        <div class="alert alert-warning text-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill" style="font-size:5rem;"></i><br>
                            <p style="font-size: 16px;">Aucun résultat trouvé 🙁</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
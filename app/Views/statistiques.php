<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard Ventes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

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
<body class="hold-transition sidebar-mini">

 <?= $this->include('sections/headerAdmin') ?>
  <!-- Main content -->
  <div class="content my-5">
    <p class="my-5 text-center h4">📊 Statistiques des ventes</p>
    <div class="container-fluid">
      <div class="w-75 mx-auto">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Ventes</h3>
            </div>
          </div>
          <div class="card-body">

            <!-- Chart -->
            <div class="position-relative mb-4">
              <canvas id="sales-chart" height="500"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> Ventes
              </span>
              <span>
                <i class="fas fa-square text-success"></i> Produits vendus
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>
  <!-- Chart.js -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- SCRIPT DU GRAPH -->
<script>
  $(function () {
    var ctx = document.getElementById('sales-chart').getContext('2d');

    var salesChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin", "Juil", "Août", "Sep", "Oct", "Nov", "Déc"],
        datasets: [
          {
            
            label: "Ventes (Ariary)",
            data: <?= json_encode(array_values($gainsParMois))  ?>,
            backgroundColor: "rgba(56, 220, 253, 0.7)",
            borderColor: "rgba(54, 162, 235, 1)",
            tension: 0.1,
            borderWidth: 5,
            yAxisID: 'y-axis-1',
            
          },
          {
            type: 'line',
            label: "Produits vendus",
            data: <?= json_encode(array_values($vendusParMois))  ?>,
            borderColor: "rgba(68, 205, 104, 1)",
            backgroundColor: "rgba(46, 252, 14, 0.2)",
            tension: 0.3,
            borderWidth: 5,
            fill: false,
            yAxisID: 'y-axis-2'
          }
        ]
      },
      options: {
        responsive: true,

        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Statistiques des ventes et produits vendus par mois'
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        scales: {
          yAxes: [
            {
              type: 'linear',
              display: true,
              position: 'left',
              id: 'y-axis-1',
              scaleLabel: {
                display: true,
                labelString: 'Montant (Ariary)'
              }
            },
            {
              type: 'linear',
              display: true,
              position: 'right',
              id: 'y-axis-2',
              gridLines: {
                drawOnChartArea: false,
              },
              scaleLabel: {
                display: true,
                labelString: 'tickets vendus'
              }
            }
          ],
          xAxes: [{
            gridLines: {
              display: false
            }
          }]
        }
      }
    });
  });
</script>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<style>
  .box {
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    margin-bottom: 20px;
  }

  .box-success {
    border-color: #00a65a;
  }

  .box-header {
    background-color: #00a65a;
    color: #fff;
    padding: 10px;
    font-weight: bold;
  }

  .box-body {
    padding: 15px;
  }

  canvas {
    width: 100%;
    height: 400px;
    /* Adjust the height as needed */
  }

  .box {
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    margin-bottom: 20px;
  }

  .box-success {
    border-color: #00a65a;
  }

  .box-header {
    background-color: #00a65a;
    color: #fff;
    padding: 10px;
    font-weight: bold;
  }

  .box-body {
    padding: 15px;
  }

  canvas {
    width: 100%;
    height: 400px;
    /* Adjust the height as needed */
    background-color: transparent;
    /* Make the background transparent */
  }

  .box {
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    margin-bottom: 20px;
  }

  .box-success {
    border-color: #00a65a;
  }

  .box-header {
    background-color: #00a65a;
    color: #fff;
    padding: 10px;
    font-weight: bold;
  }

  .box-body {
    padding: 15px;
  }

  canvas {
    width: 100%;
    height: 400px;
    /* Adjust the height as needed */
  }

  /* Add the modern UI styles here */
  #canvas,
  #canvas_bulan {
    background-image: linear-gradient(to bottom, #f9f9f9, #fff);
    /* Adjust the gradient colors as needed */
  }
</style>

<section class="content">
  <div class="row">
    <div class="col-lg-6">
      <script src="<?php echo base_url('assets/plugins/chartjs/Chart.min.js') ?>"></script>
      <style>
        /* Add the modern UI styles here */
      </style>

      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Grafik Omset Bulanan Tahun <?php echo date("Y") ?></h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <canvas id="canvas" width="100%" height="100%"></canvas>
          <?php foreach ($stats_omset_tahunan as $laporan) {
            $json_jual_tahunan[] = $laporan->nama_bulan;
            $json2_jual_tahunan[] = $laporan->subtotal;
          } ?>
          <script type="text/javascript">
            new Chart(document.getElementById("canvas"), {
              type: 'bar',
              data: {
                labels: <?php echo json_encode($json_jual_tahunan); ?>,
                datasets: [{
                  label: "Omset (Rp)",
                  backgroundColor: ['#e6194b', '#3cb44b', '#ffe119', '#0082c8', '#f58231', '#911eb4', '#46f0f0', '#f032e6', '#d2f53c', '#fabebe', '#008080', '#aa6e28'],
                  data: <?php echo json_encode($json2_jual_tahunan); ?>
                }]
              },
              options: {
                legend: {
                  display: false
                },
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true,
                      callback: function(value, index, values) {
                        if (parseInt(value) >= 1000) {
                          return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else {
                          return value;
                        }
                      }
                    }
                  }]
                }
              }
            });
          </script>
        </div><!-- /.box-body -->
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script type="text/javascript">
        // Add the animation script here
      </script>

    </div>
    <div class="col-lg-6">
      <script src="<?php echo base_url('assets/plugins/chartjs/Chart.min.js') ?>"></script>
      <div class="box box-warning box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Grafik Omset Harian Bulan <?php echo date("M-Y") ?></h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <canvas id="canvas_bulan" width="100%" height="100%"></canvas>
          <?php foreach ($stats_omset_bulanan as $laporan_bulan) {
            $json_jual_bulan[] = $laporan_bulan->created_date;
            $json2_jual_bulan[] = $laporan_bulan->subtotal;
          } ?>
          <script type="text/javascript">
            var nama = <?php echo json_encode($json_jual_bulan); ?>;
            var total = <?php echo json_encode($json2_jual_bulan); ?>;
            new Chart(document.getElementById("canvas_bulan"), {
              type: 'line',
              data: {
                labels: nama,
                datasets: [{
                  data: total,
                  borderColor: "green",
                  fill: true
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    stacked: true,
                    ticks: {
                      beginAtZero: true,
                      callback: function(value, index, values) {
                        if (parseInt(value) >= 1000) {
                          return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else {
                          return value;
                        }
                      }
                    }
                  }]
                },
                legend: {
                  display: false
                },
                tooltips: {
                  callbacks: {
                    label: function(tooltipItem) {
                      return tooltipItem.yLabel;
                    }
                  }
                }
              }
            });

            // Animation for showing the chart
            anime({
              targets: '#canvas, #canvas_bulan', // Targets the two canvas elements
              opacity: [0, 1], // Animates the opacity from 0 to 1
              translateY: [20, 0], // Animates the translateY from 20px to 0px
              duration: 1000, // Duration of the animation in milliseconds
              easing: 'easeOutSine', // Easing function to use for the animation
              delay: anime.stagger(200), // Adds a delay between the animations for the two canvas elements
            });


            // Your existing animation script for showing the chart
            anime({
              targets: '#canvas, #canvas_bulan',
              opacity: [0, 1],
              translateY: [20, 0],
              duration: 1000,
              easing: 'easeOutSine',
              delay: anime.stagger(200),
            });

            // Add the sparkle effect script here
            function sparkleAnimation(target, colors, duration) {
              const sparkle = anime({
                targets: target,
                backgroundColor: colors,
                duration: duration,
                easing: 'linear',
                loop: true,
              });
              return sparkle;
            }

            // Start sparkle animation for the first chart
            sparkleAnimation('#canvas', ['#ffda6f', '#ffefc3', '#ffe391', '#ffebac', '#fff1bd', '#fff7d4'], 800);

            // Start sparkle animation for the second chart
            sparkleAnimation('#canvas_bulan', ['#b8ff9c', '#e5ffb7', '#d3ffa5', '#f1ffc4', '#eaffb9', '#f6ffd4'], 800);
          </script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </div><!-- /.box-body -->
      </div>
    </div>
  </div>
</section>
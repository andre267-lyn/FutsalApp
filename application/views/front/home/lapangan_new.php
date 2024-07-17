<style>
  /* CSS untuk menengahkan gambar */
  .image-container {
    display: flex;
    justify-content: center;
  }

  /* CSS untuk teks dengan efek warna gradient */
  .gradient-text {
    background-image: linear-gradient(45deg, #FCF481, #67E4EE);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    display: inline-block;
    font-size: 24px;
    /* Sesuaikan ukuran font sesuai kebutuhan Anda */
  }

  /* CSS untuk animasi modern pada thumbnail */
  .thumbnail {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
  }

  .thumbnail:hover {
    transform: scale(1.05);
    /* Perbesar ukuran thumbnail saat mouse diarahkan ke atasnya */
  }

  .thumbnail {
    position: relative;
    overflow: hidden;
  }

  .caption {
    opacity: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8);
    /* Warna latar belakang caption saat thumbnail dihover */
    transition: opacity 0.3s ease;
  }

  .thumbnail:hover .caption {
    opacity: 1;
    /* Caption muncul saat thumbnail dihover */
  }

  /* Definisikan animasi keyframes */
  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  body {
    background-color: #f2f2f2;
    font-family: 'Arial', sans-serif;
  }

  h3.light-text {
    color: #333;
    font-size: 28px;
    text-align: center;
    margin: 30px 0;
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  h3.light-text span {
    display: inline-block;
    padding: 5px 15px;
    background-color: #67E4EE;
    color: #fff;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  hr {
    border: none;
    /* Menghapus garis bawaan */
    height: 2px;
    /* Mengatur tinggi garis */
    background-color: rgba(0, 0, 0, 0.0);
    /* Mengatur warna transparan dengan nilai alpha 0.3 */
  }
</style>

<h3 align="center" class="light-text"><b><span>LAPANGAN KAMI</span></b></h3>

<div class="row" style="display: flex; justify-content: center;">
  <?php foreach ($lapangan_new as $lapangan) { ?>
    <div class="col-lg-4">
      <div class="thumbnail" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);">
        <?php
        if (empty($lapangan->foto)) {
          echo "<img class='card-img-top' src='" . base_url() . "assets/images/no_image_thumb.png'>";
        } else {
          echo "<img src='" . base_url() . "assets/images/lapangan/" . $lapangan->foto . "'> ";
        }
        ?>
        <div class="caption" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);">
          <p class="card-text" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);"><b><?php echo $lapangan->nama_lapangan ?></b></p>
          <hr>
          <a href="<?php echo base_url('cart/buy/') . $lapangan->id_lapangan ?>" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);">
            <button class="btn btn-sm btn-primary" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);"><i class="fas fa-hotel" color: #F2B21D;></i>&nbsp;<span class="text-warning">Booking Sekarang!</span></a>
          </a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
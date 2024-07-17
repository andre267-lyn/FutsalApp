<style>
  /* Style untuk kontainer modern-ui-contact */
  .modern-ui-contact {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  /* Style untuk nama kontak */
  .modern-ui-contact b {
    font-size: 20px;
    color: #333;
  }

  /* Style untuk nomor HP */
  .modern-ui-contact span {
    display: block;
    margin-top: 5px;
    font-size: 16px;
    color: #555;
  }

  /* Style untuk tombol WhatsApp */
  .modern-ui-contact .modern-ui-button {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background-color: #25d366;
    color: #fff;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .modern-ui-contact .modern-ui-button:hover {
    background-color: #128c7e;
  }

  /* Style untuk kontainer modern-ui-center */
  .modern-ui-center {
    display: flex;
    justify-content: center;
  }

  /* Style untuk gambar di dalam kontainer */
  .modern-ui-center img {
    max-width: 100%;
    height: auto;
  }

  /* Style untuk kontainer modern-ui-contact */
  .modern-ui-contact {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-image: linear-gradient(to right, #FFFFFF, #FFFFFF);
    background-size: 200% auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: background-position 0.3s ease;
  }

  /* Style untuk nama kontak */
  .modern-ui-contact b {
    font-size: 20px;
    color: #333;
  }

  /* Style untuk nomor HP */
  .modern-ui-contact span {
    display: block;
    margin-top: 5px;
    font-size: 16px;
    color: #555;
  }

  /* Style untuk tombol WhatsApp */
  .modern-ui-contact .modern-ui-button {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background-color: #25d366;
    color: #fff;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  /* Efek animasi ketika hover */
  .modern-ui-contact:hover {
    background-position: right center;
  }

  .modern-ui-contact:hover .modern-ui-button {
    background-color: #128c7e;
  }

  hr {
    border: none;
    /* Menghapus garis bawaan */
    height: 2px;
    /* Mengatur tinggi garis */
    background-color: rgba(0, 0, 0, 0.0);
    /* Mengatur warna transparan dengan tingkat transparansi 0.3 */
  }
</style>
<div class="bs-callout bs-callout-primary modern-ui-container" style="background-image: linear-gradient(to right, #FCF481, #67E4EE);" s>
  <h4><i class="fa fa-phone"></i> Hubungi Kami</h4>
</div>
<ul class="list-group modern-ui-container">
  <div class="modern-ui-center"><img src="<?php echo base_url('assets/images/call.png') ?>" width="200px"></div>
  <?php foreach ($kontak_sidebar as $kontak) { ?>
    <div class="modern-ui-contact">
      <b><?php echo $kontak->nama_kontak ?></b>
      <span>+<?php echo $kontak->nohp ?></span>
      <a href="https://api.whatsapp.com/send?phone=+<?php echo $kontak->nohp ?>&text=Hi%20Gan,%20Saya%20mau%20booking%20lapangan">
        <button class="btn btn-success modern-ui-button" type="submit" name="button">Chat via WhatsApp (klik disini)</button>
      </a>
    </div>
  <?php } ?>
</ul>

<hr>

<hr>

<hr>

<hr>

<hr>

<hr>

<hr>
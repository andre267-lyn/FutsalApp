<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern UI Design - Attractive</title>
  <!-- Add Bootstrap CSS link here (you can also use a CDN link) -->
<link rel="stylesheet" href="path/to/bootstrap.min.css">
<!-- Add custom CSS -->
<style>
  body {
    background-color: #f7f7f7;
    font-family: Arial, sans-serif;
  }

  /* Style the main container */
  .container {
    padding-top: 30px;
  }

  /* Center the heading */
  h3 {
    text-align: center;
    font-weight: bold;
    color: #333;
    margin-bottom: 30px;
  }

  /* Style the card */
  .card {
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    /* Add spacing between cards */
    transform: scale(1);
    transition: box-shadow 0.3s, transform 0.3s;
  }

  .card:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
  }

  /* Style the card image */
  .card-img-top {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    height: 200px;
    /* Adjust image height */
    object-fit: cover;
  }

  /* Style the card body */
  .card-body {
    padding: 20px;
  }

  /* Style the event title */
  .card-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  /* Style the event date */
  .card-date {
    color: #888;
    margin-bottom: 20px;
  }

  /* Style the event description */
  .card-description {
    color: #555;
    margin-bottom: 20px;
  }

  /* Style the "Selengkapnya" button */
  .btn-selengkapnya {
    background-color: #6c63ff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 8px 20px;
    text-decoration: none;
  }

  .btn-selengkapnya:hover {
    background-color: #554eff;
  }

  /* Add margin between the cards */
  @media (min-width: 576px) {
    .card {
      margin-right: 10px;
      margin-left: 10px;
    }
  }
</style>
</head>

<body>
  <!-- 
  <hr>
  <h3><b>EVENT TERBARU</b></h3>
  <hr> -->

  <!-- <div class="container">
    <div class="row">
      <?php foreach ($event_new as $event) { ?>
        <div class="col-sm-6 col-md-4">
          <div class="card">
            <a href="<?php echo base_url("event/$event->slug_event ") ?>">
              <?php if (empty($event->foto)) { ?>
                <img src="<?php echo base_url() ?>assets/images/no_image_thumb.png" class="card-img-top" alt="Event Image">
              <?php } else { ?>
                <img src="<?php echo base_url("assets/images/event/$event->foto") . '_thumb' . $event->foto_type ?>" class="card-img-top" alt="Event Image">
              <?php } ?>
            </a>
            <div class="card-body">
              <h4 class="card-title"><a href="<?php echo base_url("event/$event->slug_event ") ?>"><?php echo character_limiter($event->nama_event, 100) ?></a></h4>
              <p class="card-date">
                <i class="fa fa-calendar"></i> <?php echo date("j F Y", strtotime($event->created_at)); ?>
              </p>
              <p class="card-description"><?php echo character_limiter($event->deskripsi, 400) ?></p>
              <p class="text-right">
                <a href="<?php echo base_url("event/$event->slug_event") ?>" class="btn btn-selengkapnya">Selengkapnya</a>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div> -->

  <!-- Add Bootstrap JavaScript and any other scripts you need here -->

  <!-- </body>

</html> --> -->
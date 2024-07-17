<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<style>
	/* Berikan jarak pada elemen gambar */
	.img-responsive {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	/* Berikan jarak pada teks info event */
	.event-info {
		margin-bottom: 10px;
	}

	/* Berikan jarak pada deskripsi event */
	.event-desc {
		margin-bottom: 20px;
	}

	/* Berikan jarak pada tombol */
	.btn {
		margin-top: 10px;
	}

	/* Style untuk pagination */
	.pagination a {
		color: #448AFF;
		border: 1px solid #448AFF;
		padding: 5px 10px;
		margin: 0 5px;
		text-decoration: none;
		border-radius: 3px;
		transition: background-color 0.3s, color 0.3s, border 0.3s;
	}

	.pagination a:hover {
		background-color: #448AFF;
		color: #fff;
	}

	.pagination .active a {
		background-color: #448AFF;
		color: #fff;
		border: 1px solid #448AFF;
	}
</style>

<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Home</a></li>
		<li><a href="#">Event</a></li>
		<li class="active">Semua Event</li>
	</ol>

	<div class="row">
		<div class="col-md-8">
			<h1>SEMUA EVENT</h1>
			<?php foreach ($event_all as $event) { ?>
				<h2><a href="<?php echo base_url('event/') . $event->slug_event ?>"><?php echo $event->nama_event ?></a></h2>
				<a href="<?php echo base_url("event/$event->slug_event ") ?>">
					<?php
					if (empty($event->foto)) {
						echo "<img class='img-responsive' src='" . base_url() . "assets/images/no_image_thumb.png'>";
					} else {
						echo " <img class='img-responsive' src='" . base_url() . "assets/images/event/" . $event->foto . '_thumb' . $event->foto_type . "'> ";
					}
					?>
				</a>
				<p class="event-info">
					<i class="fa fa-user"></i> <?php echo $event->created_by ?>
					<i class="fa fa-calendar"></i> <?php echo date("j F Y", strtotime($event->created_at)); ?>
				</p>
				<p class="event-desc" background-color: #67E4EE;><?php echo character_limiter($event->deskripsi, 350) ?></p>
				<a class="btn btn-sm btn-primary" href="<?php echo base_url("event/$event->slug_event ") ?>" style="background-image: linear-gradient(to right, #67E4EE, #448AFF);">Selengkapnya <i class="fa fa-angle-right"></i></a>

			<?php } ?>
			<div align="center"><?php echo $this->pagination->create_links() ?></div>
		</div>
		<?php $this->load->view('front/sidebar'); ?>
	</div>
</div>
<?php $this->load->view('front/footer'); ?>
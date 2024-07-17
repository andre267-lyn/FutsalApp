<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container mt-4">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Profil</a></li>
		<li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
	</ol>

	<div class="row">
		<div class="col-md-8">
			<h1 class="mb-4">HUBUNGI KAMI</h1>
			<hr>

			<?php echo validation_errors() ?>
			<?php if ($this->session->flashdata('message')) {
				echo '<div class="alert alert-success">' . $this->session->flashdata('message') . '</div>';
			} ?>

			<?php echo form_open('send', array('id' => 'contactForm')) ?>
			<div class="form-group">
				<?php echo form_input($name, '', array('class' => 'form-control', 'placeholder' => 'Nama Anda')); ?>
			</div>
			<div class="form-group">
				<?php echo form_input($email, '', array('class' => 'form-control', 'placeholder' => 'Email Anda')); ?>
			</div>
			<div class="form-group">
				<?php echo form_input($subject, '', array('class' => 'form-control', 'placeholder' => 'Subjek Pesan')); ?>
			</div>
			<div class="form-group">
				<?php echo form_textarea($message, '', array('class' => 'form-control', 'placeholder' => 'Pesan Anda')); ?>
			</div>
			<button type="submit" id="submit" class="btn btn-primary">Kirim</button>
			<?php echo form_close() ?>
		</div>

		<?php $this->load->view('front/sidebar'); ?>
	</div>
</div>

<?php $this->load->view('front/footer'); ?>
<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<style>
	/* Add fade-in animation to the login form */
	.login-form {
		animation: fadeInUp 1s ease;
	}

	/* Add fade-in animation to the breadcrumb */
	.breadcrumb {
		animation: fadeIn 1s ease;
	}

	/* Keyframes for fade-in-up animation */
	@keyframes fadeInUp {
		from {
			opacity: 0;
			transform: translateY(20px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	/* Keyframes for fade-in animation */
	@keyframes fadeIn {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}

	body.login-page {
		background: linear-gradient(to bottom right, #ffffff, #87cefa);
	}

	body.login-page {
		background: linear-gradient(to bottom right, #ffffff, #87cefa);
	}

	.login-box {
		/* Hide the login box initially */
		opacity: 0;
	}

	/* Fade-in animation for the login box */
	@keyframes fadeIn {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}

	/* Continuous rotation animation for the logo */
	@keyframes rotateLogo {
		from {
			transform: rotate(0deg);
		}

		to {
			transform: rotate(360deg);
		}
	}

	/* Glowing effect for the login box */
	@keyframes glow {
		0% {
			box-shadow: 0 0 10px rgba(0, 0, 255, 0.8);
		}

		50% {
			box-shadow: 0 0 20px rgba(0, 0, 255, 0.8);
		}

		100% {
			box-shadow: 0 0 10px rgba(0, 0, 255, 0.8);
		}
	}

	/* Pulsating effect for the login button */
	@keyframes pulse {
		0% {
			transform: scale(1);
		}

		50% {
			transform: scale(1.1);
		}

		100% {
			transform: scale(1);
		}
	}

	/* Apply the animations to the login box and logo */
	.login-box.animate-fade-in {
		animation: fadeIn 1s forwards;
	}

	.login-logo img {
		/* Add this to make the logo rotate */
		animation: rotateLogo 10s infinite linear;
	}

	/* Apply the glowing effect to the login box */
	.login-box.animate-glow {
		animation: glow 2s infinite;
	}

	/* Apply the pulsating effect to the login button */
	.btn-pulsate {
		animation: pulse 1.5s infinite;
	}

	/* Animasi Keyframes */
	@keyframes shine {
		0% {
			background-position: -200%;
		}

		100% {
			background-position: 200%;
		}
	}

	/* Mengaplikasikan animasi pada elemen h3 */
	.light-text {
		background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
		background-size: 200%;
		animation: shine 2s linear infinite;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active">Register</li>
				</ol>
			</nav>
		</div>

		<div class="col-lg-12">
			<h1>REGISTER</h1>
			<div class="login-logo">
				<?php
				$image_path = base_url('assets/images/ball.png');
				$image_alt = 'Login Logo';
				?>
				<img src="<?php echo $image_path; ?>" alt="<?php echo $image_alt; ?>" style="object-fit: cover; width: 200px; height: 200px;">
			</div><!-- /.login-logo -->
			<hr>Sudah punya akun? Silahkan Login <a href="<?php echo base_url('auth/login') ?>">disini</a>
			<hr>
			<?php echo $message; ?>
			<?php echo form_open("auth/register"); ?>
			<div class="row">
				<div class="col-sm-6"><label>Nama</label>
					<?php echo form_input($name); ?><br>
				</div>
				<div class="col-sm-6"><label>Username</label>
					<?php echo form_input($username); ?><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><label>Password</label>
					<?php echo form_password($password); ?><br>
				</div>
				<div class="col-sm-6"><label>Konfirmasi Password</label>
					<?php echo form_password($password_confirm); ?><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6"><label>No. Hp</label>
					<?php echo form_input($phone); ?><br>
				</div>
				<div class="col-sm-6"><label>Email</label>
					<?php echo form_input($email); ?><br>
				</div>
			</div>
			<div class="form-group"><label>Alamat</label>
				<?php echo form_textarea($alamat); ?>
			</div>
			<div class="row">
				<div class="col-sm-6"><label>Provinsi</label>
					<?php echo form_dropdown('', $ambil_provinsi, '', $provinsi_id); ?><br>
				</div>
				<div class="col-sm-6"><label>Kabupaten/ Kota</label>
					<?php echo form_dropdown('', array('' => '- Pilih Kota -'), '', $kota_id); ?>
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-primary" style="background-image: linear-gradient(to right, #21ADC9, #0A829A); color: white;">Submit</button>
			<button type="reset" class="btn btn-warning" style="background-image: linear-gradient(to right, #EEA909, #D1950B); color: white;">Cancel</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<?php $this->load->view('front/footer'); ?>
<script type="text/javascript">
	function tampilKota() {
		provinsi_id = document.getElementById("provinsi_id").value;
		$.ajax({
			url: "<?php echo base_url(); ?>auth/pilih_kota/" + provinsi_id + "",
			success: function(response) {
				$("#kota_id").html(response);
			},
			dataType: "html"
		});
		return false;
	}
</script>
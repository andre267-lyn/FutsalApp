<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<?php echo $script_captcha; // javascript recaptcha 
?>
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

	hr {
		border: none;
		/* Menghapus garis bawaan */
		height: 2px;
		/* Mengatur tinggi garis */
		background-color: rgba(0, 0, 0, 0.0);
		/* Mengatur warna transparan dengan tingkat transparansi 0.3 */
	}
</style>

<div class="container mt-5 login-form login-bg">
	<!-- ... -->
	<div class="row">
		<div class="col-sm-12 col-lg-12 breadcrumb">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-transparent">
					<li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active">Login</li>
				</ol>
			</nav>
		</div>
		<div class="col-lg-12">
			<h1 class="mb-4">LOGIN</h1>
			<div class="login-logo">
				<?php
				$image_path = base_url('assets/images/ball.png');
				$image_alt = 'Login Logo';
				?>
				<img src="<?php echo $image_path; ?>" alt="<?php echo $image_alt; ?>" style="object-fit: cover; width: 200px; height: 200px;">
			</div><!-- /.login-logo -->
			<hr>
			<p class="mb-3">Belum punya akun? Silahkan Register <a href="<?php echo base_url('auth/register') ?>">disini</a></p>
			<hr>
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<?php echo $message; ?>
					<?php echo form_open("auth/login"); ?>
					<div class="form-group">
						<label for="email">Email</label>
						<?php echo form_input($identity, '', 'class="form-control"'); ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<?php echo form_password($password, '', 'class="form-control"'); ?>
					</div>
					<p class="mb-3"><?php echo $captcha ?></p>
					<div class="form-check mb-3">
						<?php echo lang('login_remember_label', 'remember'); ?>
						<?php echo form_checkbox('remember', '1', FALSE, 'class="form-check-input" id="remember"'); ?>
						<label class="form-check-label" for="remember">Remember me</label>
					</div>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#pswreset" style="background-image: linear-gradient(to right, #067E2A, #16B545); color: white;">Lupa Password?</button>
					<hr>
					<div class="form-group">
						<button type="submit" name="submit" class="btn" style="background-image: linear-gradient(to right, #21ADC9, #0A829A); color: white;">Login</button>
						<button type="reset" name="reset" class="btn" style="background-image: linear-gradient(to right, #B5030F, #EE0919); color: white;">Reset</button>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pswreset" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Reset Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php echo form_open("auth/forgot_password"); ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="identity">Silahkan Masukkan Username Anda</label>
					<input class="form-control" name="identity" type="text" id="identity" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Kirim</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<?php $this->load->view('front/footer'); ?>
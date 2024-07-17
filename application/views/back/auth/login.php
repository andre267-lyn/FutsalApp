<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Bootstrap 4 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="<?php echo base_url() ?>assets/template/backend/dist/css/adminlte.min.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/icon_fav.png') ?>" />
  <?php echo $script_captcha; // javascript recaptcha 
  ?>
  <style>
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

    /* Style untuk teks berwarna biru */
    .light-text span {
      color: #448AFF;
    }
  </style>
</head>

<body class="hold-transition login-page" style="background-image: linear-gradient(to right, #67E4EE, #448AFF);">
  <div class="login-box" style="background-image: linear-gradient(to right, #67E4EE, #448AFF);">
    <div class="card" style="background-image: linear-gradient(to right, #67E4EE, #448AFF);">
      <div class="card-body login-card-body">
        <div class="login-logo">
          <h3 class="light-text"><b><span>Login Admin</span></b></h3>
          <?php
          $image_path = base_url('assets/images/ball.png');
          $image_alt = 'Login Logo';
          ?>
          <img src="<?php echo $image_path; ?>" alt="<?php echo $image_alt; ?>" style="object-fit: cover; width: 200px; height: 200px;">
        </div><!-- /.login-logo -->
        <?php echo $message; ?>
        <?php echo form_open("admin/auth/login"); ?>
        <div class="input-group mb-3">
          <input type="text" name="<?php echo $identity['name']; ?>" value="<?php echo set_value('identity'); ?>" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="<?php echo $password['name']; ?>" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-12">
            <div class="form-group">
              <p><?php echo $captcha ?></p>
              <div class="custom-control custom-checkbox">
                <?php echo form_checkbox('remember', '1', FALSE, 'class="custom-control-input" id="remember"'); ?>
                <label class="custom-control-label" for="remember">Remember Me</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div><!-- /.col -->
        </div>
        <p class="mb-1">
          <a href="#" data-toggle="modal" data-target="#pswreset">Forgot Password?</a>
        </p>
        </form>
        <?php echo form_close(); ?>
      </div><!-- /.login-card-body -->
    </div>
  </div><!-- /.login-box -->

  <!-- modal reset password -->
  <div id="pswreset" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title"><b>Reset Password</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <?php echo form_open("admin/auth/forgot_password"); ?>
          <div class="form-group">
            <label for="identity">Please enter your Email</label>
            <input class="form-control" name="identity" type="text" id="identity" />
          </div>
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
          <?php echo form_close() ?>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      // When the page is ready, add the class to animate the login box
      $('.login-box').addClass('animate-fade-in');

      // Add the pulsating effect to the login button
      $('.btn').addClass('btn-pulsate');
    });
  </script>
</body>

</html>
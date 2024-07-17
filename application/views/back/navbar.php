<style>
  /* CSS untuk animasi pulsasi pada logo */
  @keyframes pulsate {
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

  .pulsate {
    animation: pulsate 2s infinite;
    /* Durasi animasi dan tak terhingga */
  }

  /* Add your other CSS styles here */
</style>

<header class="main-header" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
  <a href="<?php echo base_url('admin/dashboard') ?>" class="logo pulsate" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
    <span class="logo-mini" style="background-image: linear-gradient(to right, #67E4EE, #448AFF);"><b>FUTSAL</b></span>
    <span class="logo-lg" style="background-image: linear-gradient(to right, #010B27, #448AFF);"><b> PANEL ADMIN</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url() ?>assets/images/user/<?php echo $this->session->userdata('photo') . $this->session->userdata('photo_type') ?>" width="160px" height="160px" class="user-image" alt="User Image" />
            <span class="hidden-xs">
              Halo, <?php echo $this->session->userdata('name') ?>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="<?php echo base_url() ?>assets/images/user/<?php echo $this->session->userdata('photo') . $this->session->userdata('photo_type') ?>" class="img-circle" alt="User Image" />
              <p>
                <?php echo $this->session->userdata('identity') ?>
              </p>
            </li>
            <li class="user-body">
              <div class="col-xs-6 text-center">
                <a href='<?php $user_id = $this->session->userdata('user_id');
                          echo base_url('admin/auth/edit_user/' . $user_id . '') ?>' class='btn btn-default btn-flat'>Edit Profil</a>
              </div>
              <div class="col-xs-6 text-center">
                <a href='<?php echo base_url() ?>admin/auth/logout' class='btn btn-default btn-flat'>Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
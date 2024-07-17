<aside class="main-sidebar" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
  <section class="sidebar" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image"><img src="<?php echo base_url() ?>assets/images/user/<?php echo $this->session->userdata('photo') . $this->session->userdata('photo_type') ?>" class="img-circle" alt="User Image" /></div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('name'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
      <li class="header" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
        <font style="font-size: 16px;color: white; font-weight: bold" style="background-image: linear-gradient(to right, #010B27, #448AFF);">MENU UTAMA</font>
      </li>
      <li <?php if ($this->uri->segment(2) == "dashboard") {
            echo "class='active'";
          } ?>>
        <a href="<?php echo base_url('admin/dashboard') ?>" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url() ?>" target="_blank" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
          <i class="fa fa-globe"></i> <span>Lihat Website</span>
        </a>
      </li>
      <li <?php if ($this->uri->segment(2) == "transaksi" && $this->uri->segment(3) != "update_diskon") {
            echo "class='active'";
          } ?>>
        <a href="<?php echo base_url('admin/transaksi') ?>" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
          <i class="fa fa-book"></i> <span>Transaksi</span>
        </a>
      </li>
      <li <?php if ($this->uri->segment(2) == "lapangan") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-list'></i><span> Lapangan </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "lapangan" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/lapangan/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Lapangan </a></li>
          <li <?php if ($this->uri->segment(2) == "lapangan" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/lapangan') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Lapangan </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "album") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-folder'></i><span> Album </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "album" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/album/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Album </a></li>
          <li <?php if ($this->uri->segment(2) == "album" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/album') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Album </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "foto") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-picture-o'></i><span> Foto </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "foto" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/foto/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Foto </a></li>
          <li <?php if ($this->uri->segment(2) == "foto" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/foto') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Foto </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "event") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-newspaper-o'></i><span> Event </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "event" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/event/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Event </a></li>
          <li <?php if ($this->uri->segment(2) == "event" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/event') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Event </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "kategori") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-tag'></i><span> Kategori </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "kategori" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/kategori/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Kategori </a></li>
          <li <?php if ($this->uri->segment(2) == "kategori" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/kategori') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Kategori </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "slider") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-credit-card'></i><span> Slider </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "slider" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/slider/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Slider </a></li>
          <li <?php if ($this->uri->segment(2) == "slider" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/slider') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Slider </a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "kontak") {
            echo "class='active'";
          } ?>>
        <a href='#' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-phone'></i><span> Kontak </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li <?php if ($this->uri->segment(2) == "kontak" && $this->uri->segment(3) == "create") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/kontak/create') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah Kontak </a></li>
          <li <?php if ($this->uri->segment(2) == "kontak" && $this->uri->segment(3) == "") {
                echo "class='active'";
              } ?>><a href='<?php echo base_url('admin/kontak') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data Kontak </a></li>
        </ul>
      </li>
      <li class="header" style="background-image: linear-gradient(to right, #010B27, #448AFF);">
        <font style="font-size: 16px;color: white; font-weight: bold">PENGATURAN</font>
      </li>
      <li <?php if ($this->uri->segment(3) == "update_diskon") {
            echo "class='active'";
          } ?>><a href='<?php echo base_url() ?>admin/transaksi/update_diskon/1' style="background-image: linear-gradient(to right, #010B27, #448AFF);"> <i class="fa fa-scissors"></i> <span>Diskon Member</span> </a> </li>
      <li <?php if ($this->uri->segment(2) == "company") {
            echo "class='active'";
          } ?>><a href='<?php echo base_url() ?>admin/company/update/1' style="background-image: linear-gradient(to right, #010B27, #448AFF);"> <i class="fa fa-building"></i> <span>Profil</span> </a> </li>
      <li <?php if ($this->uri->segment(3) == "edit_user") {
            echo "class='active'";
          } ?>>
        <a href='<?php $user_id = $this->session->userdata('user_id');
                  echo base_url('admin/auth/edit_user/' . $user_id . '') ?>' style="background-image: linear-gradient(to right, #010B27, #448AFF);">
          <i class='fa fa-edit'></i><span> Edit Akun </span>
        </a>
      </li>
      <?php if ($this->ion_auth->is_superadmin()) : ?>
        <li <?php if ($this->uri->segment(2) == "auth" && $this->uri->segment(3) == "") {
              echo "class='active'";
            } ?>>
          <a href='#'><i class='fa fa-user'></i><span> User </span><i class='fa fa-angle-left pull-right'></i></a>
          <ul class='treeview-menu'>
            <li <?php if ($this->uri->segment(2) == "auth" && $this->uri->segment(3) == "create_user") {
                  echo "class='active'";
                } ?>><a href='<?php echo base_url() ?>admin/auth/create_user' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Tambah User</a></li>
            <li <?php if ($this->uri->segment(2) == "auth" && $this->uri->segment(3) == "") {
                  echo "class='active'";
                } ?>><a href='<?php echo base_url() ?>admin/auth/' style="background-image: linear-gradient(to right, #010B27, #448AFF);"><i class='fa fa-circle-o'></i> Data User</a></li>
          </ul>
        </li>
      <?php endif ?>
      <li> <a href='<?php echo base_url() ?>admin/auth/logout' style="background-image: linear-gradient(to right, #010B27, #448AFF);"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a> </li>
    </ul>

  </section>
</aside>
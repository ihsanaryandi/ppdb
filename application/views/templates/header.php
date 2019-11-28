<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $judul; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <?= css('open-iconic-bootstrap.min'); ?>

    <?= css('animate'); ?>
    
    <?= css('owl.carousel.min'); ?>

    <?= css('owl.theme.default.min'); ?>

    <?= css('magnific-popup'); ?>

    <?= css('aos'); ?>

    <?= css('ionicons.min'); ?>

    <?= css('bootstrap-datepicker'); ?>

    <?= css('jquery.timepicker'); ?>
    
    <?= css('flaticon'); ?>

    <?= css('icomoon'); ?>

    <?= css('style'); ?>

    <?= css('custom'); ?>

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('ppdb'); ?>"><i class="flaticon-university"></i> SMKN 2 <br><small>bandung</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto d-flex align-items-center">
          <li class="nav-item"><a href="<?= base_url('ppdb'); ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?= base_url('ppdb/coming_soon'); ?>" class="nav-link">Tentang Kami</a></li>
          <li class="nav-item"><a href="<?= base_url('ppdb/coming_soon'); ?>" class="nav-link">Jurusan</a></li>
          <li class="nav-item"><a href="<?= base_url('ppdb/coming_soon'); ?>" class="nav-link">Artikel</a></li>
          <li class="nav-item"><a href="<?= base_url('ppdb/pendaftar'); ?>" class="nav-link">Pendaftar</a></li>
          <li class="nav-item"><a href="<?= base_url('ppdb/coming_soon'); ?>" class="nav-link">Hubungi Kami</a></li>

          <?php if($this->session->userdata('siswa')) : ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <div class="profile-img">
                  <img src="<?= img($foto); ?>" alt="profile">
                </div>
              </a>
            </li>

          <?php else : ?>

            <li class="nav-item cta" style="cursor: pointer;">
              <a href="<?= base_url('ppdb/login'); ?>" class="nav-link">
                <span>Login</span>
              </a>
            </li>

          <?php endif; ?>
        
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
<section class="login">
  <div class="container">
    <div class="custom-card" style="width: 400px;">
      <h3 class="text-center"><strong>Login</strong></h3>
      <p class="text-center">Belum Punya Akun? Untuk membuat akun silahkan Scan Barcode pada SKHUN</p>
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('ppdb/login_process'); ?>" method="post">
        <div class="form-group m-0">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group m-0">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary default mt-4">Login</button>
      </form>
    </div>
  </div>
</section>
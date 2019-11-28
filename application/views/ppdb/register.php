<section class="register my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="custom-card">
          <h3 class="text-uppercase text-center mb-4"><strong>DATA SISWA</strong></h3>
          <div class="row">
            <div class="col-md-5">
              <div class="siswa-img">
                <img src="<?= img($siswa['foto']); ?>">
              </div>
            </div>
            <div class="col-md-7">
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>NAMA</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= strtoupper($siswa['nama']); ?></span>
                  </div>
                </div>
              </div>
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>NISN</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= $siswa['nisn']; ?></span>
                  </div>
                </div>
              </div>
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>NEM</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= $siswa['nem']; ?></span>
                  </div>
                </div>
              </div>
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>Tempat dan tanggal lahir</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= $siswa['ttl']; ?></span>
                  </div>
                </div>
              </div>
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>Sekolah Asal</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= $siswa['asal_sekolah']; ?></span>
                  </div>
                </div>
              </div>
              <div class="data-diri">
                <div class="row">
                  <div class="col-md-5">
                    <span>No. Peserta</span>
                  </div>
                  <div class="col-md-7">
                    <span>: <?= $siswa['no_peserta']; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="custom-card">
          <h5 class="text-center text-uppercase">
            <strong>Buat akun</strong>
          </h5>
          <p class="text-center m-0">Jika data diri tersebut adalah anda silahkan buat akun untuk mendaftar di SMKN 2 Bandung</p>
          <div class="form-register">
            <form action="" method="post">
              <div class="form-group m-0">
                <label for="email">EMAIL</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group m-0">
                <label for="password">PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group mb-4">
                <label for="repeat_password">ULANGI PASSWORD</label>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password"  value="<?= set_value('repeat_password'); ?>">
              </div>
              <button type="submit" class="btn btn-primary default">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
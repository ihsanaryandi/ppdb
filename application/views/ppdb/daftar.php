<section class="daftar my-5">
  <div class="container">
    <h3 class="text-center mb-5"><strong>Pendaftaran Calon Peserta Didik Baru SMKN 2 BANDUNG</strong></h3>
    <p class="penjelasan mb-4">Yang dibawah ini adalah data diri anda, jika terdapat data - data yang salah silahkan hubungi Dinas Pendidikan Kota Bandung</p>

    <div class="row">
      <div class="col-md-4">
        <div class="siswa-img">
          <img src="<?= img($siswa['foto']); ?>">
        </div>
      </div>
      <div class="col-md-5">
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>NAMA</span>
            </div>
            <div class="col-md-6">
              <span>: <?= strtoupper($siswa['nama']); ?></span>
            </div>
          </div>
        </div>
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>NISN</span>
            </div>
            <div class="col-md-6">
              <span>: <?= $siswa['nisn']; ?></span>
            </div>
          </div>
        </div>
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>NEM</span>
            </div>
            <div class="col-md-6">
              <span>: <?= $siswa['nem']; ?></span>
            </div>
          </div>
        </div>
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>Tempat dan Tanggal Lahir</span>
            </div>
            <div class="col-md-6">
              <span>: <?= $siswa['ttl']; ?></span>
            </div>
          </div>
        </div>
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>Sekolah Asal</span>
            </div>
            <div class="col-md-6">
              <span>: <?= $siswa['asal_sekolah']; ?></span>
            </div>
          </div>
        </div>
        <div class="data-diri">
          <div class="row">
            <div class="col-md-6">
              <span>No. Peserta</span>
            </div>
            <div class="col-md-6">
              <span>: <?= $siswa['no_peserta']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <p>Dengan Melanjutkan, anda akan mendaftar pada SMKN 2 Bandung. Pengumuman seleksi akan di publish di web SMKN 2 pada tanggal 20 Maret 2020</p>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="persetujuan">
      <label class="form-check-label" for="persetujuan">
        Saya menyetujui dengan persyaratan yang berlaku.
      </label>
    </div>
    
    <center>
      <form class="daftar-btn btn-disable" action="<?= base_url('ppdb/daftar_proses'); ?>" method="post">
        <input type="hidden" value="<?= $siswa['nisn']; ?>" name="nisn">
        <button type="submit" class="btn btn-primary default my-4">Daftar</button>
      </form>
    </center>
  </div>
</section>

    

        
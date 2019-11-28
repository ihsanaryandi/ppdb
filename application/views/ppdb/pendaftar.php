
<section class="pendaftar mt-4">
	<div class="container">
		<?= $this->session->flashdata('message'); ?>
		<div class="row align-items-center pendaftar-top">
			<div class="col-md-8">
				<h3 class="text-uppercase pendaftar-title">
					<strong>Data Pendaftar Calon Siswa</strong>
				</h3>
			</div>
			<div class="col-md-3">
				<form action="">
					<div class="search">
						<input class="search-input" type="text" placeholder="Cari Nama Anda">
						<label><i class="fas fa-fw fa-search"></i></label>
					</div>
				</form>
			</div>
			<div class="col-md-1">
				<a href="<?= base_url('ppdb/daftar'); ?>">	
					<button class="btn btn-secondary btn-daftar">Daftar</button>
				</a>
			</div>
		</div>

		<div class="pendaftar-table mt-4">
			<table class="table table-bordered text-center">
				<thead>
					<tr class="text-uppercase">
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Asal Sekolah</th>
						<th scope="col">Nem</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($pendaftar as $p) : ?>
						<tr>
							<th scope="row"><?= $no++; ?></th>
							<td><?= strtoupper($p['nama']); ?></td>
							<td><?= $p['asal_sekolah']; ?></td>
							<td><?= $p['nem']; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>

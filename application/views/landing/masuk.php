<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?= base_url('/assets/landing/images/login_form.png') ?>" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6 contents">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="mb-4">
							<h3>Masuk</h3>
							<p class="mb-4">masuk ke akun Anda untuk menggunakan layanan ini.</p>
						</div>
						<form action="#" method="post">
							<div class="form-group first shadow">
								<label for="email">Email | contoh@email.com</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group last mb-4 shadow">
								<label for="kata_sandi">Kata Sandi</label>
								<input type="kata_sandi" class="form-control" id="kata_sandi">
							</div>

							<div class="d-flex mb-3 align-items-center">
								<span class="ml-auto"><a href="#" class="lupa_sandi"> <small> Lupa Kata Sandi
											?</small></a></span>
							</div>

							<input type="submit" value="Masuk" class="btn btn-block btn-primary">
							<center class="mt-3">
								<small class="daftar">
									<i class="fas fa-user"></i> Belum punya akun ? <a href="<?= base_url('daftar')?>">Daftar Sekarang</a>
								</small>
							</center>
							<center class="mt-1">
								<a href="<?= base_url('beranda')?>"> <small>
										<i class="fas fa-arrow-left"></i> Kembali Ke Beranda
									</small>

								</a>
							</center>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>

<?= $this->extend('components/layout_clear') ?>
<?= $this->section('content') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
		                    <a href="index.html" class="logo d-flex align-items-center w-auto">
		                        <img src="<?php echo base_url() ?>public/NiceAdmin/assets/img/logo.png" alt="">
		                        <span class="d-none d-lg-block">TokoPrimo</span>
		                    </a>
		                </div><!-- End Logo -->

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Ubah Profil</h5>
                            <p class="text-center small">Ubah username atau password anda</p>
                        </div>

                        <form class="row g-3 needs-validation" action="<?= base_url('profil') ?>" method="post" novalidate>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="newUsername" class="form-control" id="yourUsername" value=<?= session()->get('username'); ?> required>
                                    <div class="invalid-feedback">Masukkan username!</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password baru</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Masukkan password!</div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Ubah</button>
                            </div>
                    </form>
                </div>
            </div>

            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>
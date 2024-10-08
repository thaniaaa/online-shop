<?= $this->extend('components/layout_clear') ?>
<?= $this->section('content') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
		                    <a href="index.html" class="logo d-flex align-items-center w-auto">
		                        <img src="<?php echo base_url() ?>public/NiceAdmin/assets/img/logo.png" alt="">
		                        <span class="d-none d-lg-block">Thania's Bakerry</span>
		                    </a>
		                </div><!-- End Logo -->

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create account</h5>
                            <p class="text-center small">Enter your username, password and role</p>
                        </div>

                        <form class="row g-3 needs-validation" action="<?= base_url('register/daftar') ?>" method="post" novalidate>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                    <div class="invalid-feedback">Enter username</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Enter password!</div>
                            </div>

                            <div class="mb-3">
                                <label for="editRole" class="form-label">Role</label>
                                <select class="form-select" id="editRole" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Daftar</button>
                            </div>
                            <center>
                                <div class="col-12">
                                   Already have an account? <a href="<?= base_url() ?>login">Login here</a>
                                </div>
                            </center>
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
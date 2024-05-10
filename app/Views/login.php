<?= $this->extend('template') ?>

<?= $this->section('main') ?>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="text-center mb-4">Sign In</h2>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <!-- Social Login Buttons -->
                        <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-google btn-primary" type="button"><i class="bi bi-google"></i> Sign in with Google</button>
                        <button class="btn btn-github btn-secondary" type="button"><i class="bi bi-github"></i> Sign in with GitHub</button>
                        </div>
                        
                        <div class="text-center my-3">OR</div>
                        
                        <!-- Sign In Form -->
                        <form action="<?= base_url('/login') ?>" method="post">
                            <div class="mb-3">
                                <label for="emailSignIn" class="form-label">Email</label>
                                <input type="text" class="form-control" id="emailSignIn" name="emailSignIn" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordSignIn" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordSignIn" name="passwordSignIn" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                        <div class="text-center mb-4">SIGN UP</div>
                    </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

<?= $this->endSection() ?>

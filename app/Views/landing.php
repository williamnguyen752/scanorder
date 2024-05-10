<?= $this->extend('template') ?>

<?= $this->section('main') ?>

    <main>
        <section class="py-5 bg-light text-center text-lg-start">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-3 fw-bold">MenuScanOrder</h1>
                        <p class="lead">Revolutionize your dining experience with our advanced ordering system.</p>
                        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <img src="<?= base_url('images/menu.png'); ?>" alt="MenuScanOrder Experience" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="fw-bold">Main Features</h2>
                        <p class="lead">Everything you need to simplify your restaurant's ordering process</p>
                    </div>
                </div>

                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <i class="bi bi-ui-checks-grid display-4"></i>
                        </div>
                        <div>
                            <h2>Digital Menu Creation</h2>
                            <p>Allows businesses to easily create and manage a digital menu with categories, items, and pricing.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <i class="bi bi-upc-scan display-4"></i>
                        </div>
                        <div>
                            <h2>QR Code Generation</h2>
                            <p>Automatically generates unique QR codes for each table, facilitating easy access to the menu by guests.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <i class="bi bi-basket3 display-4"></i>
                        </div>
                        <div>
                            <h2>Seamless Ordering</h2>
                            <p>Guests can scan the QR code at their table to view the menu and place orders directly from their smartphones.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                            <i class="bi bi-people display-4"></i>
                        </div>
                        <div>
                            <h2>Order Management</h2>
                            <p>Staff can view and manage orders in real-time, ensuring a smooth dining experience for guests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- More sections can be added here for Pricing, Contact, etc. -->
        
    </main>
<?= $this->endSection() ?>
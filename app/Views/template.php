<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MenuScanOrder - Order Interface</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>
    <style>
        .qr-code {
            margin: 10px;
            display: inline-block;
            text-align: center;
        }
        .qr-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        @media print {
            header, footer, .none-print {
                display: none;
            }
            .qr-container {
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('/') ?>">MenuScanOrder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php if (!session()->get('isLoggedIn')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                            </li>
                        <?php else : ?>
                            <?php if (session()->get('role') === 'admin') : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('admin') ?>">User Management</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('user') ?>">Info</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?= $this->renderSection('main') ?>

    <footer class="footer bg-primary text-light py-4 text-center">
        <div class="container">
            <p>&copy; 2024 MenuScanOrder. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript for Menu Item Management and QR Code Generation
    </script>
</body>

</html>
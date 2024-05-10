<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<main class="container py-5">
    <h2>Editing User: <?= $restaurant['name'] ?></h2>
    <div class="user-info mb-4">
        <h4></h4>
        <p>Email: <?= $restaurant['email'] ?></p>
        <p>Phone: <?= $restaurant['phone'] ?></p>
    </div>

    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#menuModal">Add Menu Item</button>
    <!-- Menu Items Table -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Menu Item -->
                <?php foreach($items as $item) : ?>
                    <tr>
                        <td><?= $item['category_name'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td>$<?= $item['price'] ?></td>
                        <td>
                            <!-- <button class="btn btn-sm btn-primary me-2 mb-1"><i class="bi bi-eye-fill"></i></button> -->
                            <a class="btn btn-sm btn-info me-2 mb-1" href="<?= base_url('user/addedit/' . $restaurant['restaurant_id']) ?>"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <h2 class="mt-5">Table QR Codes</h2>
    <a class="btn btn-primary mb-3" href="<?= base_url('user/tableqr' . '?numTable=' . $restaurant['number_of_tables']) ?>">Edit Table QR codes</a>
    <!-- QR Code Generation Interface -->
    <p>Total Number of Tables: <span id="totalTables">10</span></p>
    <div id="qrCodes" class="d-flex flex-wrap">
        <!-- QR Codes will be automatically generated for each table -->
    </div>
</main>

<?= $this->endSection() ?>

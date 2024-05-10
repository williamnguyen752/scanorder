<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main class="py-5">
    <div class="container">
      <h2>User Management</h2>
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn btn-primary" type="button">Search</button>
          </div>
        </div>
        <div class="col-md-6 text-md-end">
          <a class="btn btn-primary" type="button" href="<?= base_url('admin/addedit') ?>">Create New</a>
        </div>
      </div>

      <?php if (session()->getFlashdata('error')) : ?>
          <div class="alert alert-danger" role="alert">
              <?= session()->getFlashdata('error') ?>
          </div>
      <?php endif; ?>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Restaurant ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($restaurants as $restaurant) : ?>
            <tr>
              <td><?= esc($restaurant['restaurant_id']) ?></td>
              <td><?= esc($restaurant['name']) ?></td>
              <td><?= esc($restaurant['email']) ?></td>
              <td><?= esc($restaurant['phone']) ?></td>
              <td>
                  <!-- <button class="btn btn-sm btn-primary me-2 mb-1"><i class="bi bi-eye-fill"></i></button> -->
                  <a class="btn btn-sm btn-info me-2 mb-1" href="<?= base_url('admin/addedit/' . $restaurant['restaurant_id']) ?>"><i class="bi bi-pencil-fill"></i></a>
                  <a class="btn btn-sm btn-warning mb-1" href="<?= base_url('admin/delete/' . $restaurant['restaurant_id']) ?>" onclick="return confirm('Do you want to delete this restaurant?')"><i class="bi bi-dash-circle-fill"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    </div>
  </main>

<?= $this->endSection() ?>

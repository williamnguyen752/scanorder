<?= $this->extend('template') ?>

<?php $table = $_GET['table' ?? '']; ?>

<?= $this->section('main') ?>
  
  <main class="container py-5">
    <!-- "Create New Menu" button opens a modal or a form to add a new menu -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#menuModal">Create New Menu</button>

    <!-- Menu List Table -->
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Category</th>
            <th>Item</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Dynamically filled with server-side script -->
          <!-- Example row -->
          <tr>
            <td>Appetizers</td>
            <td>Bruschetta</td>
            <td>$5.99</td>
            <td>
              <button class="btn btn-info btn-sm me-2">Edit</button>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          <!-- ... other menu items ... -->
        </tbody>
      </table>
    </div>
    
    <!-- Pagination controls -->
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

    <!-- Modal for Creating/Editing a Menu Item -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="menuModalLabel">Menu Item</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="menuForm">
              <!-- Category input -->
              <div class="mb-3">
                <label for="categoryInput" class="form-label">Category</label>
                <input type="text" class="form-control" id="categoryInput" required>
              </div>
              <!-- Item input -->
              <div class="mb-3">
                <label for="itemInput" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="itemInput" required>
              </div>
              <!-- Price input -->
              <div class="mb-3">
                <label for="priceInput" class="form-label">Price</label>
                <input type="number" min="0" step="0.01" class="form-control" id="priceInput" required>
              </div>
              <button type="submit" class="btn btn-primary">Save Item</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  
<?= $this->endSection() ?>


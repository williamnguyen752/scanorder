<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main class="container py-5">
    <h2 class="mb-4">Order Management</h2>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Items</th>
            <th>Total</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example order row -->
          <tr>
            <td>001</td>
            <td>Margherita Pizza, Caesar Salad</td>
            <td>$21.98</td>
            <td class="order-status">In Progress</td>
            <td><button class="btn btn-success btn-sm" onclick="markCompleted(this)">Mark as Completed</button></td>
          </tr>
          <tr>
            <td>001</td>
            <td>Margherita Pizza, Caesar Salad</td>
            <td>$21.98</td>
            <td class="order-status">In Progress</td>
            <td><button class="btn btn-success btn-sm" onclick="markCompleted(this)">Mark as Completed</button></td>
          </tr>
          <!-- Repeat for each order -->
        </tbody>
      </table>
    </div>
  </main>

<?= $this->endSection() ?>


<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main class="container py-5">
    <h2 class="mb-4">Menu Items</h2>
    <div class="row">
      <!-- Food Item 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="path_to_food_image_1.jpg" class="card-img-top" alt="Food Item 1">
          <div class="card-body">
            <h5 class="card-title">Margherita Pizza</h5>
            <p class="card-text">$12.99</p>
            <button class="btn btn-primary" onclick="addToOrder('Margherita Pizza', '12.99')">Add to Order</button>
          </div>
        </div>
      </div>
      <!-- Food Item 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="path_to_food_image_2.jpg" class="card-img-top" alt="Food Item 2">
          <div class="card-body">
            <h5 class="card-title">Caesar Salad</h5>
            <p class="card-text">$8.99</p>
            <button class="btn btn-primary" onclick="addToOrder('Caesar Salad', '8.99')">Add to Order</button>
          </div>
        </div>
      </div>
      <!-- Food Item 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="path_to_food_image_3.jpg" class="card-img-top" alt="Food Item 3">
          <div class="card-body">
            <h5 class="card-title">Spaghetti Carbonara</h5>
            <p class="card-text">$14.99</p>
            <button class="btn btn-primary" onclick="addToOrder('Spaghetti Carbonara', '14.99')">Add to Order</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="mt-5">Your Order</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Price</th>
          <th></th>
        </tr>
      </thead>
      <tbody id="order-list">
        <!-- Items added to order will appear here -->
      </tbody>
    </table>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#menuModal">Place Order</button>
  </main>

  <?= $this->endSection() ?>


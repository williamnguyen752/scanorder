<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Add/Edit Menu</h2>
                    <form action="<?= base_url('user/addedit' . (isset($restaurant) ? '/' . $restaurant['restaurant_id'] : '')) ?>" method="post">
                        <!--Add edit category name, item name, item description not required, item price  -->
                        <div class="mb-3">
                            <label for="category_name" class="form-label text-capitalize">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" value="<?= isset($restaurant) ? $restaurant['category_name'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="item_name" class="form-label text-capitalize">Item Name</label>
                            <input type="text" class="form-control" id="item_name" name="item_name" value="<?= isset($restaurant) ? $restaurant['item_name'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="item_description" class="form-label text-capitalize">Item Description</label>
                            <input type="text" class="form-control" id="item_description" name="item_description" value="<?= isset($restaurant) ? $restaurant['item_description'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="item_price" class="form-label text-capitalize">Item Price</label>
                            <input type="number" class="form-control" id="item_price" name="item_price" value="<?= isset($restaurant) ? $restaurant['item_price'] : '' ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </main>

<?= $this->endSection() ?>
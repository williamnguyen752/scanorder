<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Add/Edit Restaurant</h2>
                    <form action="<?= base_url('admin/addedit' . (isset($restaurant) ? '/' . $restaurant['restaurant_id'] : '')) ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= isset($restaurant) ? $restaurant['name'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($restaurant) ? $restaurant['email'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= isset($restaurant) ? $restaurant['phone'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="number_of_tables" class="form-label">Number of tables</label>
                            <input type="number" class="form-control" id="number_of_tables" name="number_of_tables" value="<?= isset($restaurant) ? $restaurant['number_of_tables'] : '' ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </main>

<?= $this->endSection() ?>
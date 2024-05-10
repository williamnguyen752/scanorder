<?= $this->extend('template') ?>

<?= $this->section('main') ?>

  <main>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Add/Edit Item</h2>
                    <form action="<?= base_url('user/addedit' . (isset($item) ? '/' . $item['item_id'] : '')) ?>" method="post">
                        <!--Add edit item form-->
                        <div class="mb-3">
                            <label for="category_id" class="form-label mb-2">Category</label>
                            <textare class = "form-control" id="category_id" name="category_id" rows="3"><?= isset($item) ? $item['category_id'] : '' ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= isset($item) ? $item['name'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="<?= isset($item) ? $item['price'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?= isset($item) ? $item['description'] : '' ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </main>

<?= $this->endSection() ?>
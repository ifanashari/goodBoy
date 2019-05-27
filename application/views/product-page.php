<div class="row">
    <div class="col-md-4">
        <a class="btn btn-primary form-control" data-toggle="modal" href='#add-category'>
            <i class="mdi mdi-plus"></i>    Add New Category
        </a>
        
        <div class="card mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $categoryCounter = 1;
                        foreach ($dataCategory as $category) {
                    ?>
                    <tr>
                        <td><?= $categoryCounter; ?></td>
                        <td><?= $category->category; ?></td>
                        <td>
                            <a class="text-success" data-toggle="modal" href='#save-category-<?= $category->id_category; ?>'>
                                <i class="mdi mdi-pencil"></i> edit
                            </a>

                            <a class="text-danger" href="<?= base_url(); ?>index.php/Product_C/deleteCategory/<?= $category->id_category; ?>">
                                <i class="mdi mdi-delete"></i> delete
                            </a>
                        </td>
                    </tr>
                    <?php
                            $categoryCounter++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="col-md-8">
        <a class="btn btn-primary form-control" data-toggle="modal" href='#add-product'>
            <i class="mdi mdi-plus"></i>    Add New Product
        </a>
        
        <div class="card mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $productCounter = 1;
                        foreach ($dataProduct as $product) {
                    ?>
                    <tr>
                        <td><?= $productCounter; ?></td>
                        <td><?= $product->product; ?></td>
                        <td><?= $product->category; ?></td>
                        <td>Rp <?= number_format($product->price); ?></td>
                        <td>
                            <a class="text-success" data-toggle="modal" href='#save-product-<?= $product->id_product; ?>'>
                                <i class="mdi mdi-pencil"></i> edit
                            </a>

                            <a class="text-danger" href="<?= base_url(); ?>index.php/Product_C/deleteProduct/<?= $product->id_product; ?>">
                                <i class="mdi mdi-delete"></i> delete
                            </a>
                        </td>
                    </tr>
                    <?php
                            $productCounter++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ===============|=|Modal add category|=|=============== -->
<div class="modal fade" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Category</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Product_C/addCategory" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">New Category</label>
                        <input type="text" class="form-control" name="category" placeholder="New Category" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="mdi mdi-close"></i>    Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>    Add New Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===============|=|Modal add category|=|=============== -->

<!-- ===============|=|Modal add product|=|=============== -->
<div class="modal fade" id="add-product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Product</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Product_C/addProduct" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">New Product</label>
                        <input type="text" class="form-control" name="product" placeholder="New Product" required>
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="id_category" class="form-control">
                            <?php
                                foreach ($dataCategory as $category) {
                            ?>
                            <option value="<?= $category->id_category; ?>"><?= $category->category; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="000000" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="mdi mdi-close"></i>    Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>    Add New Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===============|=|Modal add product|=|=============== -->

<!-- ===============|=|Modal edit category|=|=============== -->
<?php
    foreach ($dataCategory as $category) {
?>

<div class="modal fade" id="save-category-<?= $category->id_category; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Category</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Product_C/saveCategory/<?= $category->id_category; ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Category" value="<?= $category->category; ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="mdi mdi-close"></i>    Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-save"></i>    Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>
<!-- ===============|=|Modal edit category|=|=============== -->

<!-- ===============|=|Modal edit category|=|=============== -->
<?php
    foreach ($dataProduct as $product) {
?>

<div class="modal fade" id="save-product-<?= $product->id_product; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Product</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Product_C/saveProduct/<?= $product->id_product; ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" name="product" placeholder="Product" value="<?= $product->product; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Category</label>
                        <option value="<?= $product->id_category; ?>"><?= $product->category; ?></option>
                        <select name="id_category" class="form-control">
                            <?php
                                foreach ($dataCategory as $category) {
                            ?>
                            <option value="<?= $category->id_category; ?>"><?= $category->category; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="000000" value="<?= $product->price; ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="mdi mdi-close"></i>    Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-save"></i>    Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>
<!-- ===============|=|Modal edit category|=|=============== -->

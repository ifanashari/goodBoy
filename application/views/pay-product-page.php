<div class="row">
    <div class="col-md-5">
        <h3>Daftar barang</h3>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Category</th>
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
                        <td>
                            <a class="text-success" href="<?= base_url(); ?>index.php/P_Product_C/addToCart/<?= $product->id_product; ?>">
                                <i class="mdi mdi-cart"></i>    Add To Cart
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
    <div class="col-md-7">
        <h3>Pembayaran</h3>

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th class="text-right">Price</th>
                        <th>Qty</th>
                        <th class="text-right">Sub Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cartCounter = 1;
                        foreach ($this->cart->contents() as $item) {
                    ?>
                    <tr>
                        <td><?= $cartCounter; ?></td>
                        <td><?= $item["name"]; ?></td>
                        <td class="text-right">Rp <?= number_format($item["price"]); ?></td>
                        <td><?= number_format($item["qty"]); ?></td>
                        <td class="text-right">Rp <?= number_format($item["subtotal"]); ?></td>
                        <td>
                            <a class="text-danger" href="<?= base_url(); ?>index.php/P_Product_C/deleteFromCart/<?= $item["rowid"]; ?>">
                                <i class="mdi mdi-delete"></i>    delete
                            </a>
                        </td>
                    </tr>
                    <?php
                            $cartCounter++;
                        }
                    ?>
                    <tr>
                        <th colspan="4" class="text-right">Total</th>
                        <th class="text-right">Rp <?= $this->cart->total(); ?></th>
                        <th class="text-right"></th>
                    </tr>
                </tbody>
            </table>

            <div class="card-body">
                <form action="<?= base_url(); ?>index.php/P_Product_C/addPProduct" method="POST">
                    <div class="form-group">
                        <label for="">Atas nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Customer Name" required>
                    </div>

                    <button type="submit" class="btn btn-primary form-control">
                        <i class="mdi mdi-square-inc-cash"></i>    Bayar 
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
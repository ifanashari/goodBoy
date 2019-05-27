<div class="row">
    <div class="col-md-12">
    <a class="btn btn-primary form-control" data-toggle="modal" href='#add-personnel'>
            <i class="mdi mdi-plus"></i>    Add New Personnel
        </a>
        
        <div class="card mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>personnel</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $personnelCounter = 1;
                        foreach ($dataPersonnel as $personnel) {
                    ?>
                    <tr>
                        <td><?= $personnelCounter; ?></td>
                        <td><?= $personnel->name; ?></td>
                        <td><?= $personnel->role; ?></td>
                        <td>
                            <a class="text-success" data-toggle="modal" href='#save-personnel-<?= $personnel->id; ?>'>
                                <i class="mdi mdi-pencil"></i> edit
                            </a>

                            <a class="text-danger" href="<?= base_url(); ?>index.php/Personnel_C/deletePersonnel/<?= $personnel->id; ?>">
                                <i class="mdi mdi-delete"></i> delete
                            </a>
                        </td>
                    </tr>
                    <?php
                            $personnelCounter++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ===============|=|Modal add pesonnel|=|=============== -->
<div class="modal fade" id="add-personnel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Personnel</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Personnel_C/addPersonnel" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="New Pesonnel" required>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" class="form-control">
                            <option value="cashier">Cashier</option>
                            <option value="barber">Barber</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="mdi mdi-close"></i>    Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>    Add New Personnel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===============|=|Modal add pesonnel|=|=============== -->

<!-- ===============|=|Modal edit personnel|=|=============== -->
<?php
    foreach ($dataPersonnel as $personnel) {
?>

<div class="modal fade" id="save-personnel-<?= $personnel->id; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">personnel</h4>
            </div>
            <form action="<?= base_url(); ?>index.php/Personnel_C/savePersonnel/<?= $personnel->id; ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="New Pesonnel" value="<?= $personnel->name; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= base64_decode($personnel->username); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="paswword" class="form-control" name="password" placeholder="Password" value="<?= base64_decode($personnel->password); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" class="form-control">
                            <option value="<?= $personnel->role; ?>"><?= $personnel->role; ?></option>
                            <option value="cashier">Cashier</option>
                            <option value="barber">Barber</option>
                        </select>
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
<!-- ===============|=|Modal edit personnel|=|=============== -->
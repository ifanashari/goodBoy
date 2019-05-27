<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url(); ?>index.php/P_Barber_C/addPBarber" method="POST">
                    <div class="form-group">
                        <label for="">Barber</label>
                        <select name="id_user" class="form-control">
                            <?php
                                foreach ($dataBarberPersonnel as $barberP) {
                            ?>
                            
                            <option value="<?= $barberP->id; ?>"><?= $barberP->name; ?></option>

                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Atas nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Customer name" required>
                    </div>

                    <div class="form-group">
                        <label for="">Biaya</label>
                        <input type="number" class="form-control" name="price" placeholder="000000" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Extra</label>
                        <input type="number" class="form-control" name="extra" value="" placeholder="000000" required>
                    </div>

                    <button type="submit" class="btn btn-primary form-control">
                        <i class="mdi mdi-square-inc-cash"></i>    Bayar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Cashier</th>
                        <th>Barber</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $barberCounter = 1;
                        foreach($dataBarber as $barber){
                    ?>
                    <tr>
                        <td><?= $barberCounter; ?></td>
                        <td><?= $barber->cashier; ?></td>
                        <td><?= $barber->name; ?></td>
                        <td class="text-right">Rp <?= number_format($barber->total); ?></td>
                    </tr>
                    <?php
                            $barberCounter++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Cashier</th>
                        <th>Atas nama</th>
                        <th>Product</th>
                        <th class="text-right">Qty</th>
                        <th class="text-right">Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $reportCounter = 1;
                        $reportQty = 0;
                        $reportTtotal = 0;
                        foreach($dataReport as $report){
                    ?>
                    <tr>
                        <td><?= $reportCounter; ?></td>
                        <td><?= $report->cashier; ?></td>
                        <td><?= $report->name; ?></td>
                        <td><?= $report->product; ?></td>
                        <td class="text-right"><?= number_format($report->qty); ?></td>
                        <td class="text-right">Rp <?= number_format($report->total); ?></td>
                    </tr>
                    <?php
                            $reportCounter++;
                            $reportQty += $report->qty;
                            $reportTtotal += $report->total;
                        }
                    ?>

                    <tr>
                        <th colspan="4" class="text-right">Total</th>
                        <th class="text-right"><?= number_format($reportQty); ?></th>
                        <th class="text-right">Rp <?= number_format($reportTtotal); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
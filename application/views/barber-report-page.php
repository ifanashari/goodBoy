<div class="row">
    <div class="col-md-12">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Cashier</th>
                        <th class="text-right">Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $reportTtotal = 0;
                        $reportCounter = 1;
                        foreach($dataReport as $report){
                    ?>
                    <tr>
                        <td><?= $reportCounter; ?></td>
                        <td><?= $report->cashier; ?></td>
                        <td class="text-right">Rp <?= number_format($report->total); ?></td>
                    </tr>
                    <?php
                            $reportCounter++;
                            $reportTtotal += $report->total;
                        }
                    ?>

                    <tr>
                        <th colspan="2" class="text-right">Total</th>
                        <th class="text-right">Rp <?= number_format($reportTtotal); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
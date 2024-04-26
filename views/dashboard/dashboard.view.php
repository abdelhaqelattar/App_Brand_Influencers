<?php include 'layout/open.php' ?>

<div class="d-flex flex-wrap">
    <div class="col-12 col-md-6 stat-card">
        <div>
            <h4>Total influencers</h4>
            <h1><?php echo $stats['tot_influencer'] ?></h1>
        </div>
    </div>
    <div class="col-12 col-md-6 stat-card">
        <div>
            <h4>Total brands</h4>
            <h1><?php echo $stats['tot_brand'] ?></h1>
        </div>
    </div>
</div>

<div class="d-flex flex-wrap">
    <div class="col-12 col-md-4 stat-card">
        <div>
            <h4>Nbr transactions last month</h4>
            <h1><?php echo $stats['tot_transaction'] ?></h1>
        </div>
    </div>
    <div class="col-12 col-md-4 stat-card">
        <div>
            <h4>Total deposit</h4>
            <h1>$<?php echo number_format($stats['tot_deposit'], 2, '.', ',') ?></h1>
        </div>
    </div>
    <div class="col-12 col-md-4 stat-card">
        <div>
            <h4>Total withdraw</h4>
            <h1>$<?php echo number_format(abs($stats['tot_withdraw']), 2, '.', ',') ?></h1>
        </div>
    </div>
</div>

<!-- last 5 transactions -->

<div class="d-flex flex-wrap">
    <div class="stats-table data-table col-12 col-md-6">
        <div>
            <h4 class="">Last 5 transactions</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stats['transactions'] as $transaction) : ?>
                        <tr>
                            <td><?= $transaction->username ?></td>
                            <?php if ($transaction->amount > 0) : ?>
                                <td class="color-success fw-500">$<?= number_format($transaction->amount, 2, '.', ',') ?></td>
                            <?php else : ?>
                                <td class="color-danger fw-500">-$<?= number_format(abs($transaction->amount), 2, '.', ',') ?></td>
                            <?php endif; ?>
                            <td><?= getTimeDiff($transaction->created_at) ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="stats-table data-table col-12 col-md-6">
        <div>
            <h4>Last 5 announcements</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 100px;">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stats['announcements'] as $announcement) : ?>
                        <tr>
                            <td><?= $announcement->title ?></td>
                            <td><?= getTimeDiff($announcement->created_at) ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .stat-card>div {
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        overflow: hidden;
    }

    .stats-table,
    .stat-card {
        padding: 10px;
    }

    .stat-card>div,
    .stats-table>div {
        border-radius: 5px;
        background: var(--bgr-secondary-color);
        padding: 30px 20px;
    }

    .stat-card h1 {
        font-size: 40px;
        font-weight: 700;
        margin: 0;
    }

    .stat-card h4 {
        font-size: 14px;
        font-weight: 700;
        margin: 0;
        margin-bottom: 10px;
        text-transform: uppercase;
        color: rgba(var(--text-color-rgb), .6);
    }

    .stats-table {
        background-color: transparent;
    }

    .stats-table table {
        width: 100%;
        font-size: .9em;
    }

    .stats-table tr {
        height: 40px !important;
    }

    .stats-table th,
    .stats-table td {
        padding-left: 0 !important;
    }

    .stats-table h4 {
        font-size: 14px;
        font-weight: 700;
        margin: 0;
        margin-bottom: 10px;
        text-transform: uppercase;
        color: rgba(var(--text-color-rgb), .6);
    }
</style>

<?php include 'layout/close.php' ?>
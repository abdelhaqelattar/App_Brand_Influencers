<?php

use function PHPSTORM_META\type;

include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="data-table">
    <hr>
    <table class="w-100">
        <thead>
            <tr>
                <th>#ID</th>
                <th>User</th>
                <th>Approved</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($requests && isset($requests)) : ?>
                <?php foreach ($requests as $item) : ?>
                    <tr class="text-14">
                        <td><a href="">#<?= $item->id ?></a></td>
                        <td>
                            <div class="d-flex align-center">
                                <img src="<?= $item->avatar ?>" alt="">
                                <div>
                                    <p><?= $item->username ?></p>
                                    <p class="text-14" style="  color: rgba(var(--text-color-rgb), 0.38);"><?= $item->email ?></p>
                                </div>
                            </div>
                        </td>
                        <?php if (gettype($item->approved) == "NULL") : ?>
                            <td class="text-14">Pending</td>
                        <?php elseif ($item->approved == 0) : ?>
                            <td class="text-14">Rejected</td>
                        <?php elseif ($item->approved == 1) : ?>
                            <td class="text-14">Approved</td>
                        <?php endif; ?>
                        <td class="text-center">
                            <form class="d-inline" action="<?= APP_URL ?>/delete-requests" method="POST">
                                <input type="hidden" name="id" value="<?= $item->id ?>">
                                <input type="submit" name="approve" value="Approve" class="btn btn-primary">
                                <input type="submit" name="reject" value="Reject" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">You have no Transactions until now</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
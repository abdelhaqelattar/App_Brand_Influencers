<?php

use function PHPSTORM_META\type;

include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="data-table">
    <hr>
    <table class="w-100">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($data['results'] && isset($data['results'])) : ?>
                <?php foreach ($data['results'] as $item) : ?>
                    <tr class="text-14">
                        <td><a href="">#<?= $item->id ?></a></td>
                        <td><?= $item->name ?></td>
                        <td><a href="mailto:<?= $item->email ?> "><?= $item->email ?> </a></td>
                        <td><a href="phone:<?= $item->phone ?> "><?= $item->phone ?></a></td>
                        <td><?= $item->subject ?></td>
                        <td><?= $item->message ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">You have no partnerships until now</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <!-- pginations -->
    <section class="pagination">
        <ul class="page">
            <?php if ($data['page'] > 1) : ?>
                <!-- add the current filter parameters to the previous page link -->
                <a href="<?= APP_URL ?>/partnership?page=<?= $data['page'] - 1 ?>">
                    <li>previous</li>
                </a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $data['nbr_pages']; $i++) : ?>
                <!-- add the current filter parameters to the page links -->
                <?php if ($data['page'] == $i) : ?>
                    <a class="active">
                        <li><?= $i ?></li>
                    </a>
                <?php else : ?>
                    <a href="<?= APP_URL ?>/partnership?page=<?= $i ?>">
                        <li><?= $i ?></li>
                    </a>
                <?php endif; ?>


            <?php endfor; ?>
            <?php if ($data['page'] < $data['nbr_pages']) : ?>
                <!-- add the current filter parameters to the next page link -->
                <a href="<?= APP_URL ?>/partnership?page=<?= $data['page'] + 1 ?>">
                    <li>next</li>
                </a>
            <?php endif; ?>
        </ul>
    </section>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
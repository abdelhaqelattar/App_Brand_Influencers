<?php

include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="data-table">
  <div>
    <form action="#" method="GET" class="d-flex justify-content space-between align-items-center px-24 flex-wrap">
      <!-- left -->
      <div class="d-flex gap-3 flex-wrap">
        <?php if ($_SESSION['USER']->role == 'admin') : ?>
          <div class="form-group">
            <label for="search"></label>
            <input type="text" placeholder="Username" name="username" class="form-control" value="<?= $_GET['username'] ?? '' ?>">
          </div>
        <?php endif; ?>
        <div class="form-group">
          <select id="filterStatus" name="status">
            <option value="">Select status</option>
            <option value="Desposit" <?= isset($_GET['status']) && $_GET['status'] == 'Desposit' ? 'selected' : '' ?>>Desposit</option>
            <option value="Withdraw" <?= isset($_GET['status']) && $_GET['status'] == 'Withdraw' ? 'selected' : '' ?>>Withdraw</option>
            <option value="Partnership" <?= isset($_GET['status']) && $_GET['status'] == 'Partnership' ? 'selected' : '' ?>>Partnership</option>
          </select>
        </div>
      </div>
      <!-- right -->
      <div class="d-flex gap-3 align-center flex-wrap">
        <div class="form-group">
          <span>From</span>
          <input type="date" name="from" value="<?= $_GET['from'] ?? '' ?>">
          <span>to</span>
          <input type="date" name="to" value="<?= $_GET['to'] ?? '' ?>">
        </div>
        <div class="form-group">
          <button class="btn btn-primary p-10">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0" y="0" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                <path d="m505.749 475.587-145.6-145.6c28.203-34.837 45.184-79.104 45.184-127.317C405.333 90.926 314.41.003 202.666.003S0 90.925 0 202.669s90.923 202.667 202.667 202.667c48.213 0 92.48-16.981 127.317-45.184l145.6 145.6c4.16 4.16 9.621 6.251 15.083 6.251s10.923-2.091 15.083-6.251c8.341-8.341 8.341-21.824-.001-30.165zM202.667 362.669c-88.235 0-160-71.765-160-160s71.765-160 160-160 160 71.765 160 160-71.766 160-160 160z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
              </g>
            </svg>
          </button>
        </div>
      </div>
    </form>
  </div>
  <hr>
  <table class="w-100">
    <thead>
      <tr>
        <th>#ID</th>
        <?php if ($_SESSION['USER']->role == 'admin') : ?>
          <th>User</th>
        <?php endif; ?>
        <th>Type</th>
        <th>Amount</th>
        <th>Date/Time</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($data['results'] && isset($data['results'])) : ?>
        <?php foreach ($data['results'] as $item) : ?>
          <tr class="text-14">
            <td><a href="">#<?= $item->id ?></a></td>
            <?php if ($_SESSION['USER']->role == 'admin') : ?>
              <td>
                <div class="d-flex">
                  <img src="<?= $item->avatar ?>" alt="">
                  <p><?= $item->username ?> <br><?= $item->email ?></p>
                </div>
              </td>
            <?php endif; ?>
            <td><?= $item->type == "Partnership" ? "Partnership #" . $item->partnership_id : ucfirst($item->type) ?></td>
            <?php if ($item->amount > 0) : ?>
              <td class="color-success fw-500">$<?= number_format($item->amount, 2, '.', ',') ?></td>
            <?php else : ?>
              <td class="color-danger fw-500">-$<?= number_format(abs($item->amount), 2, '.', ',') ?></td>
            <?php endif; ?>
            <td><?= $item->created_at ?></td>
          </tr>
        <?php endforeach ?>
      <?php else : ?>
        <tr>
          <td colspan="7" class="text-center">You have no Transactions until now</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
  <!-- pginations -->
  <section class="pagination">
    <ul class="page">
      <?php if ($data['page'] > 1) : ?>
        <!-- add the current filter parameters to the previous page link -->
        <a href="<?= APP_URL ?>/transactions?page=<?= $data['page'] - 1 ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
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
          <a href="<?= APP_URL ?>/transactions?page=<?= $i ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
            <li><?= $i ?></li>
          </a>
        <?php endif; ?>


      <?php endfor; ?>
      <?php if ($data['page'] < $data['nbr_pages']) : ?>
        <!-- add the current filter parameters to the next page link -->
        <a href="<?= APP_URL ?>/transactions?page=<?= $data['page'] + 1 ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
          <li>next</li>
        </a>
      <?php endif; ?>
    </ul>
  </section>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
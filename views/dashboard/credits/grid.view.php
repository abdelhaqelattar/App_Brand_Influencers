<?php

include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="data-table">
    <div class="d-flex justify-end p-10">
        <button class="btn btn-outline-primary mr-2" onclick="openmodal('modal')">Add</button>
        <button class="btn btn-primary" onclick="openmodal('modal2')">Withdraw/Disposit</button>
    </div>
    <hr>
    <table class="w-100">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Card Type</th>
                <th>Card Number</th>
                <th>Experition Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($data && isset($data)) : ?>
                <?php foreach ($data as $item) : ?>
                    <tr class="text-14">
                        <td><a href=""><?= $item->id ?></a></td>
                        <td><?= strtoupper($item->card_type) ?></td>
                        <td><?= $item->card_number ?></td>
                        <td><?= $item->exp_date ?></td>
                        <td>
                            <form action="<?= APP_URL ?>/credits/<?= $item->id ?>/delete" method="POST">
                                <button class="btn-empty">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M8 4h11a2 2 0 1 1 0 4h-7M8 8H5a2 2 0 0 1-.826-3.822"></path>
                                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 1.824-1.18M19 15V8m-9 4h2M3 3l18 18"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">You have no Credits until now</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>


<div id="modal" class="modal d-none">
    <div class="backdrop"></div>
    <div class="modal-content">
        <div class="d-flex space-between">
            <h2>Add Credit Card</h2>
            <svg class="close" onclick="closemodal('modal')" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </div>
        <form action="#" method="POST">
            <input type="hidden" name="to" value="<?= $user_id ?>">
            <div class="form-group">
                <select class="w-100" name="card_type" id="card_type" required>
                    <option value="" hidden>Card Type</option>
                    <option value="paypal">Paypal</option>
                    <option value="mastercard">Master Card</option>
                    <option value="visa">Visa</option>
                </select>
            </div>
            <div class="form-group">
                <input class="w-100" type="text" name="card_number" id="card_number" placeholder="Card Number" required>
            </div>
            <div class="form-group">
                <input class="w-100" type="date" name="exp_date" id="exp_date" placeholder="Experiation Date" required>
            </div>
            <button class="btn btn-primary w-100 mt-5">SEND</button>
        </form>
    </div>
</div>
<div id="modal2" class="modal d-none">
    <div class="backdrop"></div>
    <div class="modal-content">
        <div class="d-flex space-between">
            <h2>Add Credit Card</h2>
            <svg class="close" onclick="closemodal('modal2')" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </div>
        <form action="<?= APP_URL ?>/transactions" method="POST">
            <div class="d-flex">
                <div class="form-group col-6">
                    <input type="radio" name="type" id="Desposit" required value="desposit">
                    <label for="Desposit">Desposit</label>
                </div>
                <div class="form-group col-6">
                    <input type="radio" name="type" id="Withdraw" value="withdraw">
                    <label for="Withdraw">Withdraw</label>
                </div>
            </div>
            <div class="form-group">
                <select class="w-100" name="card" id="card" required>
                    <option value="" hidden>Card</option>
                    <?php foreach ($data as $item) : ?>
                        <option value="<?= $item->id ?>"><?= strtoupper($item->card_type) . ' ' . $item->card_number ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input class="w-100" type="text" name="amount" id="amount" placeholder="Amount" required>
            </div>
            <div class="form-group">
                <input class="w-100" type="text" name="ccv" id="ccv" placeholder="CCV" required>
            </div>
            <button class="btn btn-primary w-100 mt-5">SEND</button>
        </form>
    </div>
</div>



<script>
    function openmodal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove("d-none");
    }

    function closemodal(id) {
        const modal = document.getElementById(id);
        modal.classList.add("d-none");
    }
</script>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<style>
    .card {
        padding: 40px;
    }

    .card .card-title {
        margin: 0;
        margin-bottom: 20px;
    }

    .card hr {
        margin: 20px 0;
    }

    .card .top * {
        margin: 5px 0;
    }

    .card pre {
        white-space: break-spaces;
    }
</style>

<div class="card">
    <form action="#" method="POST">
        <div class="flex">
            <h3 class="card-title">Project Details</h3>
        </div>
        <div class="top d-flex space-between align-center">
            <div>
                <h4><?= $title ?></h4>
            </div>
            <p>$ <?= number_format($amount, 2, '.', ',') ?> </p>
        </div>
        <hr>
        <p><?= $duration ?> <?= $duration_unit ?></p>
        <pre><?= $description ?></pre>
    </form>
    <button class="mt-5 btn btn-primary" onclick="openmodal()">Be Partners</button>
    <a class="mt-5 btn btn-primary" href="<?=APP_URL?>/chat/<?= $author_id ?>">Contact</a>
</div>


<div id="modal" class="modal d-none">
    <div class="backdrop"></div>
    <div class="modal-content">
        <div class="d-flex space-between">
            <h2>Partnership Request</h2>
            <svg class="close" onclick="closemodal()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </div>
        <form action="<?= APP_URL ?>/partnership/request" method="POST">
            <input type="hidden" name="to" value="<?= $author_id ?>">
            <div class="form-group">
                <input class="w-100" type="number" name="amount" id="amount" placeholder="Total Amount" required>
            </div>
            <div class="form-group">
                <label for="">Start Date</label>
                <input class="w-100" type="date" name="start_date" id="start_date" placeholder="" required>
            </div>
            <div class="form-group">
                <input class="w-100" type="number" name="duration" id="duration" placeholder="Duraction" required>
            </div>
            <div class="form-group">
                <select class="w-100" name="duration_unit" id="duration_unit" required>
                    <option value="" hidden>Duration Unit</option>
                    <option value="day">Day</option>
                    <option value="week">Week</option>
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="w-100" name="terms" id="terms" cols="30" rows="5" placeholder="Terms & Agreement"></textarea>
            </div>
            <button class="btn btn-primary w-100 mt-5">SEND</button>
        </form>
    </div>
</div>

<script>
    function openmodal() {
        const modal = document.getElementById("modal");
        modal.classList.remove("d-none");
    }

    function closemodal() {
        const modal = document.getElementById("modal");
        modal.classList.add("d-none");
    }
</script>
<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
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
</style>

<div class="card">
    <form action="#" method="POST">
        <h3 class="card-title">Project Details</h3>
        <div class="d-flex space-between align-center">
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required />
            </div>
            <div class="d-flex gap-2">
                <div class="form-group amount">
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required />
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
            </div>
        </div>
        <hr>
        <div class="form-group">
            <textarea class="w-100" name="description" id="description" rows="10" placeholder="Description" required></textarea>
        </div>

        <button class="btn btn-primary mt-3">Create</button>
    </form>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
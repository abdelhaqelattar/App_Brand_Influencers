<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<style>
    .announcements {
        /* border: 1px rgba(var(--text-color-rgb), 0.3) solid; */
        border-radius: 5px;
        /* padding: 40px; */
    }

    .announcements .top {
        padding: 20px;
        /* margin-bottom: 30px; */
    }

    .announcements .form-group {
        padding: 0;
    }

    .announcements select {
        height: fit-content;
        line-height: 30px;
        padding: 7px 10px;
    }

    .announcements .announcement-card {
        padding: 20px;
        border: 1px rgba(var(--text-color-rgb), 0.3) solid;
    }

    .announcements .announcement-card:hover {
        cursor: pointer;
        background-color: rgba(var(--text-color-rgb), 0.1);
    }

    .truncate-text {
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* number of lines to show */
        -webkit-box-orient: vertical;
    }

    .announcements a {
        color: inherit;
    }
</style>

<div class="card announcements">
    <div class="top d-flex space-between align-center">
        <h2 class="m-0">Top Result</h2>
    </div>
    <div class="mb-5">
        <form action="#" method="GET" class="d-flex justify-content space-between align-items-center px-24 flex-wrap">
            <!-- left -->
            <div class="d-flex gap-3 flex-wrap col-6">
                <div class="form-group w-100">
                    <label for="search"></label>
                    <input type="text" placeholder="Search" name="search" class="form-control w-100" value="<?= $_GET['search'] ?? '' ?>">
                </div>

            </div>
            <!-- right -->
            <div class="d-flex gap-3 align-center flex-wrap">
                <div class="form-group ">
                    <select name="sort">
                        <option value="">Sort by</option>
                        <option value="Latest" <?= isset($_GET['sort']) && $_GET['sort'] == 'Latest' ? 'selected' : '' ?>>Latest</option>
                        <option value="High" <?= isset($_GET['sort']) && $_GET['sort'] == 'High' ? 'selected' : '' ?>>High Cost</option>
                        <option value="Low" <?= isset($_GET['sort']) && $_GET['sort'] == 'Low' ? 'selected' : '' ?>>Low Cost</option>
                    </select>
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
    <?php if ($data ['results']) : ?>
        <?php foreach ($data['results'] as $announcement) : ?>
            <a href="<?= APP_URL ?>/announcements/<?= $announcement->id ?>">
                <div class="announcement-card">
                    <h3><?= $announcement->title ?></h3>
                    <div>
                        <strong>Fixed-price</strong>
                        <span>Est. Budget $<?= $announcement->amount ?></span>
                        <span class="description">Posted <?= getTimeDiff($announcement->created_at)  ?></span>
                    </div>
                    <p class="truncate-text"><?= $announcement->description ?> </p>
                    <div>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $announcement->author_rate) {
                                echo '<i class="fa-solid fa-star" style="color:gold;"></i>';
                            } else {
                                echo '<i class="fa-regular fa-star"></i>';
                            }
                        }
                        ?>
                        <strong><?= $announcement->name ?></strong>
                        <span>$<?= $announcement->total_spend ?> spent</span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="text-center">No Announcements yet</p>
    <?php endif; ?>
    <!-- pginations -->
    <section class="pagination">
        <ul class="page">
            <?php if ($data['page'] > 1) : ?>
                <!-- add the current filter parameters to the previous page link -->
                <a href="<?= APP_URL ?>/announcements?page=<?= $data['page'] - 1 ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
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
                    <a href="<?= APP_URL ?>/announcements?page=<?= $i ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
                        <li><?= $i ?></li>
                    </a>
                <?php endif; ?>


            <?php endfor; ?>
            <?php if ($data['page'] < $data['nbr_pages']) : ?>
                <!-- add the current filter parameters to the next page link -->
                <a href="<?= APP_URL ?>/announcements?page=<?= $data['page'] + 1 ?>&username=<?= $_GET['username'] ?? '' ?>&status=<?= $_GET['status'] ?? '' ?>&from=<?= $_GET['from'] ?? '' ?>&to=<?= $_GET['to'] ?? '' ?>">
                    <li>next</li>
                </a>
            <?php endif; ?>
        </ul>
    </section>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
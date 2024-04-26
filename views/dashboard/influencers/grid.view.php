<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="grid">


    <?php
    if ($data) {
        foreach ($data as $influencer) {
    ?>
            <div class="grid-card col-12 col-sm-6 col-md-4">
                <a href="<?= APP_URL ?>/influencers/<?= $influencer->id ?>">
                    <img src="<?= $influencer->avatar ?? "https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png" ?>" alt="">
                    <div class="info">
                        <h2><?= $influencer->first_name . ' ' . $influencer->last_name ?></h2>
                        <h4><?= $influencer->job ?></h4>
                    </div>
                </a>
            </div>
    <?php
        }
    }
    ?>
    <!-- 
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png" alt="">
        <div class="info">
            <h2>Samuel Elliott</h2>
            <h4>Owner Influexa</h4>
        </div>
    </div>
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-2.png" alt="">
        <div class="info">
            <h2>Melinda Ward </h2>
            <h4>CEO Influexa</h4>
        </div>
    </div>
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-3.png" alt="">
        <div class="info">
            <h2>Francis Perry</h2>
            <h4>Manager</h4>
        </div>
    </div>
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png" alt="">
        <div class="info">
            <h2>Samuel Elliott</h2>
            <h4>Owner Influexa</h4>
        </div>
    </div>
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-2.png" alt="">
        <div class="info">
            <h2>Melinda Ward </h2>
            <h4>CEO Influexa</h4>
        </div>
    </div>
    <div class="grid-card col-12 col-sm-6 col-md-4">
        <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-3.png" alt="">
        <div class="info">
            <h2>Francis Perry</h2>
            <h4>Manager</h4>
        </div>
    </div> -->
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
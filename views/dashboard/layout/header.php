<style>
    .left a {
        height: auto;
        padding: 7px;
    }

    .notificationbox {
        background-color: var(--bgr-secondary-color) !important;
        position: absolute;
        list-style: none;
        padding: 0;
        margin: 0;
        z-index: 1;
        top: 75px;
        right: 90px;
        width: 365px;
        border-radius: 5px;
        max-height: 400px;
        overflow: scroll;
    }

    .header {
        padding: 0 8px;
    }

    .header h3 {
        font-size: 16px;
        padding: 14px;
        margin: 0;
        font-weight: 500;
    }

    .header .badge {
        font-size: 13px;
        padding: 2px 10px;
        margin: 14px;
        color: var(--primary-color);
        background-color: rgba(var(--primary-color-rgb), 0.12);
        border-radius: 10px;
    }

    .text h3 {
        font-size: 16px;
        font-weight: 500;
        color: rgba(var(--text-color-rgb), 0.68);
    }

    .text span {
        font-size: 14px;
        color: rgba(var(--text-color-rgb), 0.38);
        line-height: 1.2;
        display: flex;
        max-width: 230px;
    }

    .notificationbox small {
        font-size: 12px;
        white-space: nowrap;
    }

    .notificationbox button {
        margin: 14px;
        width: calc(100% - 28px)
    }

    .notificationbox .notification-item:hover {
        border-radius: 5px;
        background-color: rgba(var(--shadow-color-rgb), 0.12);
    }

    .notificationbox img {
        cursor: auto !important;
    }
</style>

<header class="d-flex align-center space-between">
    <div class="left d-flex align-center">
        <button class="btn-empty" onclick="toggleSidebar()">
            <svg class=" d-lg-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--light iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 24px; height: 24px; width: 24px;">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <!-- <a class="btn btn-primary p-3 ml-2" href="<?= APP_URL ?>/transactions">$ <?= number_format($_SESSION['USER']->balance, 2, '.', ',') ?></a> -->
    </div>
    <ul class="right">
        <li onclick="toggleMode()">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 24px; height: 24px; width: 24px;">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 1 0-5.656-5.656a4 4 0 0 0 5.656 5.656zm-8.485 2.829l-1.414 1.414M6.343 6.343L4.929 4.929m12.728 1.414l1.414-1.414m-1.414 12.728l1.414 1.414M4 12H2m10-8V2m8 10h2m-10 8v2"></path>
            </svg>
        </li>
        <li onclick="toggleNotificationBox()">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 24px; height: 24px; width: 24px;">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6M9 17v1a3 3 0 0 0 6 0v-1"></path>
            </svg>
        </li>
        <li class="d-flex align-center" onclick="toggleheaderbox()">
            <img src="<?= $_SESSION['USER']->avatar ?? APP_URL . "/assets/images/" .  $_SESSION['USER']->role . ".png" ?>">
        </li>

        <ul id="headerbox" class="d-none">
            <div class="d-flex gap-3">
                <img src="<?= $_SESSION['USER']->avatar ?? APP_URL . "/assets/images/" .  $_SESSION['USER']->role . ".png" ?>">
                <div>
                    <h3 class="m-0"><?= $_SESSION['USER']->username ?></h3>
                    <span><?= $_SESSION['USER']->role ?></span>
                </div>
            </div>
            <hr>
            <?php if ($_SESSION['USER']->role != 'admin') : ?>
                <li>
                    <a class="d-flex align-center gap-2" href="<?= APP_URL ?>/profile">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark me-2 iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 22px; height: 22px; width: 22px;">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="7" r="4"></circle>
                                    <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                                </g>
                            </svg>
                        </span>
                        <span>Profile</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a class="d-flex align-center gap-2" href="<?= APP_URL ?>/transactions">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark me-2 iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 22px; height: 22px; width: 22px;">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.7 8A3 3 0 0 0 14 6h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1-2.7-2M12 3v3m0 12v3"></path>
                        </svg>
                    </span>
                    <span>Transactions</span>
                </a>
            </li>
            <hr>
            <li>
                <form class="logout-form d-flex align-center gap-2" action="<?= APP_URL ?>/logout" method="POST">
                    <label for="logout"></label>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark me-2 iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 22px; height: 22px; width: 22px;">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"></path>
                                <path d="M7 12h14l-3-3m0 6l3-3"></path>
                            </g>
                        </svg>
                    </span>
                    <span>
                        <input type="submit" id="logout" href="" value="Logout"></input>
                    </span>
                </form>
            </li>
        </ul>
        <div id="notificationbox" class="notificationbox d-none">
            <div class="header d-flex align-center space-between">
                <h3>Notifications</h3>
                <!-- <span class="badge">5 New</span> -->
            </div>
            <hr>
            <?php foreach (App\Models\Notification::where('user_id', '=', $_SESSION['USER']->id)->orderBy('created_at', 'desc')->get() as $index => $notification) : ?>
                <div class="<?= ($index >= 4) ? 'd-none' : '' ?>">
                    <div class="notification-item space-between my-10 px-30 align-center d-flex">
                        <img src="<?= $_SESSION['USER']->avatar ?? APP_URL . "/assets/images/" .  $_SESSION['USER']->role . ".png" ?>">
                        <div class="text">
                            <h3 class="m-0 "><?= $notification->title ?></h3>
                            <span><?= $notification->message ?></span>
                        </div>
                        <div class="item-date">
                            <small><?= getTimeDiff($notification->created_at) ?></small>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php endforeach ?>
            <div class="my-10 d-block">
                <button type="button" class="btn btn-primary" onclick="readAll()">READ ALL NOTIFICATIONS</button>
            </div>
        </div>
    </ul>
</header>

<style>
    .logout-form {
        position: relative;
    }

    .logout-form label {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        cursor: pointer;
    }
</style>

<script>
    function readAll() {
        const notifications = document.querySelectorAll('.notificationbox .d-none');
        notifications.forEach(notification => {
            notification.classList.remove('d-none');
        })
    }
</script>
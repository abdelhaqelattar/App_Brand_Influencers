<header>
    <nav>
        <div class="container d-flex align-center space-between">
            <div class="logo">
                <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x.png" class="attachment-full size-full wp-image-1959" alt="" decoding="async" loading="lazy" srcset="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x.png 2253w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-300x81.png 300w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-1024x275.png 1024w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-768x207.png 768w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-1536x413.png 1536w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-2048x551.png 2048w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-800x215.png 800w">
            </div>
            <ul class="d-none d-lg-flex">
                <li><a <?= isset($page) && $page == "home" ? 'class="active"' : '' ?> href="<?= APP_URL ?>">Home</a></li>
                <li><a <?= isset($page) && $page == "about" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/about">About</a></li>
                <li><a <?= isset($page) && $page == "services" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/services">Services</a></li>
                <li><a <?= isset($page) && $page == "faq" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/faq">Faq</a></li>
                <li><a <?= isset($page) && $page == "contact" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/contact">Contact</a></li>
            </ul>
            <div class="d-none d-lg-block buttons">
                <a href="<?= APP_URL ?>/login" class="btn btn-primary">Login <i class="fa-solid fa-angles-right"></i></a>
            </div>
            <div class="d-lg-none buttons">
                <button class="bars btn btn-primary" onclick="toggleAside()"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </nav>
    <aside>
        <div class="top d-flex space-between align-center">
            <div class="logo">
                <img src="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x.png" class="attachment-full size-full wp-image-1959" alt="" decoding="async" loading="lazy" srcset="https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x.png 2253w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-300x81.png 300w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-1024x275.png 1024w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-768x207.png 768w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-1536x413.png 1536w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-2048x551.png 2048w, https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Logo-Influenxa@2x-800x215.png 800w">
            </div>
            <div class="buttons">
                <button class="bars btn btn-primary" onclick="toggleAside()"><i class="fa-solid fa-x"></i></button>
            </div>
        </div>
        <ul class="">
            <li><a <?= isset($page) && $page == "home" ? 'class="active"' : '' ?> href="<?= APP_URL ?>">Home</a></li>
            <li><a <?= isset($page) && $page == "about" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/about">About</a></li>
            <li><a <?= isset($page) && $page == "services" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/services">Services</a></li>
            <li><a <?= isset($page) && $page == "faq" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/faq">Faq</a></li>
            <li><a <?= isset($page) && $page == "contact" ? 'class="active"' : '' ?> href="<?= APP_URL ?>/contact">Contact</a></li>
            <li><a target="_blank" href="https://docs.negraz.com">Docs</a></li>
            <li><a href="<?= APP_URL ?>/login">Login</a></li>
        </ul>
    </aside>
</header>
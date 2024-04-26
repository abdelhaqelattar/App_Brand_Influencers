<?php $path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<aside id="aside">
    <div class="aside">
        <div class="header d-flex space-between align-center">
            <a href="<?= APP_URL ?>">
                <div class="avatar d-flex align-center">
                    <svg width="34" height="24" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00183571 0.3125V7.59485C0.00183571 7.59485 -0.141502 9.88783 2.10473 11.8288L14.5469 23.6837L21.0172 23.6005L19.9794 10.8126L17.5261 7.93369L9.81536 0.3125H0.00183571Z" fill="currentColor"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.17969 17.7762L13.3027 3.75173L17.589 8.02192L8.17969 17.7762Z" fill="#161616"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.58203 17.2248L14.8129 5.24231L17.6211 8.05247L8.58203 17.2248Z" fill="#161616"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25781 17.6914L25.1339 0.3125H33.9991V7.62657C33.9991 7.62657 33.8144 10.0645 32.5743 11.3686L21.0179 23.6875H14.5487L8.25781 17.6914Z" fill="currentColor"></path>
                    </svg>
                    <h1>Project</h1>
                </div>
            </a>
            <button class="header-btn p-0 btn-empty d-lg-none" onclick="toggleSidebar()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="button" tag="i" class="v-icon notranslate v-theme--light v-icon--size-default v-icon--clickable header-action iconify iconify--tabler" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path>
                </svg>
            </button>
            <button class="header-btn p-0 btn-empty d-none d-lg-block" onclick="togglePinnedSidebar()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="button" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default v-icon--clickable header-action iconify iconify--tabler" width="20" height="20" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </g>
                </svg>
            </button>
        </div>
        <ul>
            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/dashboard')) == APP_URL . '/dashboard' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="m19 8.71l-5.333-4.148a2.666 2.666 0 0 0-3.274 0L5.059 8.71a2.665 2.665 0 0 0-1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.2c0-.823-.38-1.6-1.03-2.105"></path>
                            <path d="M16 15c-2.21 1.333-5.792 1.333-8 0"></path>
                        </g>
                    </svg>
                    <label>Dashboard</label>
                </a>
            </li>

            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/chat')) == APP_URL . '/chat' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/chat">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V8a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H8l-4 4M8 9h8m-8 4h6"></path>
                    </svg>
                    <label>Chat</label>
                </a>
            </li>

            <?php if ($_SESSION['USER']->role == 'admin') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/contacts')) == APP_URL . '/contacts' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/contacts">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                            </g>
                        </svg>
                        <label>Contact</label>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['USER']->role == 'brand') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/announcements/create')) == APP_URL . '/announcements/create' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/announcements/create">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V8a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H8l-4 4M8 9h8m-8 4h6"></path>
                        </svg>
                        <label>Create Announcement</label>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['USER']->role != 'brand') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/announcements')) == APP_URL . '/announcements' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/announcements">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V8a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H8l-4 4M8 9h8m-8 4h6"></path>
                        </svg>
                        <label>Announcements</label>
                    </a>
                </li>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/brands')) == APP_URL . '/brands' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/brands">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 511.993 511.993" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <circle cx="379.043" cy="119.215" r="22.002" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="rgba(var(--text-color-rgb), 0.68)" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></circle>
                                <path d="m220.358 322.914-28.603-63.793c-.519-1.239.724-2.484 1.963-1.967l63.635 28.765M214.34 305.921l26.109-26.109M276.823 266.449l-46.77-46.77 77.41 14.168c1.433.261 1.646-.782.616-1.812l-45.717-44.841M338.373 159.427c12.529 12.529 15.489 29.397 4.65 40.622-3.608 3.736-13.063 13.263-13.063 13.263s-16.53-16.411-22.845-22.727c-5.187-5.187-22.719-22.653-22.719-22.653l12.879-12.879c12.1-12.099 28.569-8.155 41.098 4.374zM117.401 353.719c5.955 5.955 5.955 15.609 0 21.564-2.953 2.953-13.563 13.659-13.563 13.659l-10.83-10.83-10.782-10.782 13.611-13.611c5.955-5.955 15.61-5.955 21.564 0z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="rgba(var(--text-color-rgb), 0.68)" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M145.017 372.919c6.966 6.966 6.966 18.26 0 25.225-3.455 3.455-15.932 16.044-15.932 16.044l-12.668-12.668-12.613-12.613 15.988-15.988c6.965-6.966 18.259-6.966 25.225 0zM159.714 338.83l42.048 2.68M129.57 319.987l46.858 46.857M167.082 306.83c6.726 6.726 6.281 18.075-.689 25.045-3.457 3.457-12.311 12.419-12.311 12.419s-8.897-8.786-12.287-12.176c-2.784-2.784-12.209-12.147-12.209-12.147l12.452-12.452c6.969-6.969 18.318-7.414 25.044-.689z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="rgba(var(--text-color-rgb), 0.68)" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="m415.058 235.308 31.024-31.024a16.65 16.65 0 0 0 4.492-15.333L427.162 81.959a16.65 16.65 0 0 0-12.706-12.706L307.463 45.84a16.65 16.65 0 0 0-15.333 4.492L12.377 330.086c-6.502 6.502-6.502 17.045 0 23.547l12.613 12.613M49.377 390.633l93.405 93.405c6.502 6.502 17.045 6.502 23.547 0l224.006-224.003" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="rgba(var(--text-color-rgb), 0.68)" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M377.756 59.742a66.917 66.917 0 0 1 12.384-17.044c26.16-26.16 68.573-26.16 94.733 0 26.16 26.16 26.16 68.573 0 94.733-26.16 26.16-68.573 26.16-94.733 0a67.011 67.011 0 0 1-11.469-15.306" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="rgba(var(--text-color-rgb), 0.68)" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            </g>
                        </svg>
                        <label>Brands</label>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['USER']->role != 'influencer') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/influencers')) == APP_URL . '/influencers' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/influencers">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M43 56H7a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h36a1 1 0 0 1 1 1v8a1 1 0 0 1-2 0v-7H8v44h34v-2a1 1 0 0 1 2 0v3a1 1 0 0 1-1 1z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M43 10H7a1 1 0 0 1-1-1V5a3 3 0 0 1 3-3h32a3 3 0 0 1 3 3v4a1 1 0 0 1-1 1zM8 8h34V5a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M27 7h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM41 62H9a3 3 0 0 1-3-3v-4a1 1 0 0 1 1-1h36a1 1 0 0 1 1 1v4a3 3 0 0 1-3 3zM8 56v3a1 1 0 0 0 1 1h32a1 1 0 0 0 1-1v-3z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M27 59h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM37.271 32.294a3 3 0 0 1-2.984-2.708l-.391-3.98a3 3 0 0 1 2.694-3.278l4.975-.489.976 9.953-4.976.488a2.907 2.907 0 0 1-.294.014zm2.5-8.269-2.986.293a1 1 0 0 0-.9 1.093l.39 3.981a1.011 1.011 0 0 0 1.093.9L40.355 30z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M53.683 35.678a2.994 2.994 0 0 1-.909-.142l-12.256-3.888-.91-9.274 11.268-6.194a3 3 0 0 1 4.431 2.337l1.359 13.866a3 3 0 0 1-2.983 3.295zm-.3-2.048a1 1 0 0 0 1.3-1.051l-1.36-13.868a1 1 0 0 0-1.477-.778l-10.118 5.558.651 6.649z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="m54.387 29.626-.781-7.962 1-.1a4 4 0 1 1 .78 7.962zm1.431-5.9.337 3.446a2 2 0 0 0-.337-3.446zM40.453 30.973l1.99-.196.438 4.445-1.99.196zM44.602 32.285l1.99-.196.277 2.806-1.99.196zM23 36a10 10 0 1 1 10-10 10.011 10.011 0 0 1-10 10zm0-18a8 8 0 1 0 8 8 8.009 8.009 0 0 0-8-8zM36 56H13a1 1 0 0 1-1-1V43a7.009 7.009 0 0 1 7-7h5a13.043 13.043 0 0 1 10.558 5.413 1 1 0 1 1-1.623 1.168A11.042 11.042 0 0 0 24 38h-5a5.006 5.006 0 0 0-5 5v11h21v-5c0-.309-.013-.615-.037-.917A1 1 0 0 1 35.876 47a.983.983 0 0 1 1.079.913c.03.356.045.718.045 1.083v6A1 1 0 0 1 36 56z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="M41 49H24a4 4 0 0 1 0-8h15a1 1 0 0 0 1-1v-3a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v5a7.009 7.009 0 0 1-7 7zm-17-6a2 2 0 0 0 0 4h17a5.006 5.006 0 0 0 5-5v-5a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3a3 3 0 0 1-3 3z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            </g>
                        </svg>
                        <label>Influencers</label>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/proposals')) == APP_URL . '/proposals' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/proposals">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M59.252 39.136a4.223 4.223 0 0 0-6.534-2.33 7.366 7.366 0 0 0-7.338-.3l-3.615 1.896a1.154 1.154 0 0 0-.47-.17L20.74 36a14.295 14.295 0 0 0-6.05.94 2.997 2.997 0 0 0-2.952-2.525H7.615a3.003 3.003 0 0 0-3 3v15.598a3.003 3.003 0 0 0 3 3h4.123a2.997 2.997 0 0 0 2.892-2.246c7.055 2.269 15.3 5.007 16.916 5.775a4.453 4.453 0 0 0 1.967.46 6.256 6.256 0 0 0 3.954-1.696l20.075-14.573a4.383 4.383 0 0 0 1.71-4.597zm-12.946-.858a5.398 5.398 0 0 1 4.518-.221l-6.705 4.43a3.755 3.755 0 0 0-.115-1.54 3.872 3.872 0 0 0-.575-1.16zM12.738 53.013a1.001 1.001 0 0 1-1 1H7.615a1.001 1.001 0 0 1-1-1V37.415a1.001 1.001 0 0 1 1-1h4.123a1.001 1.001 0 0 1 1 1zm43.63-10.899c-.113.093-20.165 14.613-20.247 14.713-.076.074-1.87 1.804-3.709.912-2.17-1.03-13.927-4.835-17.674-6.038V39.108a12.174 12.174 0 0 1 5.8-1.118l20.346 2.209a2.491 2.491 0 0 1 .312.192c1.874 1.142.73 3.67-1.128 3.685l-16.011.528a1 1 0 0 0 .064 1.999l6.38-.21 3.828 2.112a4.429 4.429 0 0 0 4.582-.18l14.308-9.453.022-.015.612-.404a2.222 2.222 0 1 1 2.515 3.661zm-17.753 4.01c-.966.745-2.15 1.31-3.322.629l-.887-.49zM26.514 31.469h16.004a3.791 3.791 0 0 0 3.652-3.908V12.71a1.243 1.243 0 0 0-.274-.688L38.59 4.315a1.185 1.185 0 0 0-.726-.312h-11.35a3.791 3.791 0 0 0-3.652 3.909V27.56a3.791 3.791 0 0 0 3.652 3.908zM38.864 7.51l3.981 4.2h-3.981zm-14.002.4a1.797 1.797 0 0 1 1.652-1.908h10.35v6.708a1 1 0 0 0 1 1h6.307v13.85a1.796 1.796 0 0 1-1.653 1.908H26.514a1.796 1.796 0 0 1-1.652-1.908z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M27.98 10.78h5.968a1 1 0 0 0 0-2H27.98a1 1 0 0 0 0 2zM27.98 16.084h5.968a1 1 0 0 0 0-2H27.98a1 1 0 0 0 0 2zM27.98 21.388h13.071a1 1 0 0 0 0-2h-13.07a1 1 0 0 0 0 2zM27.98 26.692h13.071a1 1 0 0 0 0-2h-13.07a1 1 0 0 0 0 2z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                        </g>
                    </svg>
                    <label>Proposals</label>
                </a>
            </li>
            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/partnership')) == APP_URL . '/partnership' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/partnership">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M19 25.86a1 1 0 0 1-.035-2 100.408 100.408 0 0 0 14.649-1.24.961.961 0 0 1 .262-.018 7.184 7.184 0 0 1 3.425 1.08 1 1 0 0 1-.581 1.809 1.029 1.029 0 0 1-.647-.229 4.99 4.99 0 0 0-2.205-.653 103.883 103.883 0 0 1-14.842 1.251z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M55.58 49.65a4.032 4.032 0 0 1-2.375-.77l-.215-.149a.98.98 0 0 1-.119-.1L41.1 40.154a1 1 0 1 1 1.161-1.628l.8.57 11.015 7.943a.943.943 0 0 1 .094.077l.191.133a2.083 2.083 0 0 0 2.841-.393A2.051 2.051 0 0 0 57.561 45a2.006 2.006 0 0 0-.665-1.011L41.152 31.162c-6.029 3.2-10.3 1.554-12.339.251a2.3 2.3 0 0 1 .195-3.969l9.012-4.786a4.919 4.919 0 0 1 3.768-.33l5.331 1.73a6.932 6.932 0 0 0 4.8-.173l2.322-.951A1 1 0 1 1 55 24.785l-2.32.95a8.916 8.916 0 0 1-6.182.224l-5.326-1.729a2.9 2.9 0 0 0-2.219.2l-9.014 4.787a.3.3 0 0 0-.172.263.274.274 0 0 0 .128.255c2.1 1.342 5.705 2.326 10.866-.639a1 1 0 0 1 1.13.092l16.26 13.25a3.987 3.987 0 0 1 1.328 2 4.083 4.083 0 0 1-.7 3.645 4.032 4.032 0 0 1-3.199 1.567z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M51.442 54.285a4.077 4.077 0 0 1-2.365-.753l-10.81-7.67a1 1 0 0 1 1.157-1.631l10.81 7.669a2.1 2.1 0 0 0 2.44-3.414L41.9 40.721a1 1 0 0 1 1.166-1.621l10.777 7.766a4.1 4.1 0 0 1-2.4 7.421z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M46.775 58.292a3.941 3.941 0 0 1-2.251-.707l-9.687-6.71a1 1 0 0 1 1.139-1.645l9.687 6.71a1.969 1.969 0 0 0 2.74-.5 1.976 1.976 0 0 0-.48-2.725l-9.64-6.838a1 1 0 1 1 1.157-1.631l9.64 6.838a3.983 3.983 0 0 1 .969 5.493 3.942 3.942 0 0 1-2.549 1.65 4 4 0 0 1-.725.065z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M41.061 61.58a4 4 0 0 1-1.991-.542l-5.377-3.1a1 1 0 0 1 1-1.732l5.376 3.1a2 2 0 0 0 2.7-.716 1.96 1.96 0 0 0-.587-2.621l-6.87-4.759a1 1 0 0 1 1.139-1.644l6.869 4.758a3.982 3.982 0 0 1-2.26 7.256z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M29.738 60.983a4.02 4.02 0 0 1-2.656-7.043l2.671-2.34a4.022 4.022 0 0 1 5.676.369 4.022 4.022 0 0 1-.37 5.676l-2.671 2.345a4.006 4.006 0 0 1-2.65.993zm2.667-8.383a2.013 2.013 0 0 0-1.333.5L28.4 55.443a2.022 2.022 0 1 0 2.667 3.04l2.671-2.345a2.021 2.021 0 0 0-1.333-3.538z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M23.684 58.259c-.089 0-.178 0-.267-.008a4 4 0 0 1-2.762-1.36A4.036 4.036 0 0 1 21 51.182l4.462-3.917a4.022 4.022 0 0 1 5.676.369l-.723.693.751-.66a4.021 4.021 0 0 1-.369 5.676l-4.466 3.917a3.99 3.99 0 0 1-2.647.999zm4.425-9.994a2.007 2.007 0 0 0-1.331.5l-4.462 3.917a2.052 2.052 0 0 0 1.231 3.57 2 2 0 0 0 1.465-.5l4.462-3.917a2.022 2.022 0 0 0 .186-2.854l-.029-.033a2.006 2.006 0 0 0-1.384-.679 3.293 3.293 0 0 0-.139-.003z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M18.638 54.588c-.088 0-.177 0-.267-.008a4 4 0 0 1-2.762-1.36l-.109-.13a4.022 4.022 0 0 1 .371-5.674l5.173-4.541a4.021 4.021 0 0 1 5.676.369l.113.129a4.021 4.021 0 0 1-.371 5.674l-5.173 4.541a3.992 3.992 0 0 1-2.651 1zm5.053-10.712a2.008 2.008 0 0 0-1.331.5l-5.173 4.541A2.024 2.024 0 0 0 17 51.773l.113.129a2.023 2.023 0 0 0 2.853.184l5.173-4.541a2.022 2.022 0 0 0 .186-2.854l-.111-.127a2.007 2.007 0 0 0-1.387-.682 1.581 1.581 0 0 0-.136-.006z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M14.291 50.137c-.088 0-.178 0-.267-.009a4.048 4.048 0 0 1-2.424-7.075l3.239-2.843a4.021 4.021 0 0 1 5.676.369l.035.04a4.021 4.021 0 0 1-.369 5.676l-3.239 2.843a3.991 3.991 0 0 1-2.651.999zm3.2-8.927a2.008 2.008 0 0 0-1.331.5l-3.239 2.843a2.022 2.022 0 0 0-.186 2.854 2.036 2.036 0 0 0 2.888.226l3.239-2.843a2.022 2.022 0 0 0 .186-2.854l-.035-.04a2.007 2.007 0 0 0-1.388-.683l-.139-.003z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M12.477 44.612a.994.994 0 0 1-.6-.2l-3.417-2.6a1 1 0 0 1 1.211-1.592l3.417 2.6a1 1 0 0 1-.606 1.8zM58.519 45.72a1 1 0 0 1-.707-1.707l5.611-5.613a1 1 0 0 1 1.414 1.414l-5.611 5.611a1 1 0 0 1-.707.295z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            <path d="M66.17 43.645a1 1 0 0 1-.853-.476l-12.21-19.86a1 1 0 0 1 .24-1.314l12.093-9.366a1 1 0 0 1 1.587.567l5.947 25.947a1 1 0 0 1-.485 1.1l-5.831 3.277a.994.994 0 0 1-.488.125zm-10.889-20.62L66.517 41.3l4.341-2.44-5.43-23.692zM7.83 44a1 1 0 0 1-.489-.128L1.51 40.6a1 1 0 0 1-.485-1.1l5.948-25.944a1 1 0 0 1 1.587-.567l12.094 9.365a1 1 0 0 1 .24 1.314L8.683 43.528A1 1 0 0 1 7.83 44zm-4.688-4.778 4.341 2.439 11.236-18.276-10.147-7.857z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                        </g>
                    </svg>
                    <label>Partnership</label>
                </a>
            </li>
            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/transactions')) == APP_URL . '/transactions' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/transactions">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M31 12a1 1 0 0 1-.29.71l-6 6A1 1 0 0 1 24 19a1 1 0 0 1-.38-.07A1 1 0 0 1 23 18v-3h-9a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h9V6a1 1 0 0 1 1.71-.7l6 6a1 1 0 0 1 .29.7zm-13 5H9v-3a1 1 0 0 0-.62-.92 1 1 0 0 0-1.09.21l-6 6A1 1 0 0 0 1 20a1 1 0 0 0 .29.71l6 6A1 1 0 0 0 8 27a.84.84 0 0 0 .38-.08A1 1 0 0 0 9 26v-3h9a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1z" data-name="Layer 24" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                        </g>
                    </svg>
                    <label>Transactions<label>
                </a>
            </li>
            <li>
                <a <?php echo substr($path, 0, strlen(APP_URL . '/credits')) == APP_URL . '/credits' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/credits">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="M399.804 188.166c6.183 0 12.151.942 17.768 2.686l51.181-51.181-23.854-23.854-72.349 72.349zM503.213 174.132l-13.248-13.248-46.35 46.35c10.03 10.729 16.188 25.121 16.188 40.932v11.802l43.41-43.41c11.716-11.715 11.716-30.71 0-42.426zM423.686 94.605 337.868 8.787c-11.716-11.716-30.711-11.716-42.426 0l-179.38 179.38h214.062zM78.734 313.264h45.702v33.734H78.734z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                            <path d="M399.804 218.167H30c-16.569 0-30 13.431-30 30V482c0 16.569 13.431 30 30 30h369.804c16.568 0 30-13.431 30-30V248.167c0-16.569-13.432-30-30-30zm-351.07 65.097h105.702v93.734H48.734zm58.361 163.638H47.801v-30h59.294zm91.635 0h-59.294v-30h59.294zm91.637 0h-59.294v-30h59.294zm91.636 0h-59.294v-30h59.294z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                        </g>
                    </svg>
                    <label>Credit Cards</label>
                </a>
            </li>
            <?php if ($_SESSION['USER']->role == 'admin') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/delete-requests')) == APP_URL . '/delete-requests' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/delete-requests">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M15.501 2.002c-3.863 0-7 3.137-7 7 0 3.864 3.137 7 7 7s7-3.136 7-7c0-3.863-3.137-7-7-7zm0 2c2.76 0 5 2.241 5 5 0 2.76-2.24 5-5 5s-5-2.24-5-5c0-2.759 2.24-5 5-5zM3.501 28.002H16a1 1 0 0 1 0 2H2.501a1 1 0 0 1-1-1v-2a9 9 0 0 1 9-9H16a1 1 0 0 1 0 2h-5.499a7 7 0 0 0-7 7zM24.002 18.002c-3.587 0-6.499 2.912-6.499 6.499S20.415 31 24.002 31s6.499-2.912 6.499-6.499-2.912-6.499-6.499-6.499zm0 2c2.483 0 4.499 2.016 4.499 4.499S26.485 29 24.002 29s-4.499-2.016-4.499-4.499 2.016-4.499 4.499-4.499z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                                <path d="m27.177 19.901-7.775 7.775a1 1 0 0 0 1.414 1.414l7.775-7.775a.999.999 0 1 0-1.414-1.414z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="rgba(var(--text-color-rgb), 0.68)" class=""></path>
                            </g>
                        </svg>
                        <label>Delete Requests</label>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['USER']->role != 'admin') : ?>
                <li>
                    <a <?php echo substr($path, 0, strlen(APP_URL . '/profile')) == APP_URL . '/profile' ? 'class="active"' : '' ?> href="<?= APP_URL ?>/profile">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default nav-item-icon iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                            </g>
                        </svg>
                        <label>User Profile</label>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</aside>
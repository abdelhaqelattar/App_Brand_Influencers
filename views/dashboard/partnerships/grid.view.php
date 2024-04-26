<?php

use function PHPSTORM_META\type;

include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="data-table">
    <hr>
    <table class="w-100">
        <thead>
            <tr>
                <th>#ID</th>
                <th class="text-center">Status</th>
                <?php if ($_SESSION['USER']->role == 'admin') : ?>
                    <th>Influencer</th>
                    <th>Brand</th>
                <?php elseif ($_SESSION['USER']->role == 'influencer') : ?>
                    <th>Brand</th>
                <?php elseif ($_SESSION['USER']->role == 'brand') : ?>
                    <th>Influencer</th>
                <?php endif ?>
                <th>Amount</th>
                <th>Duration</th>
                <th>Issued Date</th>
                <?php if ($_SESSION['USER']->role != 'admin') : ?>
                    <th class="text-center">Actions</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data['results']) && count($data['results'])) : ?>
                <?php foreach ($data['results'] as $item) : ?>
                    <tr class="text-14">
                        <td><a href="">#<?= $item->id ?></a></td>
                        <td class="text-center">
                            <?php if ($item->status == 'approved') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 64 64" xml:space="preserve" class="">
                                    <g>
                                        <g data-name="Approve Stamp document">
                                            <path d="M54 10H20a6 6 0 0 0-6 6v29H5a1 1 0 0 0-1 1v2a6 6 0 0 0 6 6h34a6 6 0 0 0 6-6v-2h7a1 1 0 0 0 1-1v-2c2.22 0 .8-6-3.77-6A1.23 1.23 0 0 1 53 35.77c0-7 2.59-8.84 1.85-12A5 5 0 0 0 50 20v-1h9a1 1 0 0 0 1-1v-2a6 6 0 0 0-6-6ZM10 52a4 4 0 0 1-4-4v-1h32c0 1.72 0 3.22 1.49 5 .09.05 2.24 0-29.49 0Zm38-4a4 4 0 0 1-8 0v-2a1 1 0 0 0-1-1H16V16a4 4 0 0 1 4-4h29.53A6 6 0 0 0 48 16c0 6.18.37 3.56-1.54 5.48a5 5 0 0 0-1.39 2.72C44.57 27.31 47 28 47 35.77A1.23 1.23 0 0 1 45.77 37c-4.59 0-6 6-3.77 6v2a1 1 0 0 0 1 1h5Zm8-4H44v-1h12Zm-3.09-19.77C53.4 26.33 51 29 51 35.77A3.23 3.23 0 0 0 54.23 39a2.77 2.77 0 0 1 2.66 2H43.11a2.75 2.75 0 0 1 2.66-2A3.23 3.23 0 0 0 49 35.77v-1.19c0-4.84-2-8.28-2-9.58a3 3 0 0 1 5.91-.77ZM58 17h-8v-1a4 4 0 0 1 8 0Z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                            <path d="M36 35a6 6 0 1 1-2.31-4.71A1 1 0 0 0 35 28.73 8 8 0 1 0 38 35a1 1 0 1 0-2 0Z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                            <path d="M38.29 28.29 30 36.59l-2.29-2.3a1 1 0 0 0-1.42 1.42C29.41 38.82 29.42 39 30 39s-.07.49 9.71-9.29a1 1 0 0 0-1.42-1.42ZM21 18h22a1 1 0 0 0 0-2H21a1 1 0 0 0 0 2ZM43 21H21a1 1 0 0 0 0 2h22a1 1 0 0 0 0-2Z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                        </g>
                                    </g>
                                </svg>
                            <?php elseif ($item->status == 'declined') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <switch>
                                            <g>
                                                <path d="M487.5 146.5c-20.9-44.3-54-81.5-95.7-107.6-58-36.2-126.6-47.7-193.3-32.3C131.9 21.9 75.2 62.3 39 120.3 2.7 178.3-8.8 246.9 6.6 313.6 22 380.2 62.4 436.9 120.3 473.1c40.8 25.5 87.6 39 135.5 39h3.1c47.7-.6 94.1-14.4 134.3-39.8 11.7-7.4 15.1-22.8 7.7-34.5s-22.8-15.1-34.5-7.7c-32.3 20.5-69.7 31.6-108.1 32.1-39.4.5-77.9-10.4-111.5-31.3-46.7-29.2-79.2-74.8-91.5-128.4-12.3-53.8-3.1-109 26.1-155.7C141.6 50.5 269 21.1 365.3 81.3c33.6 21 60.2 50.9 77 86.5 16.4 34.7 22.8 73.2 18.5 111.2-1.5 13.7 8.3 26.1 22.1 27.6 13.7 1.5 26.1-8.3 27.6-22.1 5.3-47.1-2.7-94.9-23-138z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                                <path d="M342.8 169.2c-9.8-9.8-25.6-9.8-35.4 0L256 220.7l-51.4-51.4c-9.8-9.8-25.6-9.8-35.4 0s-9.8 25.6 0 35.4l51.4 51.4-51.4 51.4c-9.8 9.8-9.8 25.6 0 35.4 4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3l51.4-51.4 51.4 51.4c4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3c9.8-9.8 9.8-25.6 0-35.4L291.4 256l51.4-51.4c9.8-9.8 9.8-25.6 0-35.4z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                            </g>
                                        </switch>
                                    </g>
                                </svg>
                            <?php elseif ($item->status == 'Payment Pending') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 566.761 566.761" xml:space="preserve" class="">
                                    <g>
                                        <path d="M418.91 554.44c-81.318 0-147.851-66.533-147.851-147.851s66.533-147.851 147.851-147.851 147.851 66.533 147.851 147.851S500.228 554.44 418.91 554.44zm0-246.418c-54.212 0-98.567 44.355-98.567 98.567s44.355 98.567 98.567 98.567 98.567-44.355 98.567-98.567-44.355-98.567-98.567-98.567z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                        <path d="M418.91 406.589c-14.785 0-24.642-9.857-24.642-24.642v-24.642c0-14.785 9.857-24.642 24.642-24.642s24.642 9.857 24.642 24.642v24.642c0 14.785-9.857 24.642-24.642 24.642zM418.91 480.514c-7.393 0-12.321-2.464-17.249-7.393-4.928-4.928-7.393-9.857-7.393-17.249s2.464-12.321 7.393-17.249c9.857-9.857 24.642-9.857 34.498 0 4.928 4.928 7.393 9.857 7.393 17.249 0 7.393-2.464 12.321-7.393 17.249-4.928 4.929-9.856 7.393-17.249 7.393zM468.194 12.321H73.925C34.498 12.321 0 46.819 0 88.71v263.667c0 44.355 34.498 78.854 73.925 78.854h147.851c12.321 0 24.642-12.321 24.642-24.642s-12.321-24.642-24.642-24.642H73.925c-12.321 0-24.642-12.321-24.642-27.106V184.813h443.552v49.284c0 12.321 12.321 24.642 24.642 24.642s24.642-12.321 24.642-24.642V88.71c0-41.891-32.034-76.389-73.925-76.389zM49.284 135.53V88.71c0-14.785 12.321-27.106 24.642-27.106h394.268c12.321 0 24.642 12.321 24.642 27.106v46.819H49.284z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                        <path d="M172.492 283.38h-49.284c-14.785 0-24.642-9.857-24.642-24.642s9.857-24.642 24.642-24.642h49.284c14.785 0 24.642 9.857 24.642 24.642s-9.857 24.642-24.642 24.642z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                    </g>
                                </svg>
                            <?php elseif ($item->status == 'Done') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 191.667 191.667" xml:space="preserve" class="">
                                    <g>
                                        <path d="M95.833 0C42.991 0 0 42.99 0 95.833s42.991 95.834 95.833 95.834 95.833-42.991 95.833-95.834S148.676 0 95.833 0zm55.029 79.646-60.207 60.207a13.463 13.463 0 0 1-9.583 3.969c-3.62 0-7.023-1.409-9.583-3.969l-30.685-30.685a13.464 13.464 0 0 1-3.97-9.583c0-3.621 1.41-7.024 3.97-9.584a13.46 13.46 0 0 1 9.583-3.97c3.62 0 7.024 1.41 9.583 3.971l21.101 21.1 50.623-50.623a13.463 13.463 0 0 1 9.583-3.969c3.62 0 7.023 1.409 9.583 3.969 5.286 5.286 5.286 13.883.002 19.167z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                    </g>
                                </svg>
                            <?php else : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 24 24" xml:space="preserve" class="">
                                    <g>
                                        <path fill="rgba(var(--text-color-rgb), 0.7)" d="M12 20c1.497 0 2.854-.35 4.07-1.053a7.556 7.556 0 0 0 2.877-2.877C19.65 14.842 20 13.485 20 12c0-1.497-.35-2.854-1.053-4.07a7.397 7.397 0 0 0-2.877-2.877C14.854 4.35 13.497 4 12 4c-1.485 0-2.842.35-4.07 1.053A7.554 7.554 0 0 0 5.053 7.93C4.35 9.146 4 10.503 4 12c0 1.485.35 2.842 1.053 4.07a7.72 7.72 0 0 0 2.877 2.877C9.158 19.65 10.515 20 12 20zm0 2a9.884 9.884 0 0 1-5.018-1.333 10.107 10.107 0 0 1-3.649-3.65A9.884 9.884 0 0 1 2 12c0-1.813.444-3.485 1.333-5.018a9.97 9.97 0 0 1 3.65-3.631A9.786 9.786 0 0 1 12 2c1.813 0 3.485.45 5.018 1.35A9.796 9.796 0 0 1 20.648 7C21.55 8.532 22 10.199 22 12s-.45 3.474-1.35 5.017a9.929 9.929 0 0 1-3.65 3.65A9.79 9.79 0 0 1 12 22zM8 10.667c.363 0 .673.134.93.403.269.257.403.567.403.93s-.134.678-.403.947c-.257.258-.567.386-.93.386s-.678-.128-.947-.386c-.258-.269-.386-.584-.386-.947s.128-.672.386-.93c.269-.269.584-.403.947-.403zm4 0c.363 0 .672.134.93.403.269.257.403.567.403.93s-.134.678-.403.947c-.257.258-.567.386-.93.386s-.678-.128-.947-.386c-.258-.269-.386-.584-.386-.947s.128-.672.386-.93c.269-.269.584-.403.947-.403zm4 0c.363 0 .672.134.93.403.269.257.403.567.403.93s-.134.678-.403.947c-.257.258-.567.386-.93.386s-.678-.128-.947-.386c-.258-.269-.386-.584-.386-.947s.128-.672.386-.93c.269-.269.584-.403.947-.403z" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                    </g>
                                </svg>
                            <?php endif ?>
                        </td>
                        <?php if ($_SESSION['USER']->role == 'admin') : ?>
                            <td>
                                <div class="d-flex align-center">
                                    <img src="<?= $item->influencer->avatar ?? 'https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/avatar-3.47317f35.png' ?>" alt="">
                                    <div>
                                        <p><?= $item->influencer->first_name ?></p>
                                        <p class="text-14" style="  color: rgba(var(--text-color-rgb), 0.38);"><?= $item->influencer->email ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-center">
                                    <img src="<?= $item->brand->avatar ?? 'https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/avatar-3.47317f35.png' ?>" alt="">
                                    <div>
                                        <p><?= $item->brand->name ?></p>
                                        <p class="text-14" style="  color: rgba(var(--text-color-rgb), 0.38);"><?= $item->brand->email ?></p>
                                    </div>
                                </div>
                            </td>
                        <?php else : ?>
                            <td>
                                <div class="d-flex align-center">
                                    <img src="<?= $item->avatar ?? 'https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/avatar-3.47317f35.png' ?>" alt="">
                                    <div>
                                        <p><?= $item->name ?></p>
                                        <p class="text-14" style="  color: rgba(var(--text-color-rgb), 0.38);"><?= $item->email ?></p>
                                    </div>
                                </div>
                            </td>
                        <?php endif ?>
                        <td>$ <?= number_format($item->amount, 2, '.', ',') ?></td>
                        <td><?= $item->duration . ' ' . $item->duration_unit ?></td>
                        <td><?= issued_date($item->start_date, $item->duration, $item->duration_unit) ?? 'NULL' ?></td>
                        <?php if ($_SESSION['USER']->role != 'admin') : ?>
                            <td class="text-center">
                                <?php if (!$item->is_sender && gettype($item->status) == "NULL") : ?>
                                    <form action="<?= APP_URL ?>/partnership/<?= $item->id ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="status" value="approved">
                                        <button class="btn-empty">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 12l5 5L20 7"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="<?= APP_URL ?>/partnership/<?= $item->id ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="status" value="declined">
                                        <button class="btn-empty">
                                            <svg class="close" onclick="closemodal()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </form>
                                <?php elseif ($_SESSION['USER']->role == "brand" && $item->status == 'Payment Pending') : ?>
                                    <form action="<?= APP_URL ?>/partnership/<?= $item->id ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="status" value="pay">
                                        <button class="btn-empty">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 512 512" xml:space="preserve" class="">
                                                <g>
                                                    <path fill-rule="evenodd" d="M253.507 428.014v22.23H98.747v-22.23zm26.949-13.475a13.428 13.428 0 0 0-13.474-13.472H85.276A13.428 13.428 0 0 0 71.8 414.539v49.18a13.5 13.5 0 0 0 13.476 13.475h181.706a13.5 13.5 0 0 0 13.474-13.475zM193.415 88.188a13.459 13.459 0 0 0 19.016-.23l10.421-10.908v49.6a13.475 13.475 0 0 0 26.949 0V77.048l10.38 10.868a13.468 13.468 0 1 0 19.326-18.763l-33.522-34.472a13.337 13.337 0 0 0-19.314 0l-33.526 34.472a13.46 13.46 0 0 0 .27 19.035zM434.5 363.565a13.474 13.474 0 1 0 0 26.947h.144a13.474 13.474 0 0 0 0-26.947zm22.644 80.278h-17.996a66.862 66.862 0 0 1 0-133.724h17.994v-68.154H79.267a84.55 84.55 0 0 1-50.936-16.954l-7.188-5.395v265.66A26.786 26.786 0 0 0 47.905 512h409.237v-68.157zm-436-286.875a58.175 58.175 0 0 1 58.123-58.161h45.51l.59 3.8a112.3 112.3 0 0 0 221.918 0l.59-3.8h46.506v116.212H79.267a58.153 58.153 0 0 1-58.124-58.051zm129.841-71.633a85.342 85.342 0 1 1 85.341 85.332 85.433 85.433 0 0 1-85.341-85.332zm339.872 251.73V416.9h-51.709a39.916 39.916 0 0 1 0-79.832z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                <?php elseif ($item->status == 'approved' && $_SESSION['USER']->role == "influencer" && compare_date(issued_date($item->start_date, $item->duration, $item->duration_unit), date("Y-m-d H:i:s")) == 1) : ?>
                                    <form action="<?= APP_URL ?>/partnership/<?= $item->id ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="status" value="close">
                                        <button class="btn-empty">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" viewBox="0 0 512 512" xml:space="preserve" class="">
                                                <g>
                                                    <path fill-rule="evenodd" d="M98.753 427.987h154.76v22.25H98.753zm-26.944-13.468v49.186a13.468 13.468 0 0 0 13.468 13.476h181.712a13.469 13.469 0 0 0 13.468-13.476v-49.186a13.464 13.464 0 0 0-13.468-13.476H85.277a13.464 13.464 0 0 0-13.468 13.476zm362.847-50.983h-.144a13.472 13.472 0 1 0 0 26.944h.144a13.472 13.472 0 1 0 0-26.944zm-241.5-261.975 33.52 34.451a13.475 13.475 0 0 0 19.318 0l33.529-34.451A13.476 13.476 0 0 0 260.2 82.775l-10.392 10.669V44.06a13.476 13.476 0 0 0-26.952 0v49.384l-10.388-10.669a13.471 13.471 0 1 0-19.311 18.786zm264 140.447H79.277a84.734 84.734 0 0 1-50.954-16.975l-7.183-5.379v265.588A26.8 26.8 0 0 0 47.914 512h409.241v-68.163h-18a66.837 66.837 0 1 1 0-133.674h18v-68.155zm33.705 95.107v79.77h-51.7a39.885 39.885 0 1 1 0-79.77zM79.277 98.814h45.5l.589 3.8a112.3 112.3 0 0 0 221.926 0l.589-3.8h46.505v116.249H79.277a58.125 58.125 0 1 1 0-116.249zM236.332 0a85.337 85.337 0 1 1-85.345 85.345A85.43 85.43 0 0 1 236.332 0z" fill="rgba(var(--text-color-rgb), 0.7)" data-original="rgba(var(--text-color-rgb), 0.7)" class=""></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                <?php endif ?>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M8 4h11a2 2 0 1 1 0 4h-7M8 8H5a2 2 0 0 1-.826-3.822"></path>
                                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 1.824-1.18M19 15V8m-9 4h2M3 3l18 18"></path>
                                        </g>
                                    </svg>
                                </span>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">You have no partnerships until now</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php if ($data && isset($data['page'])) : ?>
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
    <?php endif ?>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
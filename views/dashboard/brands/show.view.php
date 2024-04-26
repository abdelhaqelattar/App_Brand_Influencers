<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="profile">
    <div class="header">
        <img src="<?= APP_URL ?>/assets/images/user-profile-header-bg-ff6c2352.png" alt="">
        <div class="info d-flex w-100 flex-wrap gap-3   ">
            <div class="avatar">
                <img src="<?= $avatar ?? APP_URL . "/assets/images/brand.png" ?>">
            </div>
            <div class="text">
                <div class="d-flex align-center space-between mb-2">
                    <h3 class="m-0"><?= $name ?></h3>
                    <?php if ($allowable) : ?>
                        <form id="rating-form" action="<?= APP_URL ?>/rating/<?= $user_id ?>" method="POST">
                            <div class="rating">
                                <a <?= $rating == 5 ? 'class="rated"' : '' ?> href="#5" title="Give 5 stars" data-value="5">★</a>
                                <a <?= $rating == 4 ? 'class="rated"' : '' ?> href="#4" title="Give 4 stars" data-value="4">★</a>
                                <a <?= $rating == 3 ? 'class="rated"' : '' ?> href="#3" title="Give 3 stars" data-value="3">★</a>
                                <a <?= $rating == 2 ? 'class="rated"' : '' ?> href="#2" title="Give 2 stars" data-value="2">★</a>
                                <a <?= $rating == 1 ? 'class="rated"' : '' ?> href="#1" title="Give 1 star" data-value="1">★</a>
                            </div>
                            <input type="hidden" name="rating" id="rating-value" value="">
                        </form>
                    <?php endif; ?>
                </div>
                <div class="d-flex gap-2 space-between w-100 flex-wrap">
                    <div class="d-flex gap-2 align-center">
                        <span class="d-flex align-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 20px; height: 20px; width: 20px;">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M19 3h-4a2 2 0 0 0-2 2v12a4 4 0 0 0 8 0V5a2 2 0 0 0-2-2"></path>
                                    <path d="m13 7.35l-2-2a2 2 0 0 0-2.828 0L5.344 8.178a2 2 0 0 0 0 2.828l9 9"></path>
                                    <path d="M7.3 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h12m0-4v.01"></path>
                                </g>
                            </svg>
                            <span><?= $revenue ?></span>
                        </span>
                        <span>
                            <span>★ <?= number_format($rate, 1); ?></span>
                        </span>
                        <span class="d-flex align-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 20px; height: 20px; width: 20px;">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="11" r="3"></circle>
                                    <path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"></path>
                                </g>
                            </svg>
                            <span><?= $country ?></span>
                        </span>
                    </div>
                    <div class="buttons">
                        <a href="<?= APP_URL ?>/chat/<?= $user_id ?>"><button type="button" class="btn btn-primary"> Contact </button></a>
                        <button type="button" class="btn btn-primary" onclick="openmodal()"> Be Partners </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap gap-24">
        <div class="col-12 col-md-4 about">
            <p>ABOUT</p>
            <ul>
                <li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                            </g>
                        </svg>
                    </span>
                    <span><strong>Full Name:</strong> <?= $name ?></span>
                </li>
                <li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 17.75l-6.172 3.245l1.179-6.873l-5-4.867l6.9-1l3.086-6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                        </svg>
                    </span>
                    <span><strong>Revenue:</strong> <?= $revenue ?></span>
                </li>
                <?php if ($country) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5v16M19 5v9M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0"></path>
                            </svg>
                        </span>
                        <span><strong>Country:</strong> <?= $country ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($language) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M4 5h7M9 3v2c0 4.418-2.239 8-5 8"></path>
                                    <path d="M5 9c-.003 2.144 2.952 3.908 6.7 4m.3 7l4-9l4 9m-.9-2h-6.2"></path>
                                </g>
                            </svg>
                        </span>
                        <span><strong>Language:</strong> <?= $language ?></span>
                    </li>
                <?php endif; ?>
            </ul>
            <p>CONTACTS</p>
            <ul>
                <?php if ($contact) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"></path>
                            </svg>
                        </span>
                        <span><strong>Contact:</strong> <?= $contact ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($email) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" width="1em" height="1em" viewBox="0 0 24 24" data-v-c0c3537f="" style="font-size: 20px; height: 20px; width: 20px;">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="7" r="4"></circle>
                                    <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                                </g>
                            </svg>
                        </span>
                        <span><strong>Email:</strong> <?= $email ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($facebook) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 426.667 426.667" style="font-size: 20px; height: 20px; width: 20px;" xml:space="preserve" class="">
                                <g>
                                    <path d="M373.332 426.668H266.668v-160h51.73L332 213.332h-65.332v-64c0-17.672 14.324-32 32-32h32V64h-32c-47.098.074-85.262 38.234-85.336 85.332v64H160v53.336h53.332v160h-160C23.879 426.668 0 402.789 0 373.332v-320C0 23.879 23.879 0 53.332 0h320c29.457 0 53.336 23.879 53.336 53.332v320c0 29.457-23.879 53.336-53.336 53.336zM288 405.332h85.332c17.676 0 32-14.324 32-32v-320c0-17.672-14.324-32-32-32h-320c-17.672 0-32 14.328-32 32v320c0 17.676 14.328 32 32 32H192V288h-53.332v-96H192v-42.668c.074-58.879 47.785-106.594 106.668-106.664H352v96h-53.332c-5.89 0-10.668 4.773-10.668 10.664V192h71.465l-24.531 96H288zm0 0" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span><strong>Facebook:</strong> <?= $facebook ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($instagram) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="font-size: 20px; height: 20px; width: 20px;" xml:space="preserve" class="">
                                <g>
                                    <path d="M371.643 0H140.357C62.964 0 0 62.964 0 140.358v231.285C0 449.037 62.964 512 140.357 512h231.286C449.037 512 512 449.037 512 371.643V140.358C512 62.964 449.037 0 371.643 0zm110.121 371.643c0 60.721-49.399 110.121-110.121 110.121H140.357c-60.721 0-110.121-49.399-110.121-110.121V140.358c0-60.722 49.4-110.122 110.121-110.122h231.286c60.722 0 110.121 49.4 110.121 110.122v231.285z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                                    <path d="M256 115.57c-77.434 0-140.431 62.997-140.431 140.431S178.565 396.432 256 396.432c77.434 0 140.432-62.998 140.432-140.432S333.434 115.57 256 115.57zm0 250.627c-60.762 0-110.196-49.435-110.196-110.197S195.238 145.804 256 145.804c60.763 0 110.197 49.435 110.197 110.197S316.763 366.197 256 366.197zM404.831 64.503c-23.526 0-42.666 19.141-42.666 42.667 0 23.526 19.14 42.666 42.666 42.666 23.526 0 42.666-19.141 42.666-42.667s-19.14-42.666-42.666-42.666zm0 55.096c-6.853 0-12.43-5.576-12.43-12.43s5.577-12.43 12.43-12.43c6.854 0 12.43 5.577 12.43 12.43s-5.576 12.43-12.43 12.43z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span><strong>Instagram:</strong> <?= $instagram ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($twitter) : ?>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 511.999 511.999" style="font-size: 20px; height: 20px; width: 20px;" xml:space="preserve" class="">
                                <g>
                                    <path d="M509.738 109.538a15.263 15.263 0 0 0-14.332-7.215l-25.53 2.224 24.403-49.193a15.268 15.268 0 0 0-20.393-20.498l-64.587 31.631c-39.903-21.066-89.756-14.813-124.06 16.436-28.63 26.08-43.679 66.187-40.873 106.183-74.829-7.5-138.169-50.331-175.623-119.537a15.269 15.269 0 0 0-25.7-1.817c-23.23 31.382-24.86 74.41-6.649 109.809-5.02-1.268-10.362-2.984-16.286-4.963A15.266 15.266 0 0 0 .205 189.564c7.206 43.688 32.682 77.264 72.926 97.138a128.229 128.229 0 0 1-16.024 4.44 15.267 15.267 0 0 0-8.034 25.378c28.981 30.978 70.845 46.225 100.581 53.539-33.81 26.477-70.307 30.908-123.341 29.087-6.139-.186-11.795 3.272-14.376 8.837a15.27 15.27 0 0 0 2.544 16.681c22.108 24.369 102.654 51.847 187.326 53.907 3.349.081 6.765.125 10.253.125 59.451-.001 138.022-12.745 194.419-69.142 42.687-42.686 69.387-91.827 79.356-146.053 8.052-43.797 2.963-78.869.518-95.725-.18-1.239-.372-2.554-.528-3.704l23.881-38.49a15.267 15.267 0 0 0 .032-16.044zm-53.606 62.622c4.531 31.224 18.316 126.24-71.245 215.801-52.06 52.059-127.888 61.407-182.338 60.084-46.461-1.13-88.019-10.016-118.139-20.15 12.229-1.5 23.127-3.814 33.414-7.011 28.359-8.815 52.317-24.676 75.395-49.915a15.268 15.268 0 0 0-9.327-25.447c-14.559-1.866-58.305-9.23-92.753-32.992 9.927-4.06 19.501-9.141 28.643-15.205a15.27 15.27 0 0 0-4.569-27.494c-28.195-7.392-62.223-23.932-77.914-60.855 10.02 1.756 20.915 2.181 32.535-.424a15.268 15.268 0 0 0 7.645-25.504c-19.524-20.222-26.825-49.364-20.561-74.301 20.514 29.981 46.503 55.213 76.279 73.868 38.091 23.865 82.549 37.054 128.57 38.137a15.32 15.32 0 0 0 12.157-5.573 15.27 15.27 0 0 0 3.107-13.007c-7.918-35.595 3.375-73.541 28.771-96.674 26.34-23.995 65.269-27.635 94.666-8.846a15.27 15.27 0 0 0 14.938.846l31.541-15.448-16.509 33.281a15.265 15.265 0 0 0 1.065 15.388 15.252 15.252 0 0 0 13.938 6.607l22.242-1.937-10.246 16.515c-3.439 5.543-2.726 10.461-1.305 20.256z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                                </g>
                            </svg>
                        </span>
                        <span><strong>Twitter:</strong> <?= $twitter ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($linkedin) : ?>
                <li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="font-size: 20px; height: 20px; width: 20px;" xml:space="preserve" class="">
                            <g>
                                <path d="M69.12 4.267c-18.773 0-35.84 6.827-48.64 19.627C6.827 37.547 0 54.613 0 72.533c0 18.773 7.68 35.84 20.48 48.64 12.8 12.8 30.72 20.48 47.787 19.627h1.707c17.067 0 33.28-6.827 46.08-19.627 12.8-12.8 20.48-29.867 20.48-48.64.853-17.92-6.827-34.987-19.627-47.787C104.107 11.093 87.04 4.267 69.12 4.267zm34.987 104.96c-9.387 9.387-22.187 15.36-35.84 14.507-12.8 0-26.453-5.12-35.84-14.507-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453 15.36-36.693c9.387-9.387 22.187-14.507 36.693-14.507 12.8 0 25.6 5.12 34.987 14.507 10.24 10.24 15.36 23.04 15.36 36.693s-5.12 27.306-15.36 36.693zM102.4 157.867H33.28c-13.653 0-24.747 11.093-24.747 25.6v298.667c0 13.653 11.947 25.6 25.6 25.6H102.4c13.653 0 25.6-11.947 25.6-24.747v-299.52c0-13.654-11.947-25.6-25.6-25.6zm8.533 325.12c0 4.267-4.267 7.68-8.533 7.68H34.133c-4.267 0-8.533-4.267-8.533-8.533V183.467c0-4.267 3.413-8.533 7.68-8.533h69.12c4.267 0 8.533 4.267 8.533 8.533v299.52zM392.533 149.333h-17.92c-33.28 0-64.853 14.507-85.333 37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H186.88c-7.68 0-17.067 6.827-17.067 16.213v318.293c0 9.387 9.387 15.36 17.067 15.36h93.867c7.68 0 17.067-5.973 17.067-15.36v-184.32c0-28.16 20.48-50.347 46.933-50.347 13.653 0 26.453 5.12 35.84 14.507 8.533 7.68 11.947 19.627 11.947 34.987v183.467c0 8.533 8.533 17.067 17.067 17.067h85.333c8.533 0 17.067-8.533 17.067-17.067v-220.16C512 202.24 459.947 149.333 392.533 149.333zm102.4 340.48-.853.853h-83.627L409.6 307.2c0-20.48-5.12-35.84-16.213-46.933-12.8-12.8-29.867-19.627-47.787-19.627-35.84.853-64 29.867-64 67.413v182.613h-93.867V174.933h84.48l.853.853v53.76l23.04-23.04.853-.853c17.067-23.893 46.933-39.253 78.507-39.253h17.92c57.173 0 101.547 46.08 101.547 104.107v219.306z" fill="rgba(var(--text-color-rgb), 0.68)" data-original="var(--dark-color)" class=""></path>
                            </g>
                        </svg>
                    </span>
                    <span><strong>LinkedIn:</strong> <?= $linkedin ?></span>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="flex-1">
            <div class="partnership ">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark v-icon--size-default iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="m4 16l6-7l5 5l5-6"></path>
                            <circle cx="15" cy="14" r="1"></circle>
                            <circle cx="10" cy="9" r="1"></circle>
                            <circle cx="4" cy="16" r="1"></circle>
                            <circle cx="20" cy="8" r="1"></circle>
                        </g>
                    </svg>
                    <span>Activity Timeline</span>
                </h3>
                <?php if ($partnerships) : ?>
                    <?php foreach ($partnerships as $part) : ?>
                        <div class="timeline-item d-flex space-between">
                            <div class="left">
                                <h4>Influencer Meeting</h4>
                                <p>Start new partnership</p>
                                <div class="d-flex">
                                    <img src="<?= $part['avatar'] ?>" alt="">
                                    <div>
                                        <h4><?= $part['username'] ?> (Influencer)</h4>
                                        <p>Influencer</p>
                                    </div>
                                </div>
                            </div>
                            <span><?= getTimeDiff($part['start_date']) ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center">No Partnerships Found</p>
                <?php endif; ?>
            </div>
            <div class="reviews my-5">
                <div class="card p-24">
                    <div class="card-title">Reviews</div>
                    <?php if ($allowable) : ?>
                        <form class="d-flex align-center gap-2 mb-2" action="<?= APP_URL ?>/review/<?= $user_id ?>" method="POST">
                            <div class="flex-1 form-group">
                                <textarea class="w-100" style="resize: vertical;" name="review" rows="1" placeholder="Write your review here"></textarea>
                            </div>
                            <button class="btn btn-primary">✓</button>
                        </form>
                    <?php endif; ?>
                    <div class="mt-5">
                        <?php if ($reviews) : ?>
                            <?php foreach ($reviews as $review) : ?>
                                <div class="review-item d-flex space-between">
                                    <div class="left">
                                        <div class="d-flex gap-3">
                                            <img src="<?= $review['avatar'] ?>" alt="">
                                            <div>
                                                <h4><?= $review['username'] ?></h4>
                                                <p><?= $review['comment'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span><?= getTimeDiff($review['created_at']) ?></span>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p class="text-center">No Reviews Found</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <input type="hidden" name="to" value="<?= $user_id ?>">
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

    // Add a click event listener to each star anchor
    document.querySelectorAll('.rating a').forEach(anchor => {
        anchor.addEventListener('click', event => {
            event.preventDefault(); // Prevent the default link behavior
            const ratingValue = anchor.dataset.value; // Get the rating value from the data-value attribute
            document.getElementById('rating-value').value = ratingValue; // Set the rating value in the hidden input field
            document.getElementById('rating-form').submit(); // Submit the form
        });
    });
</script>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
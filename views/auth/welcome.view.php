<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= APP_URL ?>/css/dashboard/dashboard.css">
    <style>
        /**
            * use svg as icon
            * use max-width and max-height to control the size of the icon
         */ 
        svg {
            max-width: 100px;
            max-height: 100px;
            margin: auto;
            display: block;
        }
        /**
           * use gap to control the space between elements
         */


        .roles {
            gap: 50px;
            margin-top: 75px;
        }

        .role-choice {
            background-color: var(--bgr-tertiary-color);
            border-radius: 5px;
            padding: 40px 30px 30px;
        }

        .light .role-choice {
            background-color: var(--bgr-secondary-color);
        }

        .role-choice button {
            margin-top: 20px;
        }

        .profile {
            margin: auto;
            margin-top: 50px;
        }
        /**
            * spicify width of input in class profile
         */

        .profile input {
            width: 85%;
        }

        .profile p {
            margin-bottom: 20px;
        }

        .profile .btns {
            margin-top: 20px;
            gap: 20px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="layout-content w-100">
             <!-- use header  to to create a header in this page -->
            <header>
                <ul class="right">
                    <!-- use li to create a list that contains the icons each icon is in li -->
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 24px; height: 24px; width: 24px;">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 1 0-5.656-5.656a4 4 0 0 0 5.656 5.656zm-8.485 2.829l-1.414 1.414M6.343 6.343L4.929 4.929m12.728 1.414l1.414-1.414m-1.414 12.728l1.414 1.414M4 12H2m10-8V2m8 10h2m-10 8v2"></path>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 24px; height: 24px; width: 24px;">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        </svg>
                    </li>
                    <li>
                        <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/avatar-1.129659bb.png" alt="">
                    </li>
                </ul>
            </header>
            <main>
                <!-- use two div in section to create two columns  the first column is for the roles inflencer and the second is for the brand -->
                <section id="roles" class="roles d-flex justify-center text-center">
                    <div class="role-choice col-12 col-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M246.169 470.034a8 8 0 0 1-8 8h-36.255a8 8 0 0 1 0-16h36.255a8 8 0 0 1 8 8zm213.067-188.367A14.479 14.479 0 0 1 449.1 299.3l-8.485 2.257a14.389 14.389 0 0 1-17.61-10.157l-1.175-4.386a104.649 104.649 0 0 0-53.291-2.619l11.468 42.828a8 8 0 0 1-5.658 9.8l-14.961 4.006v122.485A40.532 40.532 0 0 1 318.9 504H121.182a40.532 40.532 0 0 1-40.487-40.486V244.228H46.629a29.918 29.918 0 0 1-29.884-29.884v-72.6a29.918 29.918 0 0 1 29.884-29.884h34.066V78.307a40.532 40.532 0 0 1 40.487-40.486H284.91A29.916 29.916 0 0 1 314.792 8h90.823A29.918 29.918 0 0 1 435.5 37.884v72.6a29.932 29.932 0 0 1-29.884 29.913h-46.228v60.856a103.391 103.391 0 0 0 32.982-24.176l-1.174-4.379a14.411 14.411 0 0 1 10.2-17.615l8.4-2.262a14.419 14.419 0 0 1 17.633 10.2l9.141 34.105a27.34 27.34 0 0 1 25.384 20.233 27.321 27.321 0 0 1-11.865 30.2zm-17.964-67.021 4.125 15.388a11.164 11.164 0 0 0 1.11-8.531 11.293 11.293 0 0 0-5.235-6.857zm-92.391 58.19-12.591-47.021-36.805 9.863a3.593 3.593 0 0 0-2.506 4.38l10.743 40.107a3.588 3.588 0 0 0 4.378 2.535zM300.908 110.48a13.914 13.914 0 0 0 13.884 13.913h9.3a8 8 0 0 1 8 8v5.254l10.205-10.76a8 8 0 0 1 5.805-2.494h57.515A13.914 13.914 0 0 0 419.5 110.48v-72.6A13.9 13.9 0 0 0 405.615 24h-90.823a13.9 13.9 0 0 0-13.884 13.884zM190.965 53.821c2.439 2.729 4.891 4.467 7.746 4.467h44.675c2.41 0 3.97-1.14 6.365-4.467zM46.629 228.228h57.516a8 8 0 0 1 5.807 2.5l10.2 10.769v-5.267a8 8 0 0 1 8-8h9.3a13.9 13.9 0 0 0 13.884-13.884v-72.6a13.9 13.9 0 0 0-13.884-13.884H46.629a13.9 13.9 0 0 0-13.884 13.884v72.6a13.9 13.9 0 0 0 13.884 13.882zm50.066 16V436.04h34.147v-65.7c0-26.513 22.956-48.083 51.172-48.083h6.9a64.148 64.148 0 0 1-7.53-9.956c-7.918-12.851-12.646-30.2-12.646-46.42a56.446 56.446 0 0 1 112.891 0c0 20.744-6.919 42.253-20.149 56.376h6.876c28.216 0 51.172 21.57 51.172 48.083v65.7h23.857V335.31l-18.513-39.471-8.635 2.316a19.7 19.7 0 0 1-5.086.672 19.614 19.614 0 0 1-18.89-14.535l-10.741-40.1a19.631 19.631 0 0 1 13.793-23.963l44.562-11.942c1.185-.318 2.35-.658 3.51-1v-58.3L329.9 163.212a8 8 0 0 1-13.805-5.5v-17.319h-1.3a29.932 29.932 0 0 1-29.884-29.913V53.821h-12.867a5.31 5.31 0 0 0-4.642 2.4c-.652.922-1.3 1.919-1.977 2.974-3.882 6.012-9.749 15.1-22.039 15.1h-44.675c-13.361 0-20.989-10.922-25.547-17.447l-.452-.648a5.377 5.377 0 0 0-4.645-2.372h-46.885A24.514 24.514 0 0 0 96.7 78.307v33.556h40.757a29.918 29.918 0 0 1 29.884 29.884v72.6a29.918 29.918 0 0 1-29.884 29.884h-1.3v17.339a8 8 0 0 1-13.807 5.5l-21.65-22.842zm187.374 150.857v40.955h19.462v-65.7c0-17.691-15.778-32.083-35.172-32.083h-86.345c-19.394 0-35.172 14.392-35.172 32.083v65.7h19.433v-40.955a8 8 0 0 1 16 0v40.955h85.794v-40.955a8 8 0 0 1 16 0zm-58.882-72.83c23.477 0 35.209-21.952 39.012-41.9-16.219-2.009-31.347-6.011-50.226-19.761l-28.261 17.112c3.241 20.6 14.952 44.549 39.475 44.549zM210.328 244.1a8 8 0 0 1 9.084.552c17.8 13.974 30.784 17.816 46.183 19.762a40.437 40.437 0 0 0-80.3-5.156zm133.06 219.418V452.04H96.7v11.474A24.514 24.514 0 0 0 121.182 488H318.9a24.514 24.514 0 0 0 24.488-24.486zm19.094-139.881-9.462-35.341-12.446 3.337 15.78 33.645zm54.568-54.457-19.892-74.234a120.756 120.756 0 0 1-45.475 26.5L364.4 268.93a122.919 122.919 0 0 1 52.65.246zm26.319 15.094L412.39 168.689l-5.319 1.433 30.968 115.566zm51.612-75.8a8 8 0 0 0-9.8-5.653l-12.36 3.317a8 8 0 1 0 4.147 15.453l12.359-3.317a8 8 0 0 0 5.654-9.802zm-9.065 35.733-11.084-6.379a8 8 0 0 0-7.98 13.868l11.084 6.378a8 8 0 0 0 7.98-13.867zM451.929 196.1a8 8 0 0 0 10.929-2.923l6.407-11.083a8 8 0 0 0-13.854-8.007l-6.406 11.083a8 8 0 0 0 2.924 10.93zm-342.273 21.681-17.618-8.667-17.645 8.668a8 8 0 0 1-11.446-8.325l2.811-19.433-13.7-14.1a8 8 0 0 1 4.382-13.459l19.36-3.329 9.161-17.378a8 8 0 0 1 14.154 0l9.16 17.377 19.362 3.329a8 8 0 0 1 4.382 13.459l-13.7 14.1 2.787 19.439a8 8 0 0 1-11.45 8.314zM104.1 181.7l5.866-6.036-8.286-1.425a8 8 0 0 1-5.722-4.154l-3.921-7.439-3.922 7.439a8 8 0 0 1-5.722 4.154l-8.285 1.424 5.866 6.037a8 8 0 0 1 2.179 6.72l-1.2 8.314 7.56-3.713a8 8 0 0 1 7.058 0l7.545 3.711-1.193-8.324a8 8 0 0 1 2.177-6.708zm222.4-80.056h67.409a8 8 0 0 0 0-16H326.5a8 8 0 0 0 0 16zm0-38.92h67.409a8 8 0 0 0 0-16H326.5a8 8 0 0 0 0 16z" fill="rgba(var(--text-color-rgb), 0.87)" data-original="var(--dark-color)" class=""></path>
                            </g>
                        </svg>
                        <h3>I am an Influencer</h3>
                        <p>I want to contact with brands for partnership!</p>
                        <!-- use the onclick event to call the function chooseRole() that will be explained below -->
                        <button onclick="chooseRole('influencer')" class="w-100 btn btn-outline-primary">SELECT</button>
                    </div>
                    <div class="role-choice col-12 col-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <defs>
                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                        <path d="M0 512h512V0H0Z" fill="rgba(var(--text-color-rgb), 0.87)" data-original="var(--dark-color)"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                    <path d="M0 0h-211c-8.25 0-15 6.75-15 15v112.5c0 8.25 6.75 15 15 15h467c8.25 0 15-6.751 15-15V15c0-8.25-6.751-15-15-15H45M30 0H15" style="stroke-width:15;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(233.5 184.75)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="m0 0-1.471 51.875 58.523 31.611 31.611 58.523 66.488-1.885L211.789 175l56.637-34.876 66.488 1.885 31.611-58.523 58.522-31.611L423.578 0m0-142.5 1.469-51.875-58.522-31.611-31.611-58.523-66.488 1.885-56.637-34.876-56.638 34.876-66.488-1.885-31.611 58.523-58.523 31.611L0-142.5" style="stroke-width:15;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(44.211 327.25)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0c27.041 16.245 58.699 25.591 92.542 25.591 74.1 0 137.732-44.78 165.336-108.75m-330.671 0c12.986 30.096 33.949 55.941 60.222 74.877m270.449-217.377c-27.604-63.971-91.236-108.75-165.336-108.75-74.099 0-137.731 44.779-165.335 108.75" style="stroke-width:15;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:22.926;stroke-dasharray:none;stroke-opacity:1" transform="translate(163.458 410.41)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="22.926" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0v15m-30 .001v15" style="stroke-width:15;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:2.613;stroke-dasharray:none;stroke-opacity:1" transform="translate(338.499 368.5)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="2.613" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="m0 0 22.807 59.884 2.548.003L47.955 0" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(224.735 226.428)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0h33.843" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(231.848 241.342)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0v60.626l2.664-.001L40.17.936h2.665v59.803" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(319.57 225.689)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0c0-16.24-9.014-29.221-23.314-29.472h-17.182v58.943h16.693C-8.117 29.471 0 16.241 0 0Z" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(447.103 256.957)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="M0 0h17.725c9.029 0 16.349-7.319 16.349-16.349 0-9.029-7.32-16.422-16.349-16.422H-3v60.74h17.643c7.719 0 13.977-6.257 13.977-13.976C28.62 6.273 22.363 0 14.644 0" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(67.896 258.342)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="m0 0 20.016-23.661" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(157.15 250.731)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                    <path d="m0 0 13.028.07c9.034 0 16.679 7.068 16.679 15.785 0 8.718-7.645 15.786-16.679 15.786h-16.15l-.01-60.74" style="stroke-width:15;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(149.304 254.67)" fill="none" stroke="rgba(var(--text-color-rgb), 0.87)" stroke-width="15" stroke-linecap="square" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="var(--dark-color)" class=""></path>
                                </g>
                            </g>
                        </svg>

                        <h3>I am a Brand</h3>
                        <p>I want to contact with influencers for partnership!</p>
                        <button onclick="chooseRole('brand')" class="w-100 btn btn-outline-primary">SELECT</button>
                    </div>
                </section>
                <!-- use section that contains the form for influencer -->
                <!-- the form contains the following fields: firstname, lastname, email, contact, language, country,etc -->
                <!-- the form is submitted to the same page -->

                <section id="profile-influencer" class="d-none profile text-center col-8 col-md-6">
                    <form action="#" method="POST">
                        <input type="hidden" name="role" value="influencer">
                        <h1>User Information</h1>
                        <p>Updating user details will receive a privacy audit.</p>
                        <!-- use flexbox to display the form in two columns on desktop and one column on mobile -->

                        <div class="d-flex flex-wrap">
                            <!-- all input has the same style col-12 used for mobile and col-md-6 used for desktop -->
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="last_name" placeholder="Last Name" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="email" name="email" placeholder="Email" value="youremail@gmail.com" readonly>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="contact" placeholder="Contact" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="language" placeholder="Language">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="country" placeholder="country">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="facebook" placeholder="Facebook">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="instagram" placeholder="Instagram">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="twitter" placeholder="Twitter">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="linkedin" placeholder="Linked In">
                            </div>
                        </div>
                        <div class="btns d-flex justify-center">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </section>
                <section id="profile-brand" class="d-none profile text-center col-8 col-md-6">
                    <form action="#" method="POST">
                        <input type="hidden" name="role" value="brand">
                        <h1>User Information</h1>
                        <p>Updating user details will receive a privacy audit.</p>
                        <div class="d-flex flex-wrap">
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="number" name="revenue" placeholder="Revenue" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="email" name="email" placeholder="Email" value="youremail@gmail.com" readonly>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="contact" placeholder="Contact" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="language" placeholder="Language">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="country" placeholder="country">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="facebook" placeholder="Facebook">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="instagram" placeholder="Instagram">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="twitter" placeholder="Twitter">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input class="w-100" type="text" name="linkedin" placeholder="Linked In">
                            </div>
                        </div>
                        <div class="btns d-flex justify-center">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </section>
            </main>
        </div>
    </div>

    <script>
        /**
             * call elements by id
             * use const to declare variables
             * use getElementById to get the element by id
         */
        const roles = document.getElementById("roles");
        const profileInfluencer = document.getElementById("profile-influencer");
        const profileBrand = document.getElementById("profile-brand");

        var role;
        /**
             * use function chooseRole  
             * use this line roles.style.display = 'none'; to hides the elements from view
         */

        function chooseRole(role) {
            role = role;
            console.log(role)
            roles.style.display = 'none';
            /**
            * use if statement to check if the role is influencer or brand
            * use this line profileInfluencer.classList.remove('d-none'); to show the elements from view by removing the class d-none
            * use this line profileBrand.classList.remove('d-none'); to show the elements from view by removing the class d-none
            */

            if (role == 'influencer') {
                profileInfluencer.classList.remove('d-none');
            } else if (role == 'brand') {
                profileBrand.classList.remove('d-none');
            }

        }

        document.body.classList.add(localStorage.getItem("theme") || 'dark');
    </script>
</body>

</html>
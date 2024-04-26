<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="card profile-edit">
    <div class="card-title p-24 pb-0">Profile Details</div>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="d-flex p-24 gap-4 image">
        <img width="100" height="100" src="<?= $avatar ?? APP_URL . "/assets/images/" .  $_SESSION['USER']->role . ".png" ?>">
            <div class="mt-2">
                <div class="mt-3">
                    <input type="file" name="avatar" id="avatar" hidden>
                    <label class="mt-5 btn btn-primary mr-2" for="avatar">UPLOAD NEW PHOTO</label>
                </div>
                <!-- <button class="btn btn-secondary">RESET</button> -->
                <p class="fw-500">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-wrap px-24">
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="name" placeholder="Name" required value=<?= $name ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="revenue" placeholder="Revenue" required value=<?= $revenue ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="email" name="email" placeholder="Email" readonly value=<?= $email ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="contact" placeholder="Contact" required value=<?= $contact ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="language" placeholder="Language" value=<?= $language ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="country" placeholder="country" value=<?= $country ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="facebook" placeholder="Facebook" value=<?= $facebook ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="instagram" placeholder="Instagram" value=<?= $instagram ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="twitter" placeholder="Twitter" value=<?= $twitter ?>>
            </div>
            <div class="form-group col-12 col-md-6">
                <input class="w-100" type="text" name="linkedin" placeholder="Linked In" value=<?= $linkedin ?>>
            </div>
        </div>
        <div class="btns p-24">
            <button class="btn btn-primary mr-2">SUBMIT</button>
            <button class="btn btn-secondary" type="button" id="reset">RESET</button>
        </div>
    </form>
</div>

<div class="card delete-account mt-5 p-24">
    <div class="card-title pb-0">Delete Account</div>
    <div class="warning mt-5">
        <p>Are you sure you want to delete your account? </p>
        <p>Once you delete your account, there is no going back. Please be certain.</p>
    </div>
    <form action="<?= APP_URL ?>/user-delete" method="POST">
        <div class="form-group mt-2">
            <input type="checkbox" name="confirm" id="confirm" required>
            <label for="confirm">I confirm my account deactivation</label>
        </div>
        <button class="btn btn-danger mt-5">DESACTIVATE ACCOUNT</button>
    </form>
</div>


<script>
    const reset = document.getElementById("reset");
    reset.addEventListener("click", function() {
        const inputs = document.querySelectorAll("input:not([type=email])");
        inputs.forEach(function(input) {
            input.value = "";
        });
    })
</script>
<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
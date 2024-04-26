<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= APP_URL ?>/css/dashboard/dashboard.css">
  <link rel="stylesheet" href="<?= APP_URL ?>/css/dashboard.css">
  <style>
    body {
      background-color: var(--bgr-tertiary-color);
      color: rgba(var(--text-color-rgb), 0.7);
    }

    body {
      background-color: var(--bgr-secondary-color);
    }

    .container-lg {
      margin: 25px 0;
    }

    .image {
      background-color: var(--bgr-primary-color);
      background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAC0EAAAHuAQMAAADZJXTNAAAABlBMVEWAmcwAAABbWrnIAAAAAnRSTlMKAIx8JbIAAAcVSURBVHja7NqxcRRBEIXhXyo5cpWDLAzyAJvCJBReEhQuGRAClwQ+IciEqisGi6JWpZtFp77Znt73h9BGz9e3Rzu37+8+NvffiXZWvwDg+n1zF530F/5139zFJn1g2e2H5i4x6QNP9Lm56Ek/cKJ7P5Ghkz7S6dp7JG7SYqVPzUVM+gHWu/UeefGkf7OaqR0y6R+sZWqHTPrIWqZ2zKQPrGRqn0jEbmlT+1QidEub2lGTZiVT+2Qi0tKmdtSkRTdTu5MIJJ6p3UnEvYemdtik6WdqR036J91M7W4i7D40tbuJqPvQ1O4nojBtavcTCZbHLqgtkiyP8tQWYfIwtbuJVMujMLVF9Nliaj+dyLg8KlJbXOY3D1P77EmLZ2dqnzPpI5s3ObVFlgOxOrVFUuOVo7bIa7xa1BazrOnZqS1mWtPLbr62iRKTrelpqS0mXNPL7r61GRJzrun5qC2mXdOPetNyJ6Ze0xPtETH7ml529bolTRRY01PsEVFkTS+7ybdHRJ01vezqVUuVKLWmH3XX8iQy/f/gbxVPdpH3E2JYb1uCRO5PiHWoLdJ/QixCbVH4QUxFbVHtbslKbVHwbklJbbGLBzEBtcVeHsStqS1K3y2JqC129iBuRm2xvwdxG2qLfT6I46ktdvsgDqa22NGFuCm1xd4fxFHUFtV/Ms1CbeEHcQy1RcVviBmpLfwgjqG22PMtPpLawg/iGGoL3+JjqC1MjzHUFr7Fx1BbmB5jqC18i4+htjA9xlBbmB5jqC18i4+htjA9xlBbmB5jqC38q8cYagvTYwy1henRKZDawr96/GHHDmoki2IgCHqRLpWCPgjerZXSlyIg+JTlhx+n9k7kPfw4tXfS4+HHqb2THg8/Tu2d/9LDj1N7J/IK//7vRF5FelT8lxo7kVcReRWRVxF5jZ3/UkXkPbj0Z4m8xk7kVUReReRVfPIaOzldEXkVP9OKnG7s5HRFTlfkdEVON3ZyuiKnK3K6IqcbOzldkdMVOV2R042dnK7I6Yqcrsjpxk5OV+T0g0t/luHS2BkuFcOlYrhUDJfGznCpGC4PLv1ZhktjZ7hUDJeK4VIxXBpz6YyJWDERK4ZLY2e4RFw6YyJWTMTGzkSsGC4Vw+XBpT9qZyJWTMSK4VIxXBpz6YyJWDERKyZiY2e4VAyXB5f+LBOxsTMRK4ZLxXCpGC5/7NcxDcBAEMTAg77QgyCtpZdmILhzY0pnLGLFIlaMS2NnXCJKZyxixSI2dhaxYlwqxuWH0o/aWcSKRawYl4pxaUzpjEWsWMSKRWzsjEvFuPxQ+lkWsbGziBXjUjEuFePSmNIZi1ixiBXj0tgZl4jSGYtYsYiNnUWsGJeKcfmh9KN2FrFiESvGpWJcGlM6YxErFrFiERs741IxLj+UfpZFbOwsYsW4VIxLxbg0pnTGIlYsYsW4NHbGJaJ0xiJWLGJjZxErxqViXH4o/aidRaxYxIpxqRiXxpTOWMSKRaxYxMbOuFSMyw+ln2URGzuLWDEuFeNSMS6NKZ2xiBWLWDEujZ1xiSidsYgVi9jYWcSKcakYlx9KP2pnESsWsWJcKsalMaUzFrFiESsWsbEzLhXj8kPpZ1nExs4iVoxLxbhUjEtjSmcsYsUiVoxLY2dcIkpnLGLFIjZ2FrFiXCrG5YfSj9pZxIpFrBiXinFpTOmMRaxYxIpFbOyMS8W4/FD6WRaxsbOIFeNSMS4V49KY0hmLWLGIFePS2BmXiNIZi1ixiI2dRawYl4px+aH0o3YWsWIRK8alYlwaO+MSUTpjESsWsbEzLhXj8kPpZ1nExs4iVixixbhUjEtjSn/t17GJwwAQRNE1Chxc4BJcikuzOte5AE26MPBeCZ9lYNd4Ebd4Ebd4XHac43FZovQaL+IWL+KOc7yIWzwugdK1lN5xKp256VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey04HStZQOlK6ldKB0LaWXPJS+p3QtpQOlax1K31O61lPpe0rXeil9T+lab6XvKV3ro/SSr9L3lK51Kb3jofSSQ+klT6WXvJS+p3Stj9JLvkovuZTecSi95Kn0krfSS75K7zgupXe8ld7xd/2c/wLtfcfBRLQqAAAAAElFTkSuQmCC');
      background-repeat: no-repeat;
      background-position: bottom;
      background-size: 100%;
      padding: 50px 100px;
      border-radius: 15px;
    }

    .image img {
      max-width: min(450px, 100%);
      margin: auto;
      display: block;
    }

    .form {
      padding: 40px;
    }

    .form>i {
      font-size: 30px;
    }

    .form .fb,
    .form .google,
    .form .twitter {
      height: 38px;
      width: 38px;
      border-radius: 5px;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 3px;
    }

    .form .fb {
      color: rgb(66, 103, 178);
      background-color: rgba(66, 103, 178, .2);
    }

    .form .google {
      color: rgb(221, 75, 57);
      background-color: rgba(221, 75, 57, .2);
    }

    .form .twitter {
      color: rgb(29, 161, 242);
      background-color: rgba(29, 161, 242, .2);
    }

    .social-media {
      margin-top: 25px;
    }
  </style>
</head>

<body>
  <div class="container-lg">
    <div class="d-flex justify-center">
      <div class="image col-8 d-none d-lg-block">
        <img src="<?=APP_URL?>/assets/images/register.png" alt="">
      </div>
      <div class="form col-lg-4 col-12 col-sm-10 col-md-8">
        <i class="fa-solid fa-user-plus"></i>
        <h2> Welcome! 👋🏻 </h2>
        <p>Please sign-in to your account and start the adventure</p>
        <?php
        if (isset($errors)) {
          echo '<ul class="errors">';
          foreach ($errors as $error) {
            echo '<li>' . $error . "</li>";
          }
          echo '</ul>';
        }
        ?>
        <form action="#" method="POST">
          <div class="form-group">
            <input class="w-100" type="text" name="username" placeholder="Username" value="<?= $_POST['username'] ?? '' ?>" required>
          </div>
          <div class="form-group">
            <input class="w-100" type="email" name="email" placeholder="Email" value="<?= $_POST['email'] ?? '' ?>" required>
          </div>
          <div class="form-group">
            <input class="w-100" type="password" name="password" placeholder="Password" value="<?= $_POST['password'] ?? '' ?>" required>
          </div>
          <!-- <div class="form-group">
            <select class="w-100" name="role" id="role" required>
              <option value="" hidden>What's your objectif?</option>
              <option value="influencer" <?= isset($_POST['role']) && $_POST['role'] == 'influencer' ? 'selected' : '' ?>>Search a brand to influence</option>
              <option value="brand" <?= isset($_POST['role']) && $_POST['role'] == 'brand'  ? 'selected' : '' ?>>Search a influencer to scale my brand</option>
            </select>
          </div> -->
          <div class="form-group d-flex align-center">
            <input type="checkbox" name="aggreement" id="aggreement" required>
            <label class="pl-2" for="aggreement">I agree to privacy policy & terms</label>
          </div>
          <div class="form-group">
            <button class="btn btn-primary w-100">SIGN UP</button>
          </div>
        </form>
        <p class="text-center">Already have an account? <a class="pl-2" href="<?= APP_URL ?>/login">Sign in instead</a></p>
        <div class="d-flex justify-center my-5">
          <!-- <hr> -->
          <span>or</span>
          <!-- <hr> -->
        </div>
        <div class="social-media text-center">
          <i class="fb fa-brands fa-facebook-f"></i>
          <i class="google fa-brands fa-google"></i>
          <i class="twitter fa-brands fa-twitter"></i>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.body.classList.add(localStorage.getItem("theme") || 'light');
  </script>
</body>

</html>
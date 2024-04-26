<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Not Found</title>
  <link rel="stylesheet" href="<?= APP_URL ?>/css/dashboard/dashboard.css">
  <style>
    .container {
      min-height: 96vh;
    }

    body {
      background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAC0EAAAHuAQMAAADZJXTNAAAABlBMVEWAmcwAAABbWrnIAAAAAnRSTlMKAIx8JbIAAAcVSURBVHja7NqxcRRBEIXhXyo5cpWDLAzyAJvCJBReEhQuGRAClwQ+IciEqisGi6JWpZtFp77Znt73h9BGz9e3Rzu37+8+NvffiXZWvwDg+n1zF530F/5139zFJn1g2e2H5i4x6QNP9Lm56Ek/cKJ7P5Ghkz7S6dp7JG7SYqVPzUVM+gHWu/UeefGkf7OaqR0y6R+sZWqHTPrIWqZ2zKQPrGRqn0jEbmlT+1QidEub2lGTZiVT+2Qi0tKmdtSkRTdTu5MIJJ6p3UnEvYemdtik6WdqR036J91M7W4i7D40tbuJqPvQ1O4nojBtavcTCZbHLqgtkiyP8tQWYfIwtbuJVMujMLVF9Nliaj+dyLg8KlJbXOY3D1P77EmLZ2dqnzPpI5s3ObVFlgOxOrVFUuOVo7bIa7xa1BazrOnZqS1mWtPLbr62iRKTrelpqS0mXNPL7r61GRJzrun5qC2mXdOPetNyJ6Ze0xPtETH7ml529bolTRRY01PsEVFkTS+7ybdHRJ01vezqVUuVKLWmH3XX8iQy/f/gbxVPdpH3E2JYb1uCRO5PiHWoLdJ/QixCbVH4QUxFbVHtbslKbVHwbklJbbGLBzEBtcVeHsStqS1K3y2JqC129iBuRm2xvwdxG2qLfT6I46ktdvsgDqa22NGFuCm1xd4fxFHUFtV/Ms1CbeEHcQy1RcVviBmpLfwgjqG22PMtPpLawg/iGGoL3+JjqC1MjzHUFr7Fx1BbmB5jqC18i4+htjA9xlBbmB5jqC18i4+htjA9xlBbmB5jqC38q8cYagvTYwy1henRKZDawr96/GHHDmoki2IgCHqRLpWCPgjerZXSlyIg+JTlhx+n9k7kPfw4tXfS4+HHqb2THg8/Tu2d/9LDj1N7J/IK//7vRF5FelT8lxo7kVcReRWRVxF5jZ3/UkXkPbj0Z4m8xk7kVUReReRVfPIaOzldEXkVP9OKnG7s5HRFTlfkdEVON3ZyuiKnK3K6IqcbOzldkdMVOV2R042dnK7I6Yqcrsjpxk5OV+T0g0t/luHS2BkuFcOlYrhUDJfGznCpGC4PLv1ZhktjZ7hUDJeK4VIxXBpz6YyJWDERK4ZLY2e4RFw6YyJWTMTGzkSsGC4Vw+XBpT9qZyJWTMSK4VIxXBpz6YyJWDERKyZiY2e4VAyXB5f+LBOxsTMRK4ZLxXCpGC5/7NcxDcBAEMTAg77QgyCtpZdmILhzY0pnLGLFIlaMS2NnXCJKZyxixSI2dhaxYlwqxuWH0o/aWcSKRawYl4pxaUzpjEWsWMSKRWzsjEvFuPxQ+lkWsbGziBXjUjEuFePSmNIZi1ixiBXj0tgZl4jSGYtYsYiNnUWsGJeKcfmh9KN2FrFiESvGpWJcGlM6YxErFrFiERs741IxLj+UfpZFbOwsYsW4VIxLxbg0pnTGIlYsYsW4NHbGJaJ0xiJWLGJjZxErxqViXH4o/aidRaxYxIpxqRiXxpTOWMSKRaxYxMbOuFSMyw+ln2URGzuLWDEuFeNSMS6NKZ2xiBWLWDEujZ1xiSidsYgVi9jYWcSKcakYlx9KP2pnESsWsWJcKsalMaUzFrFiESsWsbEzLhXj8kPpZ1nExs4iVoxLxbhUjEtjSmcsYsUiVoxLY2dcIkpnLGLFIjZ2FrFiXCrG5YfSj9pZxIpFrBiXinFpTOmMRaxYxIpFbOyMS8W4/FD6WRaxsbOIFeNSMS4V49KY0hmLWLGIFePS2BmXiNIZi1ixiI2dRawYl4px+aH0o3YWsWIRK8alYlwaO+MSUTpjESsWsbEzLhXj8kPpZ1nExs4iVixixbhUjEtjSn/t17GJwwAQRNE1Chxc4BJcikuzOte5AE26MPBeCZ9lYNd4Ebd4Ebd4XHac43FZovQaL+IWL+KOc7yIWzwugdK1lN5xKp256VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey05O56VJKB0qXstOTuelSSgdKl7LTk7npUkoHSpey04HStZQOlK6ldKB0LaWXPJS+p3QtpQOlax1K31O61lPpe0rXeil9T+lab6XvKV3ro/SSr9L3lK51Kb3jofSSQ+klT6WXvJS+p3Stj9JLvkovuZTecSi95Kn0krfSS75K7zgupXe8ld7xd/2c/wLtfcfBRLQqAAAAAElFTkSuQmCC");
      background-repeat: no-repeat;
      background-position: bottom;
      background-size: 100%;
    }

    img {
      margin: auto;
      margin-top: 30px;
      height: 70vh;
    }
  </style>
</head>

<body>
  <div class="container text-center">
    <h1 class="mt-5 fw-semibold"><?= $title ?></h1>
    <p><?= $description ?></p>
    <a class="btn btn-primary my-2 d-inline-block" href="<?= APP_URL ?>/dashboard">BACK TO HOME</a>
    <img class="d-block" src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/401.605d79f7.png">
  </div>
</body>

</html>
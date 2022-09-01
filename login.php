<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eduplanet: Build Beautiful Courses</title>
    <meta property="og:type" content="website">
    <meta name="description" content="Create beautiful courses for your audience. idk">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-app-16x-transparent-one_color.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo-app-32x-transparent-one_color.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/Pricing-Duo-badges.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50"><img src="assets/img/logo-transparent.png" style="height: 60px;opacity: 0.65;margin-bottom: 10px;">
                    <form action="loggingin.php" method="post"><?php if (isset($_GET['error'])) { ?>
    <p class="text-white bg-danger"><?php echo $_GET['error']; ?></p>
<?php } ?>
<?php if (isset($_GET['success'])) { ?>
    <p class="text-white bg-success"><?php echo $_GET['success']; ?></p>
<?php } ?>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Email</label><input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" name="email"></div>
                        <div class="form-group mb-3"><label class="form-label text-secondary">Password</label><input class="form-control" type="password" required="" minlength="8" name="password"></div><button class="btn btn-info mt-2" type="submit" style="color: white;background: linear-gradient(45deg, #088eb8 0%, #29caeb 67%, #9de0ea 100%);">Log In</button>
                    </form>
                    <p class="mt-3 mb-0"><a class="text-info small" href="#" style="color: #0dcaf0;">Forgot your email or password?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;assets/img/aldain-austria-316143-unsplash.jpg&quot;);background-size:cover;background-position:center center;">
                <p class="ms-auto small text-dark mb-2"><em>Photo by&nbsp;</em><a class="text-dark" href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank"><em>Aldain Austria</em></a><br></p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
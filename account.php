<?php
session_start();
    ?>

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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
</head>

<body><a href="dashboard.php" style="color: #343434;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-back" style="width: 48px;height: 48px;top: 0;left: 0;position: absolute;">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
        </svg></a>
    <div style="width: 100%;height: 100%;"><div class="container wrapper">
    <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                    <div class="user-avatar">
                        <img src="assets/img/no-user-icon.jpg" alt="User image">
                    </div>
                    <h5 class="user-name"><?php echo $_SESSION['name']; ?></h5>
                    <h6 class="user-email"><?php echo $_SESSION['email']; ?></h6>
                </div>
                <div class="about">
                    <h5>About</h5>
                    <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <form class="card-body" action="editName.php" method="post">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Personal Info</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="userame">Userame</label>
                        <input type="text" class="form-control" id="userame" name="username" placeholder="Enter username" pattern="[A-Za-z0-9]+" minlength="2" maxlength="24">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="eMail">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email ID">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Change Password">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input type="url" class="form-control" id="website" placeholder="Website url">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Payment Details (change items, ok?)</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="Street">Street</label>
                        <input type="name" class="form-control" id="Street" placeholder="Enter Street">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="ciTy">City</label>
                        <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="sTate">State</label>
                        <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="zIp">Zip Code</label>
                        <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="sbmtbtns" class="text-right">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        <p id="danger" class="text-danger">Only edited items will be updated.</p>
                    </div>
                </div>
            </div>
            <?php if (isset($_GET['error'])) { ?>
                <p class="text-white bg-danger"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <p class="text-white bg-success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
        </form>
    </div>
</div>
</div>
</div></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
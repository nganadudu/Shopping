<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icon.png">
    <title>ChiChu</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
    <?php
    // require functions.php file
    require ('functions.php');
    ?>
</head>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('register-process.php');
    }
?>

<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <img src="./assets/img/signup.jpeg" class="img-fluid"
                     alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="register.php" method="post" id="reg-form">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign up with</p>
                        <button type="button" class="btn btn-primary mx-1 btn-circle">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary mx-1 btn-circle">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary mx-1 btn-circle">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>

                    <div class="form-outline mb-3">
                        <input type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>" name="firstName" id="firstName" placeholder="First Name" class="form-control">
                    </div>

                    <div class="form-outline mb-3">
                        <input type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>" name="lastName" id="lastName" placeholder="Last Name" class="form-control">
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-3">
                        <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required name="email" id="email" class="form-control form-control" placeholder="Email">

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" required name="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-outline mb-3">
                        <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <small id="confirm_error" class="bg-danger"></small>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            Sign up
                        </button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Have an account?
                            <a href="login.php" class="link-danger">Login</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            ChiChu © e-Commerce 2021. All Rights Reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4" style="text-decoration: none;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4" style="text-decoration: none;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4" style="text-decoration: none;">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white" style="text-decoration: none;">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $("#reg-form").submit(function (e){
        const $password = $("#password");//id
        const $confirm = $("#confirm_pwd");
        const $error = $("#confirm_error");

        // compare password
        if ($password.val() === $confirm.val()){
            return true;
        } else {
            $error.text("Password do not match");
            e.preventDefault();
        }
    });
</script>

</body>
</html>


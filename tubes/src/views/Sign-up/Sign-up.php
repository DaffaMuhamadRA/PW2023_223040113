<?php
require '../../partials/functions/functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan !');
            document.location.href = '../../../index.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <!-- css -->
    <link rel="stylesheet" href="sign-up.css" />
</head>

<body>
    <section class="background-radial-gradient overflow-hidden">
        <img src="../../../image/mentah/login-page.jpg" alt="">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 0%, 100%)">
                        HealthCare <br />
                        <span style="color: hsl(218, 56%, 47%)">for your Healthy</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 0%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="" method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="username" name="username" class="form-control" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <!-- confirm password -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password2" name="password2" class="form-control" />
                                    <label class="form-label" for="password2">Confirm Password</label>
                                </div>


                                <!-- Submit button -->
                                <button type="submit" name="register" class="btn d-flex btn-primary btn-block mb-4 mx-auto">
                                    Sign up
                                </button>

                                <!-- already have account -->
                                <h6 class="text-center already-have-acc">Already have an account ? <a href="../../../index.php"> Log
                                        in</a></h6>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- java bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
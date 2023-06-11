<?php

require 'src/partials/functions/functions.php';


//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil usename berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);


    //cek cookie dan username

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION["login"] = true;
    }
}

// if (isset($_SESSION["login"])) {
//     header("Location: src/views/backend_UI/Admin/admin.php");
//     exit;
// }

$err = "";
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


    //cek username
    if (mysqli_num_rows($result) === 1) {

        session_start();
        //cek password
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        if (password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if (isset($_POST["remember"])) {
                //buat cookie

                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            if (empty($err)) {

                $login_id = $row['id_user'];
                $sql1 = "SELECT * FROM admin_akses WHERE id_user ='$login_id'";
                $q1 = mysqli_query($conn, $sql1);

                while ($row = mysqli_fetch_array($q1)) {
                    $akses[] = $row['id_user'];
                }
                if (empty($akses)) {
                    $err .= "<li>kamu tidak punya akses admin</li>";
                }
            }
            if (empty($err)) {

                $_SESSION['user'] = $username;
                $_SESSION['admin_akses'] = $akses;

                header("Location: src/views/backend_UI/Admin/admin.php");
                exit;
            } else {
                header("Location: src/views/backend_UI/User/user.php");
            }
        }
    }

    $error = true;
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
    <link rel="stylesheet" href="src/views/log-in/log-in.css" />
</head>

<body>
    <section class="background-radial-gradient overflow-hidden">
        <img src="image/mentah/login-page.jpg" alt="login-page">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight " style="color: hsl(0, 0%, 99%)">
                        HealthCare <br />
                        <span style="color: hsl(218, 56%, 47%)">for your Healthy</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 0%)">
                        Healthcare adalah platform kesehatan yang memberikan informasi medis terpercaya, tips gaya hidup sehat, penelitian terkini, dan panduan pengelolaan kesehatan untuk meningkatkan kualitas hidup secara holistik dan menyeluruh. Kami berkomitmen untuk memberikan pelayanan terbaik kepada pengguna kami.
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
                                    <label class="form-label" for="passsword">Password</label>
                                </div>
                                <?php
                                if (isset($error)) : ?>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <div class="alert alert-danger" role="alert">
                                                Username / Password Salah
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- cookie -->
                                <!-- <div class="form-outline mb-4">
                                    <input type="checkbox" id="remember" name="remember" class="form-control" />
                                    <label class="form-label" for="remember">Remember me</label>
                                </div> -->

                                <div class="btn d-flex mx-auto mb-4 justify-content-center" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="remember" name="remember" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="remember">Remember me!</label>
                                </div>

                                <!-- log-in -->
                                <button type="submit" name="login" class="btn d-flex btn-primary btn-block mb-4 mx-auto">
                                    Log-in
                                </button>

                                <h6 class="text-center dont-have-acc">Don't Have an account ? <a href="src/views/Sign-up/Sign-up.php">Sign
                                        up</a></h6>

                                <!-- Register buttons -->
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
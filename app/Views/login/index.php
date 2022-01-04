<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">

    <style>
        .login-form {
            margin-top: 150px;
        }

        .login-form h1 {
            color: #F50057;
            font-weight: bold;
            text-align: center;
        }

        .login-form h3 {
            color: #F50057;
            font-weight: 100;
            font-size: 20px;
            text-align: center;
            margin-bottom: 50px;

        }

        form {
            line-height: 50px;
            text-align: center;
        }

        form a {
            color: #F50057;
        }

        .btn {
            width: 100px;
            border-radius: 30px;
        }

        input {
            border-radius: 30px !important;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="" style="margin-top: 100px;">
                    <img src="/assets/img/login.png" style="width: 90%;"><br>
                    <a href="/" style="color: black;">Kembali</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="login-form">
                    <h1>Welcome Back</h1>
                    <h3>Sign In to Your Account</h3>

                    <form action="" method="post">
                        <input class="form-control mb-2" type="text" name="username" placeholder="Username">
                        <input class="form-control mb-2" type="password" name="password" placeholder="Password">
                        <a href="">Forgot your password</a><br>
                        <input type="submit" value="Sign In" class="btn btn-light" style="background: #E64141 ; color: #fff;">
                        <a href="/register/index" class="btn btn-dark">Sign Up</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="/assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
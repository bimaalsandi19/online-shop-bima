<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/main.css">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">PHLOX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <div class="nav-icon">
                        <li class="nav-item">
                            <a class="nav-link" href="/login/index">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><input type="search" name="" class="form-control"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="nav-right">
                <span>
                    <a href="/login/index" class="nav-login">login</a>
                </span>
                <span>

                    <i class=" fas fa-search"></i>
                </span>
                <span>

                    <i class="fas fa-shopping-cart"></i>
                </span>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="navbar-brand" style="font-size: 20px;">PHLOX</p>
                    <p style="font-size: 12px; color: gray;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eum recusandae iure officia, dolorum fugit quibusdam? Voluptatem tenetur quis assumenda.</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Quick Links</strong></p>
                    <p><a href="" style="color: gray; text-decoration: none;">Home</a></p>
                    <p><a href="" style="color: gray; text-decoration: none;">About</a></p>
                    <p><a href="" style="color: gray; text-decoration: none;">Shop</a></p>
                    <p><a href="" style="color: gray; text-decoration: none;">Contact</a></p>
                </div>
                <div class="col-md-3">
                    <p><strong>Contact</strong></p>
                    <p>082387838046</p>
                    <p>bimaalsandi19@gmail.com</p>
                    <p>(0752)122345</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Subscribe To Our Email</strong></p>
                    <p style="font-size: 20px; color: black; font-weight: bold;">For Latest News & Updates</p>

                </div>
            </div>
        </div>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
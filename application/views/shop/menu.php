<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/shop.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand col-lg-2" href="#">EDAS</a>
        <form class="form-inline col-sm" action="/action_page.php">
            <input class="form-control mr-sm-2 col-sm" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <button class="navbar-toggler col-sm" type="button" data-toggle="collapse" data-target="navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-sm-2" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 col-sm">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('shop'); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth'); ?>">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>

    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." alt="First Slide" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="..." alt="Second Slide" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="..." alt="Third Slide" class="d-block w-100">
            </div>
        </div>
    </div>

</body>


</html>
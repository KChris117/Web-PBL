<!DOCTYPE html>
<html lang="en">

<head>
    <title>O'Cos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php">O'Cos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
                <span class="navbar-toggle-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                </ul>
                <div>
                    <h7>
                        <a href="#"><i class="bi bi-cart-check text-light h4"></i>
                        <a href="#"><i class="bi bi-box-arrow-in-right text-light h4"></i></a>
                    </h7>
                </div>
            </div>
        </div>
    </nav>
    <br>

    <div class="row mt-5 no-gutter">
        <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
                <li class="nav-item active">
                    <a class="nav-link text-light bg-secondary" href="produk.php">Kategori Produk<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="skincare.php">Skincare<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="bodycare.php">Bodycare<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-muted" href="lipstick.php">Lipstick<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="nail polish.php">Nail Polish<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="shampoo.php">Shampoo<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
        <br>

        <div class="col-md-10">
            <br>

            <h4 class="text-center font-weight-bold mr-4">Produk Terbaru</h4>
            <br>
            <div class="row mx-auto">
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/fameux.jpeg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                    <h5 class="card-title">Fameux</h5>
                        <p class="card-text">Whitening Pomegranate</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="fameux bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp143.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/lipstick/mirabella.jpeg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Mirabella</h5>
                        <p class="card-text">lipstick mois</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="mirabella lipstick.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp10.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/nail polish/Rosalind.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Rosalind</h5>
                        <p class="card-text">Soak Off Gel Polish UV & LED</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="rosalind nail polish.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp21.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/skincare/images5.jpeg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">The Originote</h5>
                        <p class="card-text">Charcoal Clay Mask</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="Charcoal Clay Mask.php" class="btn btn-primary btnDetail">Detail</a>
                        <a href="#" class="btn btn-danger harga">Rp40.000</a>
                    </div>
                </div>
                </div>
                <br>
            <div class="row mx-auto">
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/lipstick/peripera.jpeg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                    <h5 class="card-title">Peripera</h5>
                        <p class="card-text">Ink Airy Velvet</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="peripera lipstick.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp88.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/hanasui.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                    <h5 class="card-title">Angel Tacik</h5>
                        <p class="card-text">Body Lotion Whitening</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="angeltacik bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp35.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/Shampoo/pantene.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Pantene</h5>
                        <p class="card-text">Gold Series</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="pantene shampoo.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp40.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/nail polish/brasov.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Brasov</h5>
                        <p class="card-text">GLOSSY AND NUDE SERIES</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="brasov nail polish.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp8.000</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer class="bg-secondary text-white">
        <div class="row">
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-2">
                <h4></h4>
                <br>
                <h3>O'Cos</h3>
                <p><img src="assets/logo/fb.svg" alt="" width="25"><img src="assets/logo/tw.svg" alt="" width="25"><img src="assets/logo/ig.svg" alt="" width="25"></p>
                <br>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-1">
                <h3></h3>
                <p></p>
            </div>
            <div class="col-md-2">
                <h4></h4>
                <br>
                <h4>Contact Us</h4>
                <br>
                <p>O’Cos@company.id</p>
                <p>Jl. Batu Besar No 101/Blok C</p>
                <p>+62 812 3456 7890</p>
                <br>
            </div>
        </div>
    </footer>




</body>

</html>
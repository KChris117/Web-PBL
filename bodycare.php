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
                    <a class="nav-link text-light bg-dark" href="produk.php">Kategori Produk<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="skincare.php">Skincare<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light bg-secondary" href="bodycare.php">Bodycare<span class="sr-only"></span></a>
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

            <h4 class="text-center font-weight-bold mr-4">Produk Tersedia</h4>
            <br>
            <div class="row mx-auto">
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/nivea.jpeg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Nivea</h5>
                        <p class="card-text">Hand Body Serum</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="nivea bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp29.000</a>
                    </div>
                </div>
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
                    <img src="assets/img/bodycare/hanasui.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Hanasui</h5>
                        <p class="card-text">Body Lotion 3 in 1</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="hanasui bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp24.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/vaseline.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Vaseline</h5>
                        <p class="card-text">Gluta Hya Serum Burst</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="vaseline bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp45.500</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mx-auto">
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/herbonist.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Herborist</h5>
                        <p class="card-text">Mineral Body Scrub</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <br>
                        <br>
                        <a href="herbonist bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp17.500</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/nature.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Natur-e</h5>
                        <p class="card-text">Hand & Body Lotion</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="nature bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp32.000</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/img/bodycare/angeltacik.jpg" class="card-img-top" alt="...">
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
                    <img src="assets/img/bodycare/sadoer.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Sadoer</h5>
                        <p class="card-text">Glow Skin Lightening</p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <br>
                        <br>
                        <a href="sadoer bodycare.php" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Rp31.000</a>
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
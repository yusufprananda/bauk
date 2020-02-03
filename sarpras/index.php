<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sarpras - Universitas Ngudi Waluyo</title>

    <!-- Link Style -->
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link Font -->
    <!-- Noto Serif and Roboto Font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i|Roboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aset dan Penyusutan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aset</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penggunaan Ruang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penggunaan Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Renovasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="http://placehold.jp/1280x300.png" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, blanditiis aperiam ea quam praesentium laborum quos enim maxime nobis itaque!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="http://placehold.jp/1280x300.png" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, blanditiis aperiam ea quam praesentium laborum quos enim maxime nobis itaque!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="http://placehold.jp/1280x300.png" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, blanditiis aperiam ea quam praesentium laborum quos enim maxime nobis itaque!</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Content Agenda -->
    <section class="cAgenda">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Agenda - Universitas Ngudi Waluyo</h4>
                    <hr>
                </div>
            </div>
            <!-- Table -->
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Agenda</th>
                                <th scope="col">Penyelenggara</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Widget -->
    <section class="cBotwidget">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>BAUK UNW</h5>
                    <hr>
                    <p>Jl. Diponegoro no 186 Gedanganak - Ungaran Timur, Kab. Semarang Jawa Tengah</p>
                    <p>Telp: (024)-6925408<br>Fax: (024)-6925408</p>
                </div>
                <div class="col-md-6">
                    <h5>Universitas Ngudi Waluyo</h5>
                    <hr>
                    <p>Jl. Diponegoro no 186 Gedanganak - Ungaran Timur, Kab. Semarang Jawa Tengah</p>
                    <p>Telp: (024)-6925408<br>Fax: (024)-6925408</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="cFooter">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-3">
                <p class="m-0">Copyright © <?= date("Y") ?> MYP | All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <!-- Link Script -->
    <!-- JQuery 3.4.1 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- My Script -->
    <script>

    </script>
</body>

</html>
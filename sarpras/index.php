<?php include "functions/head.php" ?>

<body>
    <?php include "functions/navbar.php" ?>

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

    <?php include "functions/bottom_widget.php" ?>
    <?php include "functions/footer.php" ?>
    <?php include "functions/script.php" ?>
</body>

</html>
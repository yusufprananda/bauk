<?php include "functions/head.php" ?>
<?php $page = "aset" ?>

<body>
    <?php include "functions/navbar.php" ?>
    <!-- Content Table Data Tanah -->
    <section class="cContent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Data Aset Tanah - Universitas Ngudi Waluyo</h4>
                    <p>
                        Data aset tanah yang ada di Universitas Ngudi Waluyo. Untuk mencetak data tanah dalam bentuk .pdf, silahkan lakukan login.
                    </p>
                    <hr>
                </div>
            </div>
            <!-- Table -->
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Kampus (Area)</th>
                                <th scope="col">Luas Tanah</th>
                                <th scope="col">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <tr>
                                    <td>Diponegoro</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
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
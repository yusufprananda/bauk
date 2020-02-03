<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Aset dan Penyusutan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown <?= $page == 'aset' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aset
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="aset_datatanah.php">Data Tanah</a>
                    <a class="dropdown-item" href="aset_datagedung.php">Data Gedung</a>
                    <a class="dropdown-item" href="aset_dataruang.php">Data Ruang</a>
                    <a class="dropdown-item" href="aset_inventaris.php">Inventarisasi</a>
                </div>
            </li>
            <li class="nav-item <?= $page == 'pruang' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Penggunaan Ruang</a>
            </li>
            <li class="nav-item <?= $page == 'pkendaraan' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Penggunaan Kendaraan</a>
            </li>
            <li class="nav-item <?= $page == 'drenovasi' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Daftar Renovasi</a>
            </li>
            <li class="nav-item <?= $page == 'login' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
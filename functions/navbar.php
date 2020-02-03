<nav class="cNavbar navbar navbar-expand-lg navbar-dark">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Beranda</span></a>
            </li>
            <li class="nav-item dropdown <?= $page == 'about' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tentang
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="struktur_organisasi.php">Struktur Organisasi</a>
                    <a class="dropdown-item" href="profil_staff.php">Profil Staff</a>
                </div>
            </li>
            <li class="nav-item <?= $page == 'aset' ? 'active' : '' ?>">
                <a class="nav-link" href="sarpras">Aset</a>
            </li>
            <li class="nav-item <?= $page == 'pBarang' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Pengadaan Barang</a>
            </li>
            <li class="nav-item <?= $page == 'jGedung' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Jadwal Gedung</a>
            </li>
            <li class="nav-item <?= $page == 'transportasi' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Transportasi</a>
            </li>
            <li class="nav-item <?= $page == 'renovasi' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Renovasi</a>
            </li>
            <li class="nav-item <?= $page == 'pAlat' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Peminjaman Alat</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search ..." aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
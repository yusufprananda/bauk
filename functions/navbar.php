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
            <li class="nav-item dropdown <?= $page == 'profile' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="struktur.php">Struktur</a></li>
                    <li><a class="dropdown-item" href="staff.php">Staff</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown <?= $page == 'sarpras' ? 'active' : '' ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sarana-Prasarana
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="../../sarpras/aset.php" class="dropdown-item">Aset</a></li>
                    <li><a href="#" class="dropdown-item">Jadwal Pemakaian Ruang</a></li>
                    <li><a href="#" class="dropdown-item">Jadwal Pemakaian Transportasi</a></li>
                </ul>
            </li>
            <li class="nav-item <?= $page == 'kepegawaian' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Kepegawaian</a>
            </li>
            <li class="nav-item <?= $page == 'persuratan' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Persuratan</a>
            </li>
            <li class="nav-item <?= $page == 'humas' ? 'active' : '' ?>">
                <a class="nav-link" href="#">Humas</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search ..." aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
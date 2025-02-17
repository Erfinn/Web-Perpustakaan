<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku - Siswa</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand -->
        <a class="navbar-brand ps-3" href="#">Siswa Dashboard</a>
        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Buku
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                            Peminjaman
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-gear"></i></div>
                            Pengaturan
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Siswa
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Buku</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman Daftar Buku</li>
                    </ol>

                    <div class="row gap-4">
                        <div class="card col-12 col-md-4 col-lg-3">
                            <div class="card-body">
                                <img src="./img/book-cover.jpeg" alt="Bulan" class="book-img">
                                <hr>
                                <p class="text-center fw-bolder fs-4 my-0">Bulan</p>
                                <p class="text-center mb-3">Ditulis oleh Tere Liye</p>
                                <button class="btn btn-primary d-block mx-auto" type="submit">Pinjam</button>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4 col-lg-3">
                            <div class="card-body">
                                <img src="./img/book-cover.jpeg" alt="Bulan" class="book-img">
                                <hr>
                                <p class="text-center fw-bolder fs-4 my-0">Bulan</p>
                                <p class="text-center mb-3">Ditulis oleh Tere Liye</p>
                                <button class="btn btn-primary d-block mx-auto" type="submit">Pinjam</button>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4 col-lg-3">
                            <div class="card-body">
                                <img src="./img/book-cover.jpeg" alt="Bulan" class="book-img">
                                <hr>
                                <p class="text-center fw-bolder fs-4 my-0">Bulan</p>
                                <p class="text-center mb-3">Ditulis oleh Tere Liye</p>
                                <button class="btn btn-primary d-block mx-auto" type="submit">Pinjam</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Web Perpustakaan 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

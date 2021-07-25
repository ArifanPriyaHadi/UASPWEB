<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS PWEB</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.php">Website Pribadi</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="profil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Profil
                            </a>
                            <a class="nav-link" href="kontak.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kontak
                            </a>
                            <a class="nav-link" href="galeri.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Galeri
                            </a>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div align="center" >
            <h2>BIODATA PRIBADI</h2>
        </div>
        <form enctype="multipart/form-data" name="form1" action="proses.php" method="post" class="form" id="form">
            <table class="table" width="720" border="0" cellspacing="0" cellpadding="5" align="center">
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>JENIS JELAMIN</td>
                    <td>:</td>
                    <td><input type="text" name="kelamin" id="kelamin"></td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td>:</td>
                    <td><input type="text" name="agama" id="agama"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Submit">
                        <input type="reset" name="submitt" value="Cancel"></td>
                </tr>
            </table> 
        </form>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Arifan Priya Hadi Website 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
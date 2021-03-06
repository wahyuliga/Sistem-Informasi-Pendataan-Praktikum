<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Praktikum | Beranda</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
    <div id="wrapper">

		<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Praktikums</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $_SESSION['role']=="asisten" ? 'asisten.php' : 'index.php'; ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Praktikum
            </div>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="modul.php">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Daftar Modul</span>
                </a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_SESSION['role']=="asisten" ? 'praktikan.php' : 'asisten.php'; ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span><?php echo $_SESSION['role']=="asisten" ? 'Praktikan' : 'Asisten'; ?></span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="dosen.php">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Data Dosen</span>
                </a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="praktikum.php">
                    <i class="fas fa-fw fa-keyboard"></i>
                    <span>Data Praktikum</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

		<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form method="get"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                name="cari" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">   
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search" name="cari"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="ubah_data.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Modul</h1>
                    </div>

                    <?php 
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            echo "<h6>Hasil pencarian : ".$cari."</h6>";
                        }
                    ?>
                    
                    <!-- DataTable Dashboard -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Modul</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Modul</th>
                                            <th>Waktu</th>
                                            <th>Nama Matkul</th>
                                            <?php if($_SESSION['role'] == "asisten") echo '<th>Aksi</th>'; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										if(isset($_GET['pesan'])){
											if($_GET['pesan'] == "sukses_update"){
												echo 
												'<div class="alert alert-success" role="alert">
													Data berhasil diubah!
												</div>';
											} else if($_GET['pesan'] == "sukses_tambah"){
												echo 
												'<div class="alert alert-success" role="alert">
													Data berhasil ditambah!
												</div>';
											} else if($_GET['pesan'] == "berhasil_hapus"){
												echo 
												'<div class="alert alert-success" role="alert">
													Data berhasil dihapus!
												</div>';
											}
										}

										include 'koneksi.php';

										$table_name = 'modul';
                                        
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $sql = 'SELECT
                                                        a.modul_id, 
                                                        a.nama_modul,
                                                        a.modul_date,
                                                        b.nama_matkul
                                                    FROM `' . $table_name . '` AS a 
                                                    INNER JOIN matkulpraktikum AS b 
                                                    ON a.kode_matkul = b.kode_matkul
                                                    WHERE LOWER(a.nama_modul) LIKE LOWER("%'.$cari.'%") 
                                                    OR LOWER(a.modul_date) LIKE LOWER("%'.$cari.'%")
                                                    OR LOWER(b.nama_matkul) LIKE LOWER("%'.$cari.'%")'; 				
                                        } else {
                                            $sql = 'SELECT
                                                        a.modul_id, 
                                                        a.nama_modul,
                                                        a.modul_date,
                                                        b.nama_matkul
                                                    FROM `' . $table_name . '` AS a 
                                                    INNER JOIN matkulpraktikum AS b 
                                                    ON a.kode_matkul = b.kode_matkul
                                                    ORDER BY b.nama_matkul';
                                        }

										$query = mysqli_query($conn, $sql);

										if (!$query) {
											die ('SQL Error: ' . mysqli_error($conn));
										}
					
										while ($row = mysqli_fetch_array($query))
										{
											echo '<tr>
													<td>'.$row['nama_modul'].'</td>
													<td>'.$row['modul_date'].'</td>
													<td>'.$row['nama_matkul'].'</td>';
											if($_SESSION['role'] == "asisten"){
												echo '<td>
														<button type="button" id="modul_id='.$row['modul_id'].'" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onClick="clickId(this.id)">Hapus
														</button>
														<a class="btn btn-primary btn-sm" href="edit_data.php?modul_id='.$row['modul_id'].'">Edit</a>
													</td>';
											}

											echo '</tr>';
										}

										if($_SESSION['role'] == "asisten"){
										    echo '<a href="./tambah_data_modul.php"> <button type="submit" class="btn btn-success btn-sm" >+Tambah Data</button></a><br><br>';
                                        }
									?>
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Wahyu Liga - Praktikum SBD 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol "Logout" di bawah ini jika anda ingin mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
	</div>		
			
	<!-- Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Apakah anda yakin akan menghapus data?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<a id="ganti" class="btn btn-danger" href="">Ya</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        function clickId(clicked_id)
        {
            var place = document.getElementById('ganti');
            place.href = 'proses_hapus_data.php?'+clicked_id;
        }
    </script>

</body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <title>Profile</title>  

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">
    
    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css"> 

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php
    include 'header.php';
    ?>

    <div class="container mt-4">
      <div class="card p-3">
        <div class="row">
          <div class="col-6">
            <h4>User Management</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"><span class="material-icons-outlined"></span>Tambah User</button>
          </div>
        </div>

        <div class="row mt-2 mb-2">
          <div class="col-1">
            <select class="form-select float-start" aria-label="Default select example">
                <option selected>No</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
          </div>
          <div class="col-7 float-start">
            entries per page
          </div>
          <div class="col-4">
            <div class="text-end">
              <input class="form-control w-50 float-end" type="search" placeholder="Search" aria-label="Search">
            </div>  
          </div>
        </div>

        <div class="table-responsive">
          
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Handphone</th>
              <th scope="col">Username</th>
              <th scope="col">Masuk Sistem</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pegawai A</td>
              <td>pegawaia@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.a</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai B</td>
              <td>pegawaib@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.b</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai C</td>
              <td>pegawaic@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.c</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai D</td>
              <td>pegawaid@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.d</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai E</td>
              <td>pegawaie@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.e</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai F</td>
              <td>pegawaif@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.f</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai G</td>
              <td>pegawaig@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.g</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai H</td>
              <td>pegawaih@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.h</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Pegawai I</td>
              <td>pegawaii@gmail.com</td>
              <td>08123456789</td>
              <td>Pegawai.i</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUbahUser"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusUser"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
          </tbody>
      </table>
        </div>

      <div class="row">
        <div class="col-6">
          <h6 class="text-muted">Showing 1 to 10 of 26 entries</h6>
        </div>
        <div class="col-6">
          <ul class="pagination float-end">
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>


<!-- Modal Tambah User -->
<div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="TambahUser" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahUser"><b>Tambah User</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <img src="img/person.svg" style="width: 250px;">
            <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Nama Pegawai" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Email ">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Nomor Handphone">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <div class="mb-1">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Jenis Pegawai</option>
                  <option value="1">Kasir</option>
                  <option value="2">Pegawai</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah User -->
<div class="modal fade" id="ModalUbahUser" tabindex="-1" aria-labelledby="modalubah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalubah"><b>Ubah User</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawaia@gmail.com">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="0812345678">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawai.a">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus User-->
<div class="modal fade" id="ModalHapusUser" tabindex="-1" aria-labelledby="ModalHapus" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalHapus"><b>Hapus User</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawaia@gmail.com">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="0812345678">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawai.a">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-warning">Hapus</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Rincian User-->
<div class="modal fade" id="ModalRincianUser" tabindex="-1" aria-labelledby="RincianUser" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RincianUser"><b>Rincian User</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawaia@gmail.com">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="0812345678">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="pegawai.a">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pegawai">
              </div>
              <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal">Keluar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
    </div>
  </div>
</div>

    <div class="container">
      <div class="card mt-4">
        <div class="row m-3" >
          <div class="col-md-5 text-center">
            <img src="img/person.svg" style="width: 250px;">
            <h4 class="">Nama Pegawai</h4>
            <p>pegawai@mail.com</p>
            <p>08123456789  </p>
          </div>
          <div class="col-md-7">
            <h4>Edit Profile</h4>
            <form>
              <div class="mb-2">
                <input type="text" class="form-control" placeholder="Nama Pegawai">
              </div>
              <div class="mb-2">
                <input type="textx" class="form-control" placeholder="pegawai@email.com">
              </div>
              <div class="mb-2">
                <input type="textx" class="form-control" placeholder="08123456789">
              </div>
              <div class="mb-2">
                <input type="textx" class="form-control" placeholder="Ubah password">
              </div>
              <div class="mb-2">
                <input type="textx" class="form-control" placeholder="Konfirmasi password">
              </div>
            </form>
              <button type="button" class="btn btn-success">Simpan</button>
              <button type="button" class="btn btn-danger">Batal</button>
          </div>
        </div>
      </div>
    </div>

 <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
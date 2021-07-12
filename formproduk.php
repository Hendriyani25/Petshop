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
            <h4>Product</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaltambahproduct"><span class="material-icons-outlined"></span>Tambah Produk</button>
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
              <th scope="col">Name</th>
              <th scope="col">Supplier</th>
              <th scope="col">Kuantiti</th>
              <th scope="col">Satuan</th>
              <th scope="col">Waktu Masuk</th>
              <th scope="col">Waktu Expiry</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Barang Merk A</td>
              <td>Supplier A</td>
              <td>100</td>
              <td>Kg</td>
              <td>25 Juni 2021</td>
              <td>01 Juli 2021</td>
              <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk B</td>
              <td>Supplier B</td>
              <td>100</td>
              <td>gr</td>
              <td>17 Januari 2021</td>
              <td>22 Maret 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk C</td>
              <td>Supplier C</td>
              <td>100</td>
              <td>Ons</td>
              <td>03 Juli 2021</td>
              <td>17 Agustus 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk D</td>
              <td>Supplier D</td>
              <td>100</td>
              <td>Mg</td>
              <td>15 November 2021</td>
              <td>12 Januari 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk E</td>
              <td>Supplier E</td>
              <td>100</td>
              <td>Mg</td>
              <td>15 November 2021</td>
              <td>12 Januari 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk F</td>
              <td>Supplier F</td>
              <td>100</td>
              <td>Buah</td>
              <td>10 Januari 2021</td>
              <td>07 Februari 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk G</td>
              <td>Supplier G</td>
              <td>100</td>
              <td>Pcs</td>
              <td>20 Maret 2021</td>
              <td>13 Mei 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk H</td>
              <td>Supplier H</td>
              <td>100</td>
              <td>Unit</td>
              <td>14 Februari 2021</td>
              <td>12 September 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td>Barang Merk I</td>
              <td>Supplier I</td>
              <td>100</td>
              <td>Pak</td>
              <td>01 Juli 2021</td>
              <td>25 November 2021</td>
              <td>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubahproduct"><i class="fa fa-edit"></i></button>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrincianproduct"><i class="fa fa-search-plus"></i></button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusproduct"><i class="fa fa-trash-alt"></i></button>
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


<!-- Modal Tambah Product -->
<div class="modal fade" id="modaltambahproduct" tabindex="-1" aria-labelledby="modaltambah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaltambah"><b>Tambah Product</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <!-- <img src="img/imgpost.svg" style="width: 250px;"> -->
            <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Nama Product" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Nama Supplier">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Kuantiti">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Satuan">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Harga">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Waktu Masuk Product">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Waktu Expiry Product">
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

<!-- Modal Ubah Product -->
<div class="modal fade" id="modalubahproduct" tabindex="-1" aria-labelledby="modalubah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalubah"><b>Ubah Product</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Product A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Supplier A">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="100">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pcs">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="1.000.000">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="01/07/2021">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="13/05/2022">
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

<!-- Modal Hapus Product-->
<div class="modal fade" id="modalhapusproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Hapus Product</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Product A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Supplier A">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="100">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pcs">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="1.000.000">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="01/07/2021">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="13/05/2022">
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


<!-- Modal Rincian Produk-->
<div class="modal fade" id="modalrincianproduct" tabindex="-1" aria-labelledby="rincianproduct" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rincianproduct"><b>Rincian Product</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            
          </div>
          <div class="col-6">
            <form>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Product A" >
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Supplier A">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="100">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="Pcs">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="1.000.000">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="01/07/2021">
              </div>
              <div class="mb-1">
                <input type="text" class="form-control" placeholder="13/05/2022">
              </div>
              <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal">Keluar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-8"><p>Ditambahkan oleh Pegawai A pada pukul 07.00 WIB, 3 Juli 2021</p></div>
          <div class="col-4">
            <button type="button" class="btn btn-primary">Rincian Selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="col-2"></div>
  </div>
</div>

<!-- note 
1. css ga kebaca
2. semuanya belum responsive 
3. icon sama warna nya kurang sesuai
4. di crud produk masih belum sesuai (isi modal nya)-->
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
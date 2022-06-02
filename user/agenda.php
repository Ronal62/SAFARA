
<?php
    include'../config/koneksi.php';
    // include'header.php';
    // include'menu.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KBIHU SAFARA QOLBY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
  <?php
    include'bar.php';
?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
    include'menu_user.php';
?>
    <!-- <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Safara</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil Safara</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="sejarah.php" class="dropdown-item">Sejarah</a>
                            <a href="misi.php" class="dropdown-item">Visi Misi</a>
                            <a href="struktur.php" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </div>
                    <a href="category.html" class="nav-item nav-link">Kategori Berita</a>
                    <a href="single.html" class="nav-item nav-link">Agenda</a>
                    <a href="single.html" class="nav-item nav-link">Data Jama'ah</a>
                    
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div> -->
    <!-- Navbar End -->


    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
         
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <div class="bg-light py-2 px-4 mb-3">
                        <center><h3 class="m-0">DATA AGENDA</h3></center>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Agenda</th>
                                        <th>Isi</th>
                                        <th>Tanggal</th>
                               
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
          $no=1;
          $sql=mysqli_query($conn,"SELECT* FROM agenda");
          while ($row=mysqli_fetch_assoc($sql)) {

      ?>
      <tr>
       <td><?php echo $no; ?></td>  
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['isi']?></td>
        <td><?php echo $row['tgl']?></td>
       
      </tr>

      <?php
          $no++;

    } 
    ?>   
</tbody>
                            </table>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories Berita</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>

                                    <?php
          $no=1;
          $sql=mysqli_query($conn,"SELECT * FROM kategori");
          while ($row=mysqli_fetch_assoc($sql)) {

      ?>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100"  style="object-fit: cover;">
                        <font color="#ffffff"><a href="<?php echo $row['nama_kategori']?>" class="overlay align-items-center justify-content-center h4 m-0 text-dark text-white" ><?php echo $row['nama_kategori']?></font>
                           
                        </a>
                    </div>
                    
                </font>

                    <?php
          $no++;

    } 
    ?>   
                </div>
            </div>
        </div>
    </div>

   
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
  
          
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">SMK DARUL LUGHAH WAL KAROMAH</a>. All Rights Reserved. 
            
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by : XI RPL
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
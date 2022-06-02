<?php
        session_start();
?>
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $('.hapus').click(function(){
            text = $(this).parents('tr').find('td').eq(1).html();
            var pesan = confirm("Judul : "+text+"\nAkan dihapus !\nLanjutkan?");
            if(pesan){
                return true;    
            }else{
                return false;
            }   
        })  
    })
</script>
<?php
	include'../config/koneksi.php';
    include'../config/fungsi_thumb.php';
    include'../config/fungsi_seo.php';
    include'../config/library.php';
	include'header.php';
	include'menu.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Berita</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="tambah_berita.php">Form Berita</a></li>
                      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    
                    <div class="card-body">
                        <h5>Form Admin</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST">
                                    <input type="hidden" name="id_berita" value="<?= $id_berita ?>">
                                     <div class="form-group">
                                        <input type="hidden" name="id_berita" value="<?= $id_berita ?>">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input type="text" class="form-control"placeholder="Enter Judul" name="judul">
                                    </div>

                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori Berita</label>
                                        <?php
                                          echo"<select name='kategori'>";
                                    $sql = mysqli_query($conn,"SELECT * FROM kategori WHERE aktif='y' ");
                                    while($r = mysqli_fetch_assoc($sql)){
                                        echo"<option value='$r[id_kategori]'>$r[nama_kategori]</option>";
                                    }
                                echo"</select>";
                                ?>
                                    </div>


                                 

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Isi</label>
                                        <input type="text" class="form-control" name="isi_berita">
                                    </div>

                                    <b>
                                        <?php
                                        $tanggal=date('l, d-m-Y');
                                        echo $tanggal;
                                        ?>
                                    </b>
                                    <hr>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gambar</label>
                                        <input type="file" name="fupload" value='' class="form-control" placeholder="Upload Photo" >
                                    </div>
                                   
                                    <button class="btn  btn-primary" type="submit" value="submit" name="simpan">Submit</button>
                                </form>
                            </div>
                           
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>
<?php
// include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
   $lokasi_file    = $_FILES['fupload']['tmp_name'];
        $tipe_file      = $_FILES['fupload']['type'];
        $nama_file      = $_FILES['fupload']['name'];
        $acak           = rand(1,99);
        $nama_file_unik = $acak.$nama_file;
        
        $judul_seo      = seo_title($_POST['judul']);
        
        // Apabila ada gambar yang diupload
      if (strlen($nama_file)>0){
            if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
                echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
                    window.location=('../media.php?module=berita)</script>";
            }else{
                fotoBerita($nama_file_unik);    
                mysqli_query($conn,"INSERT INTO berita(
                                    id_kategori,
                                    username,
                                    judul,
                                    judul_seo,
                                    isi_berita,
                                    hari, 
                                    tanggal,
                                    jam,
                                    gambar) 
                            VALUES(
                                   '$_POST[kategori]',
                                   '$_SESSION[user]',
                                   '$_POST[judul]',
                                   '$judul_seo', 
                                   '$_POST[isi_berita]',
                                   '$hari_ini',
                                   '$tgl_sekarang',
                                   '$jam_sekarang',
                                   '$nama_file_unik')");
                
            }
      }else{
                mysqli_query($conn,"INSERT INTO berita(
                                    id_kategori,
                                    username,
                                    judul,
                                    judul_seo,
                                    isi_berita,
                                    hari, 
                                    tanggal,
                                    jam) 
                            VALUES(
                                   '$_POST[kategori]',
                                   '$_SESSION[user]',
                                   '$_POST[judul]',
                                   '$judul_seo', 
                                   '$_POST[isi_berita]',
                                   '$hari_ini',
                                   '$tgl_sekarang',
                                   '$jam_sekarang')");  
            }
           if ($sql) {
      ?>
      <script type="text/javascript">
      alert ("Data Berhasil Di Simpan"); 
    window.location.href="berita.php";
  </script>
  <?php
    }
  }
?>
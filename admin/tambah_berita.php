<?php
session_start();

include'../config/koneksi.php';
    // include'../config/fungsi_thumb.php';
    // include'../config/fungsi_seo.php';
    // include'../config/library.php';
include'header.php';
include'menu.php';
     // $id_kategori = $_GET['id_kategori'];
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
                            <h5>Form Berita</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                  <form action="" method="POST" action="" enctype="multipart/form-data">

                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kategori</label>
                                    <select name="kategori" class="form-control" >

                                     <option value=0 selected>- Pilih Nama Kategori -</option>";
                                     <?php
                                     $sql=mysqli_query($conn,"SELECT * FROM kategori");
                                     while($data=mysqli_fetch_array($sql)){
                                      echo "<option value=$data[id_kategori]>$data[nama_kategori]</option>";
                                  }
                                  ?>
                              </select>                       
                          </div>
                          



                          <div class="form-group">
                            <label for="exampleInputEmail1">Judul Berita</label>
                            <input type="text" class="form-control"placeholder="Enter Judul Berita" name="judul">
                        </div>

                        


                        

                        <div class="form-group">
                            <label for="exampleInputEmail1">Isi</label>
                            <textarea class="form-control"placeholder="Enter Isi" name="isi_berita"></textarea>
                        </div>

                        <b>
                            <?php
                            $tanggal=date('l, d-m-Y');
                            echo $tanggal;
                            ?>
                        </b>
                        <hr>


                        <b>
                           <?php 
                           date_default_timezone_set('Asia/jakarta');
                           echo "Waktu Sekarang menunjukkan Adalah"   . date("h:i:s");
                           ?>
                       </b>


                       <div class="form-group">
                        <label for="exampleInputPassword1">Gambar</label>
                        <input type="file" name="gambar"class="form-control"placeholder="Upload Photo" >
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
    <!-- Warning Section Ends -->x

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>
<?php
if (isset($_POST['simpan'])) {
 // $id_berita     = $_POST['id_berita'];
   $id_kategori     = $_POST['kategori'];
   $judul      = $_POST['judul'];
   $isi_berita       = $_POST['isi_berita'];
   $ekstensi = array('png','jpg','jpeg');
   $filename = $_FILES['gambar']['name'];
   $ukuran = $_FILES['gambar']['size'];
   $ext = pathinfo($filename,PATHINFO_EXTENSION);


//  for ($x = 0; $x < $jumlah_dipilih; $x++) {
//  $sv = mysqli_query($koneksi, "INSERT INTO detail_kamar values ('', '$nomor_kamar', '$fasilitas[$x]')");
// }


   if (!in_array($ext, $ekstensi)) {
      echo "Yang Anda Upload Bukan Gambar Atau Foto";
  }else{
     $ex = explode('.', $filename);
     $dot = $ex[1];
     $nm = uniqid().'.'.$dot;

     $sql = mysqli_query($conn, "INSERT INTO berita VALUES( '', '$id_kategori', '$judul', '$isi_berita',CURDATE() ,CURTIME(), '$nm')");
     if ($sql) {
         echo "
         <script>
         alert('Data Berhasil Disimpan');
         window.location = 'berita.php';
         </script>
         ";
     }
 move_uploaded_file($_FILES['gambar']['tmp_name'], 'foto_berita/'.$nm);
     // $from = move_uploaded_file($_FILES['gambar']['tmp_name'], 'foto_berita/'.$nm); 
     // $to = move_uploaded_file($_FILES['gambar']['tmp_name'], '../user/foto_berita2/'.$nm);
     // copy($from,$to);
 }
}
?>

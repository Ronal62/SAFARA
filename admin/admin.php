<?php
	include'../config/koneksi.php';
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
			
	</header>
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
                            <h5 class="m-b-10">Data Admin</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="media.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin Table</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
      
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <h3><i class=""></i> </h3>
                       <a href="tambah_admin.php" class="btn btn-primary mb-2" ><i class="fas fa-plus-circle"></i> Tambah Admin</a>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Admin</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
          $no=1;
          $sql=mysqli_query($conn,"SELECT* FROM admin");
          while ($row=mysqli_fetch_assoc($sql)) {

      ?>
      <tr>
       <td><?php echo $no; ?></td>  
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['password']?></td>
        <td><a href="<?= 'edit_admin.php?id='.$row['id_admin'] ?>"><button class="btn btn-danger"><i class="material-icons"></i>Edit</button></a> 

            <a href="<?= 'hapus_admin.php?id_admin='.$row['id_admin'] ?>" 
              onclick="return confirm('Yakin Menghapus Data Ini?')"><button class="btn btn-danger"><i class="material-icons"></i>Hapus</button></a>
            </td>
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
            <!-- [ stiped-table ] end -->
            <!-- [ Contextual-table ] start -->
           
            <!-- [ Contextual-table ] end -->
            <!-- [ Background-Utilities ] start -->
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
  
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>
</html>

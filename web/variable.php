<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h5>Variabel</h5>
              </div>
              <?php
$nama="Maxim Havelaar";
$usia=20;

echo"Nama Saya adalah $nama saya berusia $usia tahun";

$sekolah="SMA Nurul Fikri";
$alamat_sekolah="Depok";

echo"Saya bersekolah di".$sekolah."yang beralamat di".$alamat_sekolah."";

echo "<br/>"


?>
        </div>
</div>
    </main>
<?php include_once('footer.php'); ?>





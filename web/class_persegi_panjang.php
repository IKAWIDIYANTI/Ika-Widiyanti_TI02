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
                <h5>OOP Persegi Panjang</h5>
              </div>
              <div class="card-body">
              <?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>
        </div>
</div>

<div class="card">
              <div class="card-header">
                <h5>Output Persegi Panjang</h5>
              </div>
              <div class="card-body">
              <?php


$persegiPanjang = new PersegiPanjang();
$persegiPanjang->panjang = 18;
$persegiPanjang->lebar = 12;

echo "Luas: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang->hitungKeliling() . "<br>";

?>

 </div>
</div>
    </main>
<?php include_once('footer.php'); ?>










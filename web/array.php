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
                <h5>Array Associatif</h5>
              </div>
              <div class="card-body">
              <?php
$mahasiswa1=[
    "nama" => "Mikhaila Tal",
    "usia" => 34,
    "domisili" => "Latvia",
    "pendidikan" => "Universitas Indonesia"
];
echo $mahasiswa1["nama"]."<br/>";
echo $mahasiswa1["usia"]."<br/>";
echo $mahasiswa1["domisili"]."<br/>";
echo $mahasiswa1["pendidikan"];
?>
</div>
</div>
<div class="card">
              <div class="card-header">
                <h5>Array Index</h5>
              </div>
              <div class="card-body">
              <?php
$ibu_kota=["Jakarta","Kuala Lumpur","Tokyo","Seoul","Moscow","Pyongyang"];

#Menambahkan data
$ibu_kota[]="Nusantara";
$ibu_kota[]="Beijing";

#Mengubah data
$ibu_kota[3]="Busan";
$ibu_kota[6]="Roma";

#menghapus data
unset($ibu_kota[0]);

#mencetak seluruh data
foreach($ibu_kota as $kota){
    echo $kota."<br/>";
}

#mencetak satu data
echo $ibu_kota[3];

?>
</div>
</div>
    </main>
<?php include_once('footer.php'); ?>





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
                <h5>Form Belanja</h5>
              </div>
              <div class="card-body">
              <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
              <h1>Belanja Online</h1>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <select id="jumlah" name="jumlah" class="custom-select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>  
            </div>
        </div>
    </div>
<br/><br/>
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
  </a>
  <a href="#" class="list-group-item list-group-item-action">TV 4.200.0000</a>
  <a href="#" class="list-group-item list-group-item-action">Kulkas 3.100.000</a>
  <a href="#" class="list-group-item list-group-item-action">Mesin Cuci 3.800.000</a>
  <a class="list-group-item list-group-item-action disabled">Harga dapat berubah setiap saat</a>
</div>
</body>

        </div>
</div>

<div class="card">
              <div class="card-header">
                <h5>Form Hasil Belanja</h5>
              </div>
              <div class="card-body">
<?php
if (isset($_POST["submit"])){

    $customer=$_POST['customer'];
    $produk=$_POST['produk'];
    $jumlah=$_POST['jumlah'];
    
    
    if($produk == "tv"){
        $harga = 4200000;
    }
    elseif($produk == "kulkas"){
        $harga = 3100000;
    }
    elseif($produk == "mesin cuci"){
        $harga = 3800000;
    }
    else{
        $harga = "Barang tidak tersedia";
    }
    
    $total=$jumlah*$harga;
    
    echo "Customer: ".$customer."<br/>";
    echo "Pilih Produk: ".$produk."<br/>";
    echo "Jumlah: ".$jumlah."<br/>";
    echo "Total Belanja: Rp.".$total;   
}
else{
    echo "harap masukkan data melalui form <a href='form_belanja_online.php'> form_belanja_online </a>";
}


?>
 </div>
</div>
    </main>
<?php include_once('footer.php'); ?>






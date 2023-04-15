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
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
              <center> <h5 style="margin: 20px;">Form Isian Indeks Massa Tubuh (BMI)</h5> </center>
<form method="POST" action="form_bmi.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat_bdn" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="berat_bdn" name="berat_bdn" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">Kg</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi_bdn" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-blind"></i>
          </div>
        </div> 
        <input id="tinggi_bdn" name="tinggi_bdn" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">cm</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bell-o"></i>
          </div>
        </div> 
        <input id="umur" name="umur" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">Thn</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" checked="checked"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>
        </div>
</div>

<div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
              <?php
class BmiPasien {
  public $nama;
  public $jenis_kelamin;
  public $umur;
  public $berat;
  public $tinggi;

  function __construct($nama, $jenis_kelamin, $umur, $berat, $tinggi) {
      $this->nama = $nama;
      $this->jenis_kelamin = $jenis_kelamin;
      $this->umur = $umur;
      $this->berat = $berat;
      $this->tinggi = $tinggi;
  }

  function hasilBMI() {
      if ($this->tinggi == 0) {
          return "Tinggi tidak valid";
      } else {
          $bmi = $this->berat / (($this->tinggi/100) * ($this->tinggi/100));
          return round($bmi, 1);
      }
  }

  function statusBMI() {
      $bmi = $this->hasilBMI();
      if ($bmi < 18.5) {
          return "Kekurangan Berat Badan";
      } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
          return "Berat Badan Normal";
      } elseif ($bmi >= 25 && $bmi <= 29.9) {
          return "Kelebihan Berat Badan";
      } elseif ($bmi >= 30) {
          return "Kegemukan (Obesitas)";
      } else {
          return "Tidak Diketahui";
      }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bmi_pasien = new BmiPasien($_POST["nama"], $_POST["jk"], $_POST["umur"], $_POST["berat_bdn"], $_POST["tinggi_bdn"]);

  echo "<h3>Output Form</h3>";
  echo "<h5>Hasil Evaluasi BMI </h5>";
  echo "<p>Nama: " . $bmi_pasien->nama . "</p>";
  echo "<p>Jenis Kelamin: " . $bmi_pasien->jenis_kelamin . "</p>";
  echo "<p>Umur: " . $bmi_pasien->umur . "</p>";
  echo "<p>Berat: " . $bmi_pasien->berat . " kg</p>";
  echo "<p>Tinggi: " . $bmi_pasien->tinggi . " cm</p>";
  echo "<p>BMI: " . $bmi_pasien->hasilBMI() . "</p>";
  echo "<p>Status BMI: " . $bmi_pasien->statusBMI() . "</p>";
}

    
?>
              </div>
</div>


<div class="card-header">
              </div>
              <div class="card-body">
<!DOCTYPE html>
<html>
<head>
	<title>Daftar BMI Pasien</title>
	<style>
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
}

th {
    background-color: white;
}

tr:nth-child(2n) {
  background-color: #f9ffb8;
}
tr:nth-child(2n+1) {
  background-color: #cefbb5;
}
tr:nth-child(3n) {
  background-color: #fdbdb7;
}

	</style>
</head>
<body>
	<h2>Daftar BMI Pasien</h2>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
        		<th>Jenis Kelamin</th>
				<th>Umur</th>
				<th>Berat (kg)</th>
				<th>Tinggi (cm)</th>
				<th>BMI</th>
				<th>Hasil</th>
			</tr>
		</thead>
		<tbody>

			<?php
		// include_once('class_bmipasien.php');
		?>
		<?php

			$daftar_bmi = array(
				$daftar_bmi =	new BmiPasien('Rosalie Naurah','Perempuan', 18, 46.2, 155),
				new BmiPasien('Rara Wulan', 'Perempuan', 20, 42.8, 158),
				new BmiPasien('Glagah Putih', 'Laki-laki', 22, 90.3, 154)
      );

			foreach ($daftar_bmi as $key => $pasien) {
				echo '<tr>';
				echo '<td>'.($key+1).'</td>';
				echo '<td>'.$pasien->nama.'</td>';
        echo '<td>'.$pasien->jenis_kelamin.'</td>';
				echo '<td>'.$pasien->umur.'</td>';
				echo '<td>'.$pasien->berat.'</td>';
				echo '<td>'.$pasien->tinggi.'</td>';
				echo '<td>'.$pasien->hasilBMI().'</td>';
				echo '<td>'.$pasien->statusBMI().'</td>';
				echo '</tr>';

				
			}
			?>
		</tbody>
	</table>
</body>
</html>

              </div>
</div>
    </main>
<?php include_once('footer.php'); ?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>pendaftaran beasiswa</title>
    <style>
        body { 
        font-family: Arial, sans-serif; 
        max-width: 500px; 
        margin: 0 auto; 
        padding: 20px; 
        background-color: #85abaf; }
        h2 { 
        text-align: center; 
        margin-bottom: 30px; }

        label { 
        display: block; 
        margin-bottom: 5px; }

        input[type="text"], input[type="date"], input[type="number"] { 
        width: 100%; 
        padding: 10px; 
        margin-bottom: 15px; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
        font-size: 16px; }

        input[type="radio"] { 
        margin-right: 10px; }

        input[type="submit"] { 
        background-color: #2d8c42;
        color: white; 
        padding: 10px 20px; 
        border: none;
         border-radius: 4px; 
         cursor: pointer; }

        input[type="submit"]:hover { 
        background-color: #45a049; 
        transform: rotate(360deg);}
    </style>
</head>
<body>
        <style>
               
        </style>
    <h1><center>Biodata</center></h1>
    <form method="POST">
        <div>
            <label>Nama : </label>
            <input type="text" placeholder="Masukkan nama" name="nama">
    </div>
    <br>
       <div>

        <input type="radio" type="radio" id="L" name="jenis kelamin" value="L">laki-laki
        <input type="radio" id="P" name="jenis kelamin" value="P">perempuan
        
    </div>
    <br>
    <div>
        <labels>Alamat : </label>
        <input type="text" placeholder="Masukkan Alamat" name="alamat">
    </div>
    <br>
    <div>
            <label>Agama : </label>
            <input type="text" placeholder="Masukkan Agama" name="agama">
    </div>
    <br>
    <div>
            <label>Tempat Lahir : </label>
            <input type="text" placeholder="Masukkan Tempat Lahir" name="tempat lahir">
    </div>
    <br>
    <div>
            <label>Tanggal Lahir </label>
            <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggal lahir">
    </div>
    <br>
    <div>
            <label>Usia : </label>
            <input type="number" placeholder="Masukkan Usia" name="usia">
    </div>
    <br>
    <div>
            <label>Asal Sekolah : </label>
            <input type="text" placeholder="Masukkan Sekolah" name="asal sekolah">
    </div>
    <br>
    <div>
            <label>Hobi : </label>
            <input type="text" placeholder="Masukkan Sekolah" name="hobi">
    </div>
    <br>
    <div>
            <label>Cita-cita :  </label>
            <input type="text" placeholder="Masukkan Sekolah" name="cita-cita">
    </div>
    <br>
            <button>submit</button>
    </form>
   <?php
   
    $nama = $_GET['nama'];
    $jk = $_GET['jenis kelamin'];
    $alamat = $_GET['alamat'];
    $agama = $_GET['agama'];
    $tl = $_GET['tempat lahir'];
    $ttl = $_GET['tanggal lahir'];
    $usia = $_GET['usia'];
    $sekolah = $_GET['asal sekolah'];
    $hobi = $_GET['hobi'];
    $citacita = $_GET['cita-cita'];

    if($nama){
        echo "<strong> Nama saya : </strong> {$nama} <br>";
    }
    if($jk){
        echo "<strong> jenis kelamin: </strong> {$jk} <br>";
    }
    if($alamat){
        echo "<strong> alamat : </strong> {$alamat} <br>";
    }
    if($agama){
        echo "<strong> alamat : </strong> {$agama} <br>";
    }
    if($tl){
        echo "<strong> alamat : </strong> {$tl} <br>";
    }
    if($tll){
        echo "<strong> alamat : </strong> {$ttl} <br>";
    }
    if($usia){
        echo "<strong> alamat : </strong> {$usia} <br>";
    }
    if($sekolah){
        echo "<strong> alamat : </strong> {$sekolah} <br>";
    }
    if($hobi){
        echo "<strong> alamat : </strong> {$hobi} <br>";
    }
    if($citacita){
        echo "<strong> alamat : </strong> {$citacita} <br>";
    }
?>

</body>
</html>


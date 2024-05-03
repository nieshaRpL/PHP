<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yaa</title>
</head>
<body>

<?php

$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
);

echo "Daftar Siswa:\n"."<br>";
foreach ($siswa as $s) {
    echo "Nama   : " . $s['nama'] . "\n"."<br>";
    echo "Kelas  " . $s['kelas'] . "\n";
    echo "-".$s['jurusan'] . "\n"."<br>";
    
}

?>
</body>
</html>
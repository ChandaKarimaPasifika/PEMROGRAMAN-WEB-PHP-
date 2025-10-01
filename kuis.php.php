<!DOCTYPE html>
<html>
<head>
    <title>Kuis Pemrograman Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 { color: #333; }
        form {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #aaa;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #444;
            padding: 8px;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Form Biodata Mahasiswa (POST)</h2>
<form method="post" action="">
    Nama Lengkap : <input type="text" name="nama"><br><br>
    NIM : <input type="text" name="nim"><br><br>
    Program Studi :
    <select name="prodi">
        <option value="Informatika">Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
    </select><br><br>
    Jenis Kelamin :
    <input type="radio" name="jk" value="Laki-laki">Laki-laki
    <input type="radio" name="jk" value="Perempuan">Perempuan<br><br>
    Hobi : 
    <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
    <input type="checkbox" name="hobi[]" value="Musik">Musik
    <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br><br>
    Alamat : <br>
    <textarea name="alamat" rows="3" cols="40"></textarea><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
// Proses form biodata (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['prodi'];
    $jk     = $_POST['jk'] ?? "-";
    $hobi   = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "-";
    $alamat = $_POST['alamat'];

    echo "<h3>Hasil Biodata</h3>";
    echo "<table>
            <tr><th>Field</th><th>Data</th></tr>
            <tr><td>Nama Lengkap</td><td>$nama</td></tr>
            <tr><td>NIM</td><td>$nim</td></tr>
            <tr><td>Program Studi</td><td>$prodi</td></tr>
            <tr><td>Jenis Kelamin</td><td>$jk</td></tr>
            <tr><td>Hobi</td><td>$hobi</td></tr>
            <tr><td>Alamat</td><td>$alamat</td></tr>
          </table>";
}
?>

<hr>

<h2>Form Pencarian (GET)</h2>
<form method="get" action="">
    Kata kunci : <input type="text" name="keyword">
    <input type="submit" value="Cari">
</form>

<?php
// Proses form pencarian (GET)
if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
    $keyword = htmlspecialchars($_GET['keyword']);
    echo "<p>Anda mencari data dengan kata kunci: <b>$keyword</b></p>";
}
?>

</body>
</html>

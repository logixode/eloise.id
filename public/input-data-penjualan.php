<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Penjualan</title>
</head>
<body>
    <h2>Input Data Penjualan</h2>
    <form action="public/proses-inputpenjualan.php" method="POST">
        <label for="jenis_kerudung">Jenis Kerudung</label>
        <select name="kode_jenis">
            <option value="1">Segi Empat</option>
            <option value="2">Pasmina Diamond</option>
            <option value="3">Pasmina Ceruty</option>
        </select>
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" placeholder="Jumlah barang">
        <input type="submit" value="Tambahkan">
    </form>  
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pegadaian</title>
    <style>
        body {
            font-family: Arial;
        }
        form {
            width: 300px;
            margin: 40px auto;
        }
        input {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h3 align ="center">Form Pegadaian Syariah</h3>
    <h4 align ="center">Jl. Keadilan No.16</h4>
    <h4 align ="center">Telp. 72353459</h4>
    <hr width="300">

    <form action="proses_nasabah.php" method="POST">

        Nama Nasabah<br>
        <input type="text" name="nama">

        Jumlah Pinjaman<br>
        <input type="number" name="pinjaman">

        Lama Angsuran<br>
        <input type="number" name="lama">

        Keterlambatan<br>
        <input type="number" name="terlambat">

        <button type="submit">Proses</button>

    </form>

</body>
</html>


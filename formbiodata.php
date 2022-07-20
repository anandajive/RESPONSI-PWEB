<html>
<head>
    <title>Form Input Biodata</title>
    <style>
        div {padding: 4px};
    </style>
</head>
<body>
        <form action="proses.php" method="POST">
            <div>
                <label>Nama :</label> <br>
                <input name="nama" type="text">
            </div>
            <div>
                <label>NIM :</label> <br>
                <input name="nim" type="text">
            </div>
            <div>
                <label>Fakultas :</label> <br>
                <input name="fakultas" type="text">
            </div>
            <div>
                <label>Jenis Kelamin :</label> <br>                
                <input name="jenis_kelamin" value="Laki_laki" type="radio">Laki-laki
                <input name="jenis_kelamin" value="Perempuan" type="radio">Perempuan
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
</body>
</html>
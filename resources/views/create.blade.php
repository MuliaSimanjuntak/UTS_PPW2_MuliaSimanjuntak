<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4>Tambah pemain</h4>
        <form method="post" action="{{route('pemain.store')}}">
            @csrf
            <div>Nama_pemain<input type="text" name="nama_pemain"></div>
            <div>nomor_punggung<input type="text" name="nomor_punggung"></div>
            <div>posisi<input type="text" name="posisi"></div>
            <button type="submit">Simpan</button>
            <a href="{{'/pemain'}}">Kembali</a>
        </form>
    </div>
</body>
</html>

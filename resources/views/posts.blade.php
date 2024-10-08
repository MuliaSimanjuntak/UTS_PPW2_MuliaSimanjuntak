<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('buku.create') }}" class="btn btn-primary float-end">Tambah Buku</a>
    <table class="table table-stripped">
    <h1>Daftar Buku</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Number</th>
                <th>ID</th>
                <th>Nama_pemain</th>
                <th>nomor_punggung</th>
                <th>posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $index => $player)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $index+1 }}</td> --}}
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->nama_pemain }}</td>
                    <td>{{ $player->posisi }}</td>
                    <td>{{"No. ".number_format($player->nomor_punggung, 2, ',', '.') }}</td>
                    <td>
                    <form action="{{ route('pemain.destroy', $player->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Sure you want to DELETE?')" type="submit"
                            class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('player.edit', $book->id)}}">Edit</a>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
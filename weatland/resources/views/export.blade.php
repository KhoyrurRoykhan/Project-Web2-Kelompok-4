<!DOCTYPE html>
<html>

<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Data Leaderboard</h1>
    </center>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>Nama</th>
                <th>Skor</th>
                <!-- Tambahkan kolom sesuai dengan struktur tabel Anda -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->skor }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

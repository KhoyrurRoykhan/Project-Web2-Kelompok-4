<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Leaderboard</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Skor</th>
                <!-- Tambahkan kolom sesuai dengan struktur tabel Anda -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->skor }}</td>
                    <!-- Tambahkan kolom sesuai dengan struktur tabel Anda -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
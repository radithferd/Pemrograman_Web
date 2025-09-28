<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px auto;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
        }
        th, td {
            border: 1px solid #666;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
?>
    <h2 style="text-align:center;">Data Dosen</h2>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?= $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .tambah {
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelajaran</th>
                    <th>Nama Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($setup_pelajaran as $sp)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$sp->id_pelajaran}}</td>
                    <td>{{$sp->nama_pelajaran}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
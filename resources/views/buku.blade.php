<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e2e6ea;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>List Pengguna</h1>

<table>
    <thead>
        <tr>
            <th>Id Buku</th>
            <th>Nama Buku</th>
            <th>Nama Pengarang</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $Book)
        <tr>
            <td>{{$Book->id}}</td>
            <td>{{$Book->nama_buku}}</td>
            <td>{{$Book->pengarang_buku}}</td>
            <td><a href="/edit/">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

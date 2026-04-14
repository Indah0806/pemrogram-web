<!DOCTYPE html>
<html>
<head>
    <title>Katalog Buku</title>
</head>
<body>

<h2>Katalog Buku</h2>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
    </tr>

    @foreach($data as $buku)
    <tr>
        <td>{{ $buku['judul'] }}</td>
        <td>{{ $buku['penulis'] }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
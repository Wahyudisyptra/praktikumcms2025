<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>
    <ul>
        @foreach ($matakuliahs as $mk)
            <li>
                <a href="{{ url('/matakuliah/' . $mk->id) }}">{{ $mk->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/ikon/logon.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nekomind</title>
</head>
<body>
    <h1>Nekomind</h1>
    <ul>
        @foreach($sekolahData as $sekolah)
            <li>{{ $sekolah['sekolah'] }}</li>
        @endforeach
    </ul>
</body>
</html>

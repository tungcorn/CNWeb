<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Của Tôi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <h1>Trang Web CSE485 - Chương 8</h1>
</header>

<div class="container">

    <form action="{{ route('sinh-vien.store') }}" method="POST">
        @csrf
        <div>
            <label for="ten_sinh_vien">Ten sinh vien: </label>
            <input type="text"
                   name="ten_sinh_vien"
                   value="{{ old('ten_sinh_vien') }}">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="text"
                   name="email"
                   value="{{ old('email') }}">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        <div>
            <div class="student-list">
                @foreach($dsSinhvien as $sinhvien)
                    <p>{{ $sinhvien->ten_sinh_vien }} - {{ $sinhvien->email }}</p>
                @endforeach
            </div>
        </div>
    </form>

</div>

<footer>
    <p>&copy; 2025 - Khoa CNTT - Trường Đại học Thủy Lợi</p>
</footer>

</body>
</html>

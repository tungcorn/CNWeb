<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $viewTitle ?? 'Website Của Tôi' }}</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        header, footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        nav a {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Trang Web CSE485 - Chương 7</h1>
</header>

<nav>
    <a href="/">Trang Chủ</a>
    <a href="/about">Giới thiệu</a>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; 2025 - Khoa CNTT - Trường Đại học Thủy Lợi</p>
</footer>

</body>
</html>

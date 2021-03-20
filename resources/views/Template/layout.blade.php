<html>
<head>
    <title>@yield('tieude')</title>
</head>
<body>
@include('Template.header')
@yield('header')
<div>
    <h1>Quản lý sản phẩm</h1>
@yield('noidung')
</div>
@include('Template.footer')
@yield('footer')
</body>
</html>

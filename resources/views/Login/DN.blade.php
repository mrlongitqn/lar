<form action="thuc-hien-dang-nhap" method="post">
    @csrf
    <input name="email" type="email" placeholder="Vui long nhap email">
    <input name="password" type="password" placeholder="Vui long nhap password">
    <input type="submit" value="Dang Nhap">
</form>

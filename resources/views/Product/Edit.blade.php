@extends('Template.layout')
@section('tieude')
    Sửa thông tin sản phẩm
@endsection
@section('noidung')
    Sửa sản phẩm {{$tensp}}
    <p>
        <?php
        if (5 > 7) {
            echo '5 lớn hơn 7';
        } else {
            echo '5 bé hơn 7';
        }
        ?>
    </p>
    <p>
        @if($so>7)
            {{$so}} lớn hơn 7
        @else
            {{$so}} bé hơn 7
        @endif

    </p>
    @for($i = 1; $i<10; $i++)
        <p>{{$i}}</p>
    @endfor
@endsection

@section('header')
    Đây là nội dung sẽ hiển thị ở header
@endsection


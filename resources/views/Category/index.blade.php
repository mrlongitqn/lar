@extends('Template.admin-layout')
@section('noidung')
    <a class="btn btn-warning" href="{{route('them-category')}}">Thêm mới</a>
    <table  class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Slug</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        @php
        $i = 1;
        @endphp
        @foreach($data as $category)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->active}}</td>
                <td>
                    <a href="{{route('sua-category')}}/{{$category->id}}">Sửa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection


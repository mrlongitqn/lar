@extends('Template.admin-layout')
@section('noidung')
    <form method="post" action="{{route('them-category')}}">

        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
    <p>
        <input type="submit" value="Thêm danh mục">
    </p>

    </form>
@endsection

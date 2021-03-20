@extends('Template.admin-layout')
@section('noidung')
    <form method="post" action="{{route('sua-category')}}">
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" value="{{$category->tag}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input type="text" name="description" value="{{$category->description}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
        </div>
    <p>
        <input type="submit" value="Sửa danh mục">
    </p>

    </form>
@endsection

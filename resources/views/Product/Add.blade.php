@extends('Template.admin-layout')
@section('tieude')
    Thêm sản phẩm
@endsection
@section('styles')
    <style>
        .clasA{
            color: red;
        }
    </style>
@endsection
@section('noidung')
<div class="col-12">
    <form>
    <div class="form-group">
        <label class="clasA">Tên sản phẩm</label>
        <input type="text" class="form-control">
    </div>
    </form>
</div>
@endsection



@extends('layouts.app')

@section('content')

<h3>Sửa lớp học</h3>

<form method="POST" action="/classes/{{ $lop->id }}">
    @csrf
    @method('PUT')

    <input name="ten_lop" class="form-control mb-2"
           value="{{ $lop->ten_lop }}">

    <input name="giao_vien" class="form-control mb-2"
           value="{{ $lop->giao_vien }}">

    <button class="btn btn-primary">Cập nhật</button>
</form>

@endsection
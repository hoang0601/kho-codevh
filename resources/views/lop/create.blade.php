@extends('layouts.app')

@section('content')

<h3>Thêm lớp học</h3>

<form method="POST" action="/classes">
@csrf

<input name="ten_lop" class="form-control mb-2" placeholder="Tên lớp">
<input name="giao_vien" class="form-control mb-2" placeholder="Giáo viên">

<button class="btn btn-success">Lưu</button>

</form>

@endsection
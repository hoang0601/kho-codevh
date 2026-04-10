@extends('layouts.app') {{-- nếu bạn có layout --}}

@section('content')

<a href="/classes/create" class="btn btn-primary mb-2">Thêm lớp</a>

<table border="1" width="100%">
<tr>
    <th>Tên lớp</th>
    <th>Giáo viên</th>
    <th>Hành động</th>
</tr>

@foreach($data as $lop)
<tr>
    <td>{{ $lop->ten_lop }}</td>
    <td>{{ $lop->giao_vien }}</td>
    <td>
        <a href="/classes/{{ $lop->id }}/edit">Sửa</a>

        <form method="POST" action="/classes/{{ $lop->id }}" style="display:inline">
            @csrf
            @method('DELETE')
            <button>Xóa</button>
        </form>
    </td>
</tr>
@endforeach

</table>

<br>

{{ $data->links() }}

@endsection
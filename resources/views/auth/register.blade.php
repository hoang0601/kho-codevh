<form method="POST" action="/register">
@csrf
<input name="name" placeholder="Tên" class="form-control mb-2">
<input name="email" placeholder="Email" class="form-control mb-2">
<input name="password" type="password" placeholder="Mật khẩu" class="form-control mb-2">
<button class="btn btn-success">Đăng ký</button>
</form>
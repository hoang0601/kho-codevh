<form method="POST" action="/login">
@csrf
<input name="email" placeholder="Email" class="form-control mb-2">
<input name="password" type="password" placeholder="Password" class="form-control mb-2">
<button class="btn btn-primary">Đăng nhập</button>
</form>
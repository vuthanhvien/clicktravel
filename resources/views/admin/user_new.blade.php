@extends('admin.layout')

@section('content')
<style type="text/css">
	.detail,
	.title {
		background: white;
		border: 1px solid #ccc;
		padding: 15px 15px 15px 25px;
		border-radius: 5px;
	}
	input,
	select{
		width: 100%;
		height: 50px;
		color: #555;
		border: 1px solid #ccc;
		border-radius: 3px;
		padding-left: 15px;
	}
	label{
		margin-top: 15px;
		font-weight: bold;
	}
</style>
<div class="container-fluid">
	<form action="/admin/user/new" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="type" value="new">

		<div class="title">
			<div class="row">
				<div class="col-md-12 ">
					<h4>Thông tin người dùng</h4>
				</div>
			</div>
		</div>
		<br>
		<div class="detail">
		<br>
		@if($msg_err)
		<div class="alert alert-warning">
			<strong>Kiểm tra lại thông tin, {{$msg_err}} </strong>
		</div>
		@endif
		<br>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Tên</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="name" required value="{{$input->name}}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Mật khẩu</label>
						</div>
						<div class="col-md-9">
							<input type="password" name="password" required value="">
						</div>
					</div>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Email</label>
						</div>
						<div class="col-md-9">
							<input type="email" name="email"  required value="{{$input->email}}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Xác nhận Mật khẩu</label>
						</div>
						<div class="col-md-9">
							<input type="password" name="password_confirm" required >
						</div>
					</div>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Ngày sinh</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="birthday" value="{{$input->birthday}}">
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<label>Chức vụ</label>
						</div>
						<div class="col-md-9">
							<!-- <input type="password" name="password_confirm"> -->
							<select name="role" required>
								<option value="1" @if ($input->role == 1) selected @endif>Admin</option>
								<option value="2" @if ($input->role == 2) selected @endif>Đại lý cấp 2</option>
								<option value="3" @if ($input->role == 3) selected @endif>Nhân viên</option>
								<option value="4" @if ($input->role == 4) selected @endif >Khách hàng</option>
							</select>
						</div>
					</div>
				</div>

			</div>
			<br>
			<div class="row">
				<div class="col-md-12 text-right">
					<button type="submit" class="btn btn-success">Lưu lại</button>
				</div>
			</div>

		</div>
	</form>
</div>
@endsection
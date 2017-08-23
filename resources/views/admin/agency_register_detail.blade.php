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
		font-weight: bold;
	}
</style>
<div class="container-fluid">
	<form action="/admin/agency_register/save" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$agency_register->id}}">
		<div class="title">
			<div class="row">
				<div class="col-md-6 ">
					<h4><strong>Đăng ký của {{$agency_register->last_name}} {{$agency_register->first_name}} </strong>  < {{$agency_register->email}} > <small>{{$agency_register->created_at}}</small></h4>
				</div>
				<div class="col-md-6 text-right">
					<button type="submit" class="btn btn-success">Đống ý và tạo tài khoản</button>
				</div>
			</div>
		</div>
		<br>
		<div class="detail">
			<h4>Thông tin đăng ký</h4>
			<div class="row">
				<div class="col-md-5 ">
					<ul>
						<li>Tên : <strong>{{$agency_register->last_name}} {{$agency_register->first_name}}</strong></li>
						<li>Số Liên lạc : <strong>{{$agency_register->phone}}</strong></li>
						<li>Email : <strong>{{$agency_register->email}}</strong></li>
						<li>Địa chỉ : <strong>{{$agency_register->address}}</strong></li>
					</ul>
				</div>
				<div class="col-md-7 ">
					<div>
						<label>Nội dung</label>
						<p>{{$agency_register->memo}}</p>
					</div>
				</div>
				
			</div>
			
			<br>
		</div>

	</form>
</div>
@endsection
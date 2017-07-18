@extends('layouts.app')

@section('content')
<style type="text/css">
	.avatar{
		height: 200px;
		width: 200px;
		background-size: cover!important;
		margin-left: 100px;
		border: 5px #f5f8fa solid;
		position: absolute;
	}
</style>
<div class="container-fluid" style="background: url('/img/bg-5.jpg'); height: 250px; padding-top: 150px; background-size: cover;">
	<div class="container">
		<!-- <h2 class="text-white">Thông tin vé của bạn</h2> -->
		<div class="avatar text-center" style="background: url('http://znews-photo-td.zadn.vn/w660/Uploaded/wopthuo/2017_03_16/1.jpg');">

		</div>
	</div>
</div>
<div class="container">
	<div style="margin-left: 350px; padding-top: 40px " class="content">
		<ul class="nav nav-tabs" style="    border-bottom: 1px solid #ccc;">
			<li class="active"><a href="#" class="no-magin" style="background-color: #3097D1"><i class="fa fa-cog"></i> Thông tin tài khoản</a></li>
			<li><a href="/user/ticket" class="no-magin" ><i class="fa fa-ticket"></i> Vé của bạn</a></li>
			<li><a href="/user/ticket" class="no-magin"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
		</ul>
		<br>

		<div class="profile"> 
			<div class="row"  style="background-color: white; border: 1px solid #ccc; border-radius: 5px; padding-top: 15px; margin-bottom: 2px; position: relative;">
				<div class="col-md-3 text-right">
					<label>Tên</label>
				</div>
				<div class="col-md-9">
					<p>{{$user['name']}}</p>
				</div>
				<div class="action" style="position: absolute; right: 25px">
					<i class="fa fa-pencil"></i>
				</div>
			</div>
			<div class="row"  style="background-color: white; border: 1px solid #ccc; border-radius: 5px; padding-top: 15px; margin-bottom: 2px; position: relative;">
				<div class="col-md-3 text-right">
					<label>Email</label>
				</div>
				<div class="col-md-9">
					<p>{{$user['email']}}</p>
				</div>
				<div class="action" style="position: absolute; right: 25px">
					<i class="fa fa-pencil"></i>
				</div>
			</div>
			<div class="row"  style="background-color: white; border: 1px solid #ccc; border-radius: 5px; padding-top: 15px; margin-bottom: 2px; position: relative;">
				<div class="col-md-3 text-right">
					<label>Ngày sinh</label>
				</div>
				<div class="col-md-9">
					<p>{{$user['birthday']}}</p>
				</div>
				<div class="action" style="position: absolute; right: 25px">
					<i class="fa fa-pencil"></i>
				</div>
			</div>
			<div class="row"  style="background-color: white; border: 1px solid #ccc; border-radius: 5px; padding-top: 15px; margin-bottom: 2px; position: relative;">
				<div class="col-md-3 text-right">
					<label>Ngày tạo</label>
				</div>
				<div class="col-md-9">
					<p>{{$user['created_at']}}</p>
				</div>
				<div class="action" style="position: absolute; right: 25px">
					<i class="fa fa-pencil"></i>
				</div>
			</div>
		</div>

	</div> 
</div>
<br>
<br>
<br>
<br>
@component('component.footer')
@endcomponent

@endsection


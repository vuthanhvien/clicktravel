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
	<form action="/admin/contact/save" method="POST">
                    {{ csrf_field() }}
		<input type="hidden" name="id" value="{{$contact->id}}">
		<input type="hidden" name="email" value="{{$contact->email}}">
		<div class="title">
			<div class="row">
				<div class="col-md-12 ">
					<h4><strong>Nội dung của {{$contact->name}} </strong>  < {{$contact->email}} > <small>{{$contact->created_at}}</small></h4>
				</div>
			</div>
		</div>
		<br>
		<div class="detail">
		<br>
			<div class="row">
				<div class="col-md-3">
				<label>Người gửi</label>
				<p>{{$contact->name}}</p>
				<br>
				<label>Mã gữi chỗ</label>
				<p>{{$contact->seat_id}}</p>
				<br>
				</div>
				<div class="col-md-8 ">
				<div  style="border: 1px solid #ccc; min-height: 100px; padding-top: 15px; padding-left: 15px; border-radius: 5px;">
					<label>Nội dung</label>

					<p>{{$contact->memo}}</p>
				</div>
				</div>
				
			</div>
			
			<br>
			<div class="row">
				<div class="col-md-8 col-md-offset-3"  >
					<textarea rows="5" name="content" style="border: 1px solid #ccc; min-height: 100px; padding-top: 15px; width: 100%; padding-left: 15px;" placeholder="Hãy nhập nội dung, nội dung này sẽ được gửi tới email của {{$contact->name}}"></textarea>					
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col-md-10 text-right">
					<button class="btn btn-success">Gửi</button>
				</div>
			</div>

		</div>
		<br>
		@if( $ticket)
		<div class="detail">
			<div class="fight-detail">
			<h4><strong>Thông tin chuyến bay</strong></h4>
			<div class="row">
					<div class="col-md-3">
						<p>Mã đặt chỗ</p>
						<p><strong><a href="/admin/ticket/{{$ticket->id}}">{{$ticket->seat_id}}</a></strong></p>
					</div>
					<div class="col-md-3">
						<p>Người đặt chỗ</p>
						<p><strong>{{$ticket->contact_name}}</strong></p>
					</div>
					<div class="col-md-3">
						<p>Email liên hệ</p>
						<p><strong>{{$ticket->contact_email}}</strong></p>
					</div>
					<div class="col-md-3">
						<p>Điện thoại liên hệ</p>
						<p><strong>{{$ticket->contact_phone}}</strong></p>
					</div>
				</div>
			</div>
		@if( $staff)

			<hr>

			<div class="staff">
				<h4><strong>Thông tin tài khoản đặt vé</strong></h4>
				<div class="row">
					<div class="col-md-4">
						<p>Tên</p>
						<p><strong><a href="/admin/user/{{$staff->id}}">{{$staff->name}}</a></strong></p>
					</div>
					<div class="col-md-4">
						<p>Chức vụ</p>
						<p><strong>@if($staff->role == '1') Quản trị @elseif($staff->role == '2') Đại lý cấp 2 @elseif($staff->role == '3') Nhân viên @elseif($staff->role == '4') Khách hàng @endif </strong></p>
					</div>
					<div class="col-md-4">
						<p>Email liên hệ</p>
						<p><strong>{{$staff->email}}</strong></p>
					</div>
				</div>

			</div>
		@endif
		</div>
		@endif
	</form>
</div>
@endsection
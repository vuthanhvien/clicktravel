

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
		<!-- <div class="avatar text-center" style="background: url('{{$user->avatar}}');">
			<div style="margin-top: 200px;">
				<form enctype="multipart/form-data" action="/avatar" method="POST">
					<label for="avatar" style="color: #00bcd4; cursor: pointer;">Đổi ảnh đại diện</label>
					<input class="hidden" id="avatar" type="file" name="avatar" onchange="this.form.submit()">
					<input type="hidden"  name="user_id" value="{{$user->id}}"> 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div> -->
		<div class="avatar" style="    background-image: url(/img/clicktravel-logo.png);
											    background-size: 100%;
											    background-repeat: no-repeat;
											    background-color: #CCC;
											    background-position: center">

				</div>
	</div>
</div>
<div class="container">
	<div style="margin-left: 350px; padding-top: 40px " class="content">
		<ul class="nav nav-tabs" style="    border-bottom: 1px solid #ccc;">
			<li><a href="/user" class="no-magin"><i class="fa fa-cog"></i> Thông tin tài khoản</a></li>
			<li  class="active" ><a href="#" class="no-magin"  style="background-color: #3097D1"><i class="fa fa-ticket"></i> Vé của bạn</a></li>
		</ul>

		<br>
		@if (count($tickets) > 0)
		

		<div class="ticket-detail" >
			<div class="table-responsive">
			<table style="width: 100%" class="table table-striped table-bordered table-hover">
					<tr >
						<td>Mã chỗ ngồi<br></td>
						<td>Ngày đặt<br></td>
						<td>Tổng giá<br></td>
						<td>Email liên hệ<br></td>
						<td>Người liên hệ<br></td>
						<td>hành khách<br></td>
						<td></td>
					</tr>
					@foreach ($tickets as $ticket)
					<tr style="background: white">
						<td class=""><br>{{$ticket->seat_id}}</td>
						<td class=""><br>{{$ticket->created_at}}</td>
						<td class=""><br><span class="money">{{$ticket->total}} đ</span></td>
						<td class=""><br>{{$ticket->contact_email}}</td>
						<td class=""><br>{{$ticket->contact_name}}</td>
						<td class=""><br>{{$ticket->count_adult + $ticket->count_children + $ticket->count_baby}}</td>
						<td class=""><br><a href="/ticket/info/{{base64_encode('ticket_id='.$ticket->id)}}">Chi tiết</a></td>
					</tr>
				@endforeach

				</table>

			</div>
		</div>

		@else
		<br>
		<div class="text-center">
			<h4>Hiện tại bạn chưa đăng ké vé</h4>
			<br>
			<p style="font-size: 36px">CHƯA CÓ VÉ</p>
			<p>Hãy bắt đầu đăng ký vé mới</p>
			<a class="btn btn-primary" href="/ticket">Đăng ké vé &nbsp;&nbsp;<i class="fa  fa-chevron-right"></i></a>
		</div>

		<br>
		<br>
		<br>

		@endif

	</div> 
</div>
<br>
<br>
<br>
<br>
<script type="text/javascript">
	$('.money').each(function(index, value){
		$(this).html(commaSeparateNumber($(this).html()));
	})
	function commaSeparateNumber(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
			val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
		}
		return val;
	}
</script>
@component('component.footer')
@endcomponent

@endsection

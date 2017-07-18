

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
  <li><a href="/user" class="no-magin"><i class="fa fa-cog"></i> Thông tin tài khoản</a></li>
  <li  class="active" ><a href="#" class="no-magin"  style="background-color: #3097D1"><i class="fa fa-ticket"></i> Vé của bạn</a></li>
  <li><a href="/user/ticket" class="no-magin"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
</ul>

<br>
@if (count($tickets) > 0)
	@foreach ($tickets as $ticket)
	<h4>Ngày đặt : <strong>{{$ticket->created_at}}</strong></h4>
	<div class="ticket-info">
		<div class="ticket ticket-left">
			<h4 class="white text-center header" style="white-space: nowrap;"> Thông tin chuyến bay</h4>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
				</div>
				<div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
					<h3>12:45</h3>
					<p  style="white-space: nowrap;">HCM</p>
				</div>
				<div class="col-sm-3 col-xs-4">
					<p class="text-center time">1g 45 phút</p>
					<div class="line">
					</div>&nbsp;
					<i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
					<p class="text-center no-margin" style="width: 70%;white-space: nowrap; ">Trực tiếp</p>
					<img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
				</div>
				<div class="col-sm-2 col-xs-3">
					<h3>13:45</h3>
					<p style="white-space: nowrap;">Hà Nội</p>
				</div>
			</div>
			<hr>
			<br>
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
				</div>
				<div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
					<h3>12:45</h3>
					<p  style="white-space: nowrap;">HCM</p>
				</div>
				<div class="col-sm-3 col-xs-4">
					<p class="text-center time">1g 45 phút</p>
					<div class="line">
					</div>&nbsp;
					<i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
					<p class="text-center no-margin" style="width: 70%;white-space: nowrap; ">1 Trạm dừng</p>
					<img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
				</div>
				<div class="col-sm-2 col-xs-3">
					<h3>13:45</h3>
					<p style="white-space: nowrap;">Hà Nội</p>
				</div>
			</div>

		</div>

		<div class=" ticket ticket-right">
			<div class="text-center">
				<h4 class="white" style="margin-top: 10px; color: white;"> Giá vé </h4>
				<br>
				<br>
				<br>
				<h3 class="money">{{$ticket->pay_all}}</h3>
				<br>
				<p>1 Người lớn</p>
				<p>2 Trẻ em</p>

			</div>
		</div>
	</div>           
	<div class="clear"></div>


	@endforeach
	@else
	<br>
	<div class="text-center">
		<h4>Hiện tại bạn chưa đăng ké vé</h4>
		<br>
		<p style="font-size: 80px">CHƯA CÓ VÉ</p>
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
@component('component.footer')
@endcomponent

@endsection

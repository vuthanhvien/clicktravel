@extends('layouts.app')

@section('content')
<style type="text/css">
	label{
		margin-top: 15px;
	}
</style>
<div class="container">
	<br>
	<br>
	<div class="form-body" style="background: white; padding: 15px 15px 15px 25px; border-radius: 5px;border: 1px solid #ccc">
		<br>
		<p class="text-center">Xin hãy nhập mã giao dịch (đã gửi qua email) và email đăng ký</p>
		<div class="row">
			<div class="col-md-5">
				<form action="/payment">
					<br>
					<br>
					<div class="row">
						<div class="col-md-3 text-right">
							<label>Mã giao dịch</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" placeholder="Mã giao dịch" required="" name="transition_id" value="{{$input['transition_id']}}">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3 text-right">
							<label>Email đăng ký</label>
						</div>
						<div class="col-md-9">
							<input type="email" class="form-control" placeholder="Email đăng ký" required="" name="email" value="{{$input['email']}}">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-7 col-md-offset-5">
							<button class="btn btn-primary" type="submit" style="height: 50px; width: 100%">Tìm kiếm</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-7">
			<br>
			
			@if (isset($tickets))
				@if(count($tickets) > 0)
				@foreach ($tickets as $ticket)
				<div class="title-header">
				<h4 class="pull-left">Người đặt : <strong>{{$ticket->contact_name}} </strong><small>({{$ticket->created_at}})</small></h4>
				<a class="pull-right btn btn-primary" href="{{ $ticket->payment_url }}">Thanh toán</a>
				</div>
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
			<div class="text-center">
			 <h4 class="text-center" style="font-weight: 200; padding: 30px; font-size: 24px; color: #999">
			 	<br>	
			 	Không thấy dữ liệu
			 </h4>
			 
			</div>
			@endif
			<div class="text-center">
			<p>Nếu bạn có thắc mắc hoặc gặp những vấn đề phát sinh, sinh hãy liên hệ với chúng tôi qua <br>Sđt: <a href=""> 0975010758 </a>hoặc email:<a href=""> contact@clicktravel.vn</a></p>
			</div>
			@endif
			</div>

		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@component('component.footer')
@endcomponent

@endsection


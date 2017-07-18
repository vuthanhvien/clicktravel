@extends('layouts.app')

@section('content')
<div class="container book">
	<div class="row">
		<div class="col-md-12">
			<div class="timeline" style="background: white; border-radius: 10px; padding: 15px; margin-top: 20px;">
				<div class="row">
					<div class="col-sm-4 hidden-xs text-center">
						<h4 ><a href="javascript:history.back()" style="color: #00c307"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span class="hidden-xs ">CThông tin chuyến bay</span></a></h4>
					</div>
					<div class="col-sm-4 col-xs-12  text-center">
						<h4 style="color: #3097D1"><i class="fa fa-address-card" aria-hidden="true"></i> Thông tin khách hàng</h4>
					</div>
					<div class="col-sm-4 hidden-xs text-center">
						<h4 style="color: #cccccc"><i class="fa fa-check" aria-hidden="true"></i> <span class="hidden-xs ">Chi tiết đơn hàng</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<form action="/ticket/save" method="post">
			<div class="col-md-8">
				<input name="_token" value="{{ csrf_token() }}" type="hidden" />
				<input name="flight_id" value="1234" type="hidden" />
				<div class="form-data">
					<div class="form-header">
						<h4>Chi tiết chuyến bay</h4>
					</div>
					<div class="form-body">
						<div class="ticket-info">
							<div class="ticket ticket-left" style="height: initial;">
								<h4 class="white text-center header" style="white-space: nowrap;"> Thông tin chuyến bay</h4>
								<br>
								<br>
								@foreach ($tickets as $index => $ticket)
								<div class="row">
									<div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
										<img src="{{$ticket['img_brand']}}" width="100%" >
									</div>
									<div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
										<h3>{{$ticket['start_time']}}</h3>
										<p class="no-margin">{{$ticket['start_date']}}</p>
										<p  style="white-space: nowrap;">{{$ticket['start_place']}}</p>
									</div>
									<div class="col-sm-3 col-xs-4" style="margin-top: 11px;">
										<p class="text-center time">{{$ticket['flight_time']}}</p>
										<div class="line">
										</div>&nbsp;
										<i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
										<p style="white-space: nowrap; width: 70%; text-align: center;" >{{$ticket['turn_string']}}</p>
										<img class="hidden-lg hidden-md hidden-sm" src="{{$ticket['img_brand']}}" width="70%">
									</div>
									<div class="col-sm-2 col-xs-3">
										<h3>{{$ticket['end_time']}}</h3>
										<p class="no-margin">{{$ticket['end_date']}}</p>
										<p  style="white-space: nowrap;">{{$ticket['end_place']}}</p>
									</div>
									<input type="hidden" name="ticket[{{ $index }}][start_place]" value="{{$ticket['start_place']}}">
									<input type="hidden" name="ticket[{{ $index }}][start_time]" value="{{$ticket['start_time']}}">
									<input type="hidden" name="ticket[{{ $index }}][start_date]" value="{{$ticket['start_date']}}">
									<input type="hidden" name="ticket[{{ $index }}][end_time]" value="{{$ticket['end_time']}}">
									<input type="hidden" name="ticket[{{ $index }}][end_date]" value="{{$ticket['end_date']}}">
									<input type="hidden" name="ticket[{{ $index }}][end_place]" value="{{$ticket['end_place']}}">
									<input type="hidden" name="ticket[{{ $index }}][type]" value="{{$ticket['type']}}">
									<input type="hidden" name="ticket[{{ $index }}][turn]" value="{{$ticket['turn']}}">
									<input type="hidden" name="ticket[{{ $index }}][brand]" value="{{$ticket['brand']}}">
								</div>
								<hr>
								@endforeach
							</div>

							<div class=" ticket ticket-right ">
								<div class="text-center">
									<h4 class="white" style="margin-top: 10px; color: white;"> Hành khách </h4>
									<br>
									<br>
									<br>
									@if ($passenger['adult'] > 0)  <h4>{{ $passenger['adult'] }} Người lớn</h4> @endif
									@if ($passenger['children'] > 0) <h4>{{ $passenger['children'] }} Trẻ em</h4>@endif
									@if ($passenger['baby'] > 0) <h4>{{ $passenger['baby'] }} Trẻ sơ sinh</h4>@endif
									<br>
								</div>
							</div>
						</div>           
						<div class="clear"></div>
					</div>
				</div>
				<div class="form-data">
					<div class="form-header">
						<h4>Thông tin khách hàng</h4>
					</div>
					<div class="form-body" style="background: white; padding: 15px 15px 15px 25px; border-radius: 5px;border: 1px solid #ccc">
						@for ($i = 0; $i <  $passenger['adult'] ; $i++)
						<p>Người lớn {{$i + 1}}</p>
						<div class="row">
							<div class="col-sm-2">
								<label>Giới tính</label>
								<select class="form-control" name="adult[{{$i}}][sex]" required="">
									<option value="male">Ông</option>
									<option value="female">Bà</option>
								</select>
							</div>
							<div class="col-md-5">
								<label>Họ</label>
								<input type="text" name="adult[{{$i}}][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>
							</div>
							<div class="col-md-5">
								<label>Tên</label>
								<input type="text" name="adult[{{$i}}][last_name]" placeholder="Tên" class="form-control" required>
							</div>

						</div>
						@endfor
						@for ($i = 0; $i <  $passenger['children'] ; $i++)
						<hr>
						<p>Trẻ em {{$i + 1}}</p>
						<div class="row">

							<div class="col-md-5">
								<label>Họ</label>
								<input type="text" name="children[{{$i}}][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>
							</div>
							<div class="col-md-5">
								<label>Tên</label>
								<input type="text" name="children[{{$i}}][last_name]" placeholder="Tên" class="form-control" required>
							</div>
							<div class="col-md-2">
								<label>Tuổi</label>
								<input type="text" name="children[{{$i}}][age]" placeholder="Tuổi" class="form-control" required>
							</div>

						</div>
						@endfor
						@for ($i = 0; $i <  $passenger['baby'] ; $i++)
						<hr>
						<p>Trẻ sơ sinh {{$i + 1}}</p>
						<div class="row">

							<div class="col-md-5">
								<label>Họ</label>
								<input type="text" name="baby[{{$i}}][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>
							</div>
							<div class="col-md-5">
								<label>Tên</label>
								<input type="text" name="baby[{{$i}}][last_name]" placeholder="Tên" class="form-control" required>
							</div>
							<div class="col-md-2">
								<label>Tháng tuổi</label>
								<input type="text" name="baby[{{$i}}][age]" placeholder="Tháng tuổi" class="form-control" required>
							</div>

						</div>
						@endfor

					</div>
				</div>
				<div class="form-data">
					<div class="form-header">
						<br>
						<h4>Thông tin liên hệ</h4>
					</div>
					<div class="form-body" style="background: white; padding: 15px 15px 15px 25px; border-radius: 5px;border: 1px solid #ccc">
						<div class="row">
							<div class="col-sm-2">
								<label>Giới tính</label>
								<select class="form-control" name="contact_sex">
									<option value="male">Ông</option>
									<option value="female">Bà</option>
								</select>
							</div>
							<div class="col-md-5">
								<label>Họ và Tên</label>
								<input type="text" name="contact_name" placeholder="Họ và Tên" class="form-control" required>
							</div>
							<div class="col-md-5">
								<label>Số điện thoại</label>
								<input type="tel" name="contact_phone" placeholder="Số điện thoại" class="form-control" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label>Email</label>
								<input type="email" name="contact_email" placeholder="Email" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label>Địa chỉ</label>
								<input type="text" name="contact_address" placeholder="Địa chỉ" class="form-control" required>
							</div>
						</div>
						<br>
						<div class="checkbox checkbox-primary"  >
							<input id="checkbox-bill" type="checkbox" name="is_bill"> 
							<label for="checkbox-bill" onclick="open_bill()">
								Thông tin xuất hóa đơn
							</label>
						</div>

						<div  id="bill" class="collapse">

							<div class="row">
								<div class="col-xs-8">
									<label>Tên công ty</label>
									<input type="text" name="bill_company" class="form-control" placeholder="Tên công ty">
								</div>
								<div class="col-xs-4">
									<label>Mã số thuế</label>
									<input type="text" name="bill_tax" class="form-control" placeholder="Mã số thuế">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-7">
									<label>Địa chỉ</label>
									<input type="text" name="bill_address" class="form-control" placeholder="Địa chỉ">
								</div>
								<div class="col-xs-5">
									<label>Thành phố</label>
									<input type="text" name="bill_city" class="form-control" placeholder="Thành phố">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12">
									<label>Đại chỉ nhận hóa đơn</label>
									<textarea name="bill_service" rows="4" class="form-control" placeholder="Địa chỉ nhận hóa đơn"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-data">
					<div class="form-header">
						<br>
						<h4>Hình thức thanh toán</h4>
					</div>
					<div class="form-body" style="background: white; padding: 15px 15px 15px 25px; border-radius: 5px;border: 1px solid #ccc">
						<p>Quý khách có thể lựa chọn một trong những hình thức dưới đây</p>
						<br>
						<input type="text" class="hidden" name="method" id="method" required value="bank">
						<div class="method-select">
							<div class="inner text-center active" id="bank">
								<div class="img">
									<img src="/img/bank.png" height="100%"  onclick="select_method('bank')" />
								</div>
								<br>

								<p>Thanh toán qua ngân hàng</p>
							</div>
							<div class="inner text-center" id="direct">
								<div class="img">
									<img src="/img/company.png" height="100%" onclick="select_method('direct')" />
								</div>
								<br>
								<p>Thánh toán trực tiếp tại đại lý</p>
							</div>
							<div class="inner text-center" id="ship">
								<div class="img">
									<img src="/img/home.png" height="100%" onclick="select_method('ship')" />
								</div>
								<br>
								<p>Giao vé tới tận nhà</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<br>
						<br>
						<br>
						<br>
						<input id="ship_address" type="text" style="display: none" name="ship_address" class="form-control" placeholder="Địa chỉ giao vé - Sđt liên lạc">
						<br>
						<style type="text/css">
							.method-select .inner{
								text-align: center;
								width: 33%;
								float: left;
								height: 100px;
							}
						</style>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="price" style="background: white; border-radius: 5px; width: 100%; padding: 15px; border: 1px solid #ccc" >
					<h4 class="text-center"><strong style="color: #999"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng của bạn</strong></h4>
					<hr>
					<div class="row">
						<div class="col-xs-6">
							{{$passenger['adult'] + $passenger['children'] + $passenger['baby']}}x hành khách
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1">{{$price['price_all']}}</strong>
						</div>

					</div>
					<br>
					<div class="row">
						<div class="col-xs-6">
							Phí dịch vụ
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1; ">{{$price['service']}}</strong>
						</div>

					</div>

					<hr>
					<div class="row">
						<div class="col-xs-6" style="font-size: 16px">
							Tổng cộng
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1; font-size: 16px">{{$price['total']}}</strong>
						</div>

					</div>
					<br>
					<div class="row">
						<div class="col-xs-6">
							Khuyến mãi
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1; "> - {{$price['gift']}}</strong>
						</div>

					</div>

					<br>

					<hr>
					<div class="row">
						<div class="col-xs-6" style="font-size: 16px">
							Giá thanh toán
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1; font-size: 16px">{{$price['pay']}}</strong>
						</div>

					</div>
					<br>
					<div class="row">
						<div class="col-xs-12 text-center">
							<button class="btn btn-success">Đặt vé ngay</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<br>
<br>
<style type="text/css">
	.inner.active .img{
		border: 2px solid #3097D1;
	}
	.inner .img{
		padding: 5px;
		height: 100px;
		width: 100px;
		margin: 0 auto;
	}
</style>
<script type="text/javascript">
	var topLimit = $('#price').offset().top;
	$(window).scroll(function() {
		if (topLimit -20 <= $(window).scrollTop()) {
			$('#price').addClass('stickIt')
		} else {
			$('#price').removeClass('stickIt')
		}
	})

	$('.ticket.ticket-right').css('height', $('.ticket.ticket-left').css('height'));

	function select_method(type){
		console.log(type);
		$('#method').val(type);
		$('#bank').removeClass('active');
		$('#direct').removeClass('active');
		$('#ship').removeClass('active');

		$('#'+type).addClass('active');

		if(type== 'ship'){
			$('#ship_address').show();
			$('#ship_address').focus();
			$('#ship_address').prop('required', 'required');
		}else{
			$('#ship_address').hide();
			$('#ship_address').prop('required', false);

		}
	}
	function open_bill(){
		$('#bill').collapse('toggle');
	}
</script>
@component('component.footer')
@endcomponent

@endsection


@extends('layouts.app')
@section('content')
<style type="text/css">
	@media print
	{    
		.no-print, .no-print *, .footer
		{
			display: none !important;
		}
		#price{
			position: relative !important;
		}
	}
	.img-bank{
		border: 1px solid #ccc;
	}

</style>
<div class="container book ">

	<br>
	<br>
	<div class="text-center">
		<h3>Mã đặt chỗ <strong>{{$data->seat_id}}</strong> từ <strong><span class="place_replace">{{$flights[0]->start_place}}</span> đến <span class="place_replace">{{$flights[0]->end_place}}</span> </strong> </h3>
		<h4><strong>{{ $passenger_total }}, đi ngày {{substr($flights[0]->start_time, 0, 10)}} @if(isset($flights[1])) -  về ngày {{substr($flights[1]->start_time, 0, 10)}}  @endif, tổng giá <span  class="money">{{$data->total}} ₫</span></strong></h4>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-md-9">
			<div class="form-data no-print">
				<div class="form-header">
					<h4>
						@if ($data->status == 'book')
						<i class="fa fa-check"></i>&nbsp;&nbsp;
						Đã xác nhận, chờ thanh toán
						@elseif ($data->status == 'paid')
						<i class="fa fa-credit-card "></i>&nbsp;&nbsp;
						Đã thanh toán, chờ hoàn thành
						<a style="cursor: pointer;" onclick="print_ticket()">In vé</a>
						@elseif ($data->status == 'part-paid')
						<i class="fa fa-credit-card "></i>&nbsp;&nbsp;
						Đã thanh toán một phần, chờ hoàn thành
						@elseif ($data->status == 'complete')
						<i class="fa fa-check"></i>&nbsp;&nbsp;
						Đã hoàn thành
						@elseif ($data->status == 'cancel')
						<i class="fa fa-times"></i>&nbsp;&nbsp;
						Đã hủy
						@elseif ($data->status == 'delete')
						<i class="fa fa-times fa-3x"></i>&nbsp;&nbsp;
						Đã xóa
						@endif
					</h4>

				</div>
				<div class="form-body">
					@if($data->payment_method == 'ship')
					<p>Địa chỉ giao vé *: <strong>{{$data->ship_address}}</strong></p>
					<small>(*) Chúng tôi sẽ thu thêm phụ phí giao vé tùy vào vị trí giao hàng</small>
					<hr>
					@endif

					<p>Để thanh toán qua chuyển khoản. Xin bạn vui lòng thanh toán bằng cách chuyển khoản với cú pháp: </p> 
					
					<div style="padding: 15px; border: 1px solid #ccc; border-radius: 5px;"">

						<div class="" >
							<div class="row"  data-toggle="collapse" style="cursor: pointer;"  data-target="#bank_list">
								<div class="col-md-7">
									<span style="font-size: 16px;" class="text-center"><strong>TTVMB-{{$data->contact_email}}-{{$data->seat_id}}</strong> </span>
								</div>
								<div class="col-md-5 text-right">
									<i class="fa fa-caret-down"></i> Các tài khoản ngân hàng
								</div>

							</div>
								<div id="bank_data" class="text-center"></div>
							<div class="collapse in" id="bank_list" style="padding: 15px">
								<br>
								<p>Xin hãy chọn ngân hàng bạn muốn chuyến khoản:</p>
								<div class="row">
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('Vietinbank')" ><img src="/img/bank/5.jpg" width="100%"></a>
									</div>
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('BIDV')"><img src="/img/bank/12.jpg" width="100%"></a>
									</div>
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('Agribank')"><img src="/img/bank/7.jpg" width="100%"></a>
									</div>
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('ACB')"><img src="/img/bank/4.jpg" width="100%"></a>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('MB')"><img src="/img/bank/8.jpg" width="100%"></a>
									</div>
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('Techcombank')"><img src="/img/bank/2.jpg" width="100%"></a>
									</div>
									<div class="col-xs-3 text-center img-bank">
										<a onclick="show_bank('Sacombank')"><img src="/img/bank/9.jpg" width="100%"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<p>Bạn cũng có thể đến các đại lý gần nhất của Cty TNHH Đại Tiến Phong <a href="https://goo"></a></p>
					<div style="padding: 15px; border: 1px solid #ccc; border-radius: 5px;"">

						<div  class=""  >
							<div class="row" data-toggle="collapse" style="cursor: pointer;" data-target="#agency_list">
								<div class="col-md-7">
									<span style="font-size: 16px;" class="text-center"><strong>Công ty TIẾN PHONG CO., LTD</strong> </span>
								</div>
								<div class="col-md-5 text-right">
									<i class="fa fa-caret-down"></i> Các đại lý của TIẾN PHONG CO., LTD
								</div>

							</div>
							<div class="collapse" id="agency_list">
								<br>
								<ul>
									<li><p>
										VĂN PHÒNG MỸ XUÂN :QL51,Ấp Bến Đình, Mỹ Xuân, Tân Thành, Bà Rịa – Vũng Tàu
										Tell. Fax : 0643.923.138 Hotline : 0936780166 + 0934662800
									</p></li>
									<li><p>
										VĂN PHÒNG PHƯỚC HÒA :QL51,Ấp Hải Sơn , Xã Phước Hòa , Tân Thành , Bà Rịa - Vũng Tàu
										Tell. Fax : 0643.893.896 Hotline : 0933381325 - 0945259113
									</p></li>
									<li><p>
										VĂN PHÒNG PHƯỚC BÌNH : QL51 (Đối diện cổng VEDAN) Phước Bình ,Long Thành ,Đồng Nai
										Hotline : 0922 897 997 - 0945 255 113
									</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="form-data">
				<div class="form-header">
					<h4>
						<i class="fa fa-address-book-o"></i>&nbsp;&nbsp; Thông tin hành khách
					</h4>

				</div>
				<div class="form-body">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							@foreach ($passengers as $passenger)
							@if($passenger->type == 'ADT')
							<div class="row">
								<div class="col-sm-6">
									<p><strong>@if( $passenger->sex == 'male' ) Ông @else Bà @endif {{ $passenger->first_name }} {{$passenger->last_name}}</strong></p>
								</div>
								<div class="col-sm-6 text-right">
									<p>Người lớn ({{$passenger->age}} tuổi)</p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							@endif
							@if($passenger->type == 'CHD')
							<div class="row">
								<div class="col-sm-6 ">
									<p><strong> {{ $passenger->first_name }} {{$passenger->last_name}} </strong></p>
								</div>
								<div class="col-sm-6 text-right">
									<p>Trẻ em ({{$passenger->age}} tuổi)</p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							@endif
							@if($passenger->type == 'INF')
							<div class="row">
								<div class="col-sm-6">
									<p><strong> {{ $passenger->first_name }} {{$passenger->last_name}}</strong></p>
								</div>
								<div class="col-sm-6 text-right">
									<p>Trẻ sơ sinh (sinh ngày {{$passenger->age}})</p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							@endif
							@endforeach
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2 col-sm-offset-2 text-center no-print">
							<br>
							<br>
							<p><i class="fa fa-address-book-o fa-5x"></i></p>
						</div>
						<div class="col-sm-7">
							<h4><strong>Thông tin liên lạc</strong></h4>
							<p><strong>@if( $data->contact_sex == 'male' ) Ông @else Bà @endif {{ $data->contact_name }} </strong></p>
							<p><i class="fa fa-phone"></i> &nbsp;<a href="telto:{{ $data->contact_phone }}">{{ $data->contact_phone }}</a></p>
							<p><i class="fa fa-envelope-o"></i> <a href="mailto:{{ $data->contact_email }}"> {{ $data->contact_email }}</a></p>
							<p>&nbsp;<i class="fa fa-map-marker"></i> &nbsp;<a href="http://maps.google.com/?q={{ $data->contact_address }}" target="_blank">{{ $data->contact_address }}</a></p>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="form-data no-print">
				<div class="form-header">
					<h4>
						<i class="fa fa-suitcase"></i>&nbsp;&nbsp; Thông tin hành lý
					</h4>

				</div>
				<div class="form-body">
					<div class="row">
						<div class="col-sm-4 col-sm-offset-1">
							<p><strong>Hành lý xách tay</strong>	</p>
						</div>
						<div class="col-sm-6">
							<p>Mỗi hành khách được mang theo tối đa 7kg hành lý xách tay</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-1">
							<p><strong>Hành lý gửi kèm</strong>	</p>
						</div>
						<div class="col-sm-6">
							<p>Xin hãy liên hệ với nhân viên cty Tiến Phong để tư vấn thêm</p>
						</div>
					</div>
				</div>
			</div>
			<br>
			@if($data->is_bill)
			<div class="form-data">
				<div class="form-header">
					<h4>
						<i class="fa fa-file-text-o"></i>&nbsp;&nbsp; Thông tin hóa đơn
					</h4>

				</div>
				<div class="form-body">
					<div class="row">
						<div class="col-md-10 col-sm-offset-1">
							<div class="row">
								<div class="col-sm-6">
									<p>Tên công ty</p>
								</div>
								<div class="col-sm-6 text-right">
									<p><strong>{{$data->bill_company_name}}</strong></p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							<div class="row">
								<div class="col-sm-6">
									<p>Mã số thuế</p>
								</div>
								<div class="col-sm-6 text-right">
									<p><strong>{{$data->bill_tax_number}}</strong></p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							<div class="row">
								<div class="col-sm-6">
									<p>Địa chỉ</p>
								</div>
								<div class="col-sm-6 text-right">
									<p><strong>{{$data->bill_address}}</strong></p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							<div class="row">
								<div class="col-sm-6">
									<p>Thành phố</p>
								</div>
								<div class="col-sm-6 text-right">
									<p><strong>{{$data->bill_city}}</strong></p>
								</div>
							</div>
							<hr class="no-margin">
							<br>
							<div class="row">
								<div class="col-sm-6">
									<p>Địa chỉ giao hóa đơn</p>
								</div>
								<div class="col-sm-6 text-right">
									<p><strong>{{$data->bill_address_receive}}</strong></p>
								</div>
							</div>
							<hr class="no-margin">
						</div>
					</div>
				</div>
			</div>
			<br>
			@endif
			<div class="flight no-margin no-padding">
				<div class="form-data">
					<div class="form-header">
						<h4><i class="material-icons" style="margin-top: -8px">flight_takeoff</i>&nbsp;&nbsp; Chi tiết chuyến bay</h4>
					</div>
					@foreach ($flights as $index => $flight)
			
					<div class="form-body  no-margin no-padding">
						<div style="background: #999;  padding: 15px; height: 50px">
						<p class="text-white"><strong>
							@if($flight->type == 'first')
							<i class="material-icons" style="margin-top: -8px">flight_takeoff</i>
							@else
							<i class="material-icons reverse" style="margin-top: -8px">flight_takeoff</i>
							@endif
							&nbsp; <span class="place_replace">{{$flight->start_place}}</span>
							</small> 
							<span class="place_replace">{{$flight->end_place}}</span>
							</strong></p>
							</div>
							<br>
						<div class="row">
							<div class="col-xs-4 text-right">
								<h3 class="no-margin"><strong>{{substr($flight->start_time, 11, 5)}}</strong></h3>
								<h3 class="no-margin"><small>{{substr($flight->start_time, 0, 10)}}</small></h3>
								<p class="no-margin"><span class="place_replace">{{$data->start_place}}</span></p>
							</div>
							<div class="col-xs-3" style="margin-top: 5px;display: flex;justify-content: center">
								<i class="fa fa-long-arrow-right pull-left" style="margin-top: 20px"></i>
								<div class="text-center">
									<img  src="https://daisycon.io/images/airline/?width=100&amp;height=30&amp;color=ffffff&amp;iata={{$flight->brand}}" width="100" height="30">
									<p class="no-margin">@if ($flight->stop_num == 0) Bay Thẳng @else {{$flight->stop_num}} trạm dừng @endif</p>
								</div>

								<i class="fa fa-long-arrow-right pull-right" style="margin-top: 20px"></i>
							</div>
							<div class="col-xs-4">
								<h3 class="no-margin"><strong>{{substr($flight->end_time, 11, 5)}}</strong></h3>
								<h3 class="no-margin"><small>{{substr($flight->start_time, 0, 10)}}</small></h3>
								<p class="no-margin"><span class="place_replace">{{$data->end_place}}</span></p>
							</div>
							<a class="detail-more" data-toggle="collapse" data-target="#id_flight_{{ $flight->type }}">Xem chi tiết</a>
						</div>
							<br>
						<div class="collapse" id="id_flight_{{ $flight->type }}">
							@foreach ($flight->turn->AvailFlt as $index2 => $turn)
							<hr style="margin: 8px">
							<div>
								<div style="width: 20%" class="inline">
									<img src="https://daisycon.io/images/airline/?width=100&height=50&color=ffffff&iata={{$turn->AirV}}" width="100" height="50" />
								</div>
								<div style="width: 25%" class="inline">
									<br>
									<p>Từ: <strong><span class="place_replace">{{$turn->StartAirp}}</span></strong></p>
									<p><strong>{{$turn->StartDt}} </strong><small>{{$turn->StartTm}}</small></p>
								</div>
								<div style="width: 25%" class="inline">
									<br>
									<p>Từ: <strong><span class="place_replace">{{$turn->EndAirp}}</span></strong></p>
									<p><strong>{{$turn->EndDt}} </strong><small>{{$turn->EndTm}}</small></p>
								</div>
								<div style="width: 30%" class="inline text-center">
									<br>
									<p>Mã máy bay: <strong>{{$turn->Equip}}</strong></p>
									<p>Số hiệu chuyến bay: <strong>{{$turn->FltNum}}</strong></p>
									<button data-toggle="modal" data-target=".modal-dk" type="button">Điều kiện vé</button>
								</div>
								<div style="clear: both"></div>
							</div>

							@endforeach
						</div>

					</div>           

					@endforeach
				</div>
			</div>
			<br>
			<div class="form-data">
				<div class="form-header">
					<h4>
						<i class="fa fa-phone"></i>&nbsp;&nbsp; Liên hệ với chúng tôi
					</h4>

				</div>
				<div class="form-body">
					<div class="row">
						<div class="col-md-6">
							<p><i class="fa fa-map-marker text-blue"></i>
								VĂN PHÒNG MỸ XUÂN :QL51,Ấp Bến Đình, Mỹ Xuân, Tân Thành, Bà Rịa – Vũng Tàu
								Tell. Fax : 0643.923.138 Hotline : 
								<strong>0936780166 + 0934662800</strong>
							</p>
							<p><i class="fa fa-map-marker text-blue"></i> 
								VĂN PHÒNG PHƯỚC HÒA :QL51,Ấp Hải Sơn , Xã Phước Hòa , Tân Thành , Bà Rịa - Vũng Tàu
								Tell. Fax : 0643.893.896 Hotline : 
								<strong>0933381325 - 0945259113</strong>
							</p>
							<p><i class="fa fa-map-marker text-blue"></i>
								VĂN PHÒNG PHƯỚC BÌNH : QL51 (Đối diện cổng VEDAN) Phước Bình ,Long Thành ,Đồng Nai
								Hotline : 
								<strong>0922 897 997 - 0945 255 113</strong>
							</p>

						</div>
						<div class="col-md-6 ">
							<h4><i class="fa fa-envelope fa-lg text-blue"></i> <a href="mailto:daitienphong.travel@gmail.com"> daitienphong.travel@gmail.com</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3" >
			<div class="form-data " id="price">
				<div class="form-header" style="background: #2ab27b">
					<h4><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Chi tiết thanh toán</h4>
				</div>
				<div class="" style="background: white; padding: 15px">
					<div class="row " data-toggle="collapse" data-target="#pay_all" style="cursor: pointer;">
						<div class="col-xs-6">
							<p><strong><i class="fa fa-caret-down"></i> {{$passenger_total_adult + $passenger_total_children + $passenger_total_baby}}x hành khách</strong></p>
						</div>
						<div class="col-xs-6 text-right">
							<p><strong style="color: #3097D1"  class="money">{{$data->price_all}} đ</strong></p>
						</div>

					</div>
					<div class="collapse in" id="price_show">
						@if($data->count_adult > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{$data->count_adult}} người lớn</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->price_adult * $data->count_adult}} đ</p>
							</div>

						</div>
						@endif
						@if($data->count_children > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{ $data->count_children }} trẻ em</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->price_children * $data->count_children}} đ</p>
							</div>

						</div>
						@endif
						@if($data->count_baby > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{ $data->count_baby}} trẻ sơ sinh</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->price_baby * $data->count_baby }} đ</p>
							</div>

						</div>
						@endif
					</div>
					<br>
					<div class="row " data-toggle="collapse" data-target="#pay_all" style="cursor: pointer;">
						<div class="col-xs-6">
							<p><strong><i class="fa fa-caret-down"></i> Phí dịch vụ</strong></p>
						</div>
						<div class="col-xs-6 text-right">
							<p><strong style="color: #3097D1"  class="money">{{$data->service_adult * $data->count_adult + $data->service_children * $data->count_children + $data->service_baby * $data->count_baby}} đ</strong></p>
						</div>

					</div>
					<div class="collapse in" id="price_show">
						@if($data->count_adult > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{$data->count_adult}} người lớn</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->service_adult * $data->count_adult}} đ</p>
							</div>

						</div>
						@endif
						@if($data->count_children > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{ $data->count_children }} trẻ em</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->service_children * $data->count_children}} đ</p>
							</div>

						</div>
						@endif
						@if($data->count_baby > 0)
						<div class="row">
							<div class="col-xs-6">
								<p>&nbsp;&nbsp;&nbsp;{{ $data->count_baby}} trẻ sơ sinh</p>
							</div>
							<div class="col-xs-6 text-right">
								<p style="color: #3097D1"  class="money">{{$data->service_baby * $data->count_baby }} đ</p>
							</div>

						</div>
						@endif
					</div>
					<br>
					<hr class="no-margin">
					<br>
					<div class="row">
						<div class="col-xs-6" style="font-size: 16px">
							<p><strong>Tổng cộng</strong></p>
						</div>
						<div class="col-xs-6 text-right">
							<p><strong style="color: #3097D1; font-size: 16px"  class="money">{{$data->total}} đ</strong></p>
						</div>

					</div>
					@if($data->gift != 0)
					<br>
					<div class="row">
						<div class="col-xs-6">
							Khuyến mãi
						</div>
						<div class="col-xs-6 text-right">
							<strong style="color: #3097D1; "  class="money"> - {{$data->gift}} đ</strong>
						</div>

					</div>
					@endif

					<hr>
					<div class="row">
						<div class="col-xs-6" style="font-size: 16px">
							<p><strong>Thanh toán</strong></p>
						</div>
						<div class="col-xs-6 text-right">
							<p><strong style="color: #3097D1; font-size: 16px" class="money">{{$data->total}} đ</strong></p>
						</div>

					</div>
					<br>
					<br>
					<div class="text-right">
						<a onclick="print_ticket()" style="cursor: pointer;">In vé</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<script type="text/javascript">
	function print_ticket(){
		window.print();
	}
	var topLimit = $('#price').offset().top;
	$(window).scroll(function() {
		if (topLimit - 20 <= $(window).scrollTop()) {
			$('#price').addClass('stickIt')
		} else {
			$('#price').removeClass('stickIt')
		}
	})
	var airports = [];
	$.getJSON("/airport.json", function(data){

		$.each(data, function(index, value){
			var key = value.substring(value.lastIndexOf("(")+1,value.lastIndexOf(")"));
			airports[key] = value;
		})
	})
	setTimeout(function() {
		$('.place_replace').each(function(){
			$(this).html(airports[$(this).html()]);
		})
	}, 1000);
	$('.money').each(function(index, value){
		$(this).html(commaSeparateNumber($(this).html()));
	})
	var bank_data = {
		'Vietinbank':  '<img src="/img/bank/5.jpg" width="200"><p>Ngân hàng Vietinbank</p><p> Tên tk:  Trần Văn Phong </p><p> Số tk: 711AC4831848 </p><p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>',
		'BIDV':  '<img src="/img/bank/12.jpg" width="200"><p>Ngân hàng BIDV</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 76210000647298 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>', 
		'Agribank':  '<img src="/img/bank/7.jpg" width="200"><p>Ngân hàng Agribank</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 6006205188493 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>', 
		'ACB':  '<img src="/img/bank/4.jpg" width="200"><p>Ngân hàng ACB</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 205321419 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>', 
		'MB':  '<img src="/img/bank/8.jpg" width="200"><p>Ngân hàng MB</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 2230103701004 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>', 
		'Techcombank':  '<img src="/img/bank/2.jpg" width="200"><p>Ngân hàng Techcombank</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 19029515646018 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>',
		'Sacombank':  '<img src="/img/bank/9.jpg" width="200"><p>Ngân hàng Sacombank</p> <p> Tên tk:  Trần Văn Phong </p> <p> Số tk: 050056107931 </p> <p> Chi nhánh Phú Mỹ, Tân Thành, Bà Rịa Vũng Tàu</p>'
	}
	function commaSeparateNumber(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
			val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
		}
		return val;
	}
	function show_bank(bank){
		$('#bank_data').html(bank_data[bank]);
	}
</script>
@component('component.footer')
@endcomponent

@component('modal.modal_dk')
@endcomponent

@endsection

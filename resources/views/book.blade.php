@extends('layouts.app')

@section('content')
<style type="text/css">
	
</style>
<div class="container book">
<!-- <div class="row">
	<div class="col-md-12">
		<div class="timeline" style="background: white; border-radius: 10px; padding: 15px; margin-top: 20px;">
			<div class="row">
				<div class="col-sm-4 hidden-xs text-center">
					<h4 ><a href="javascript:history.back()" style="color: #00c307"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span class="hidden-xs ">Thông tin chuyến bay</span></a></h4>
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
</div> -->
<br> 
<div class="row">
	<form action="/ticket/save" method="post">
		<div class="col-md-9">
			<input name="_token" value="{{ csrf_token() }}" type="hidden" />
			<div id="list_flights">
				<p>Đang tải, vui lòng đợi ...</p>
			</div>
			<br>
			<div class="form-data">
				<div class="form-header">
					<h4><i class="fa fa-user"></i> &nbsp;&nbsp; Thông tin khách hàng</h4>
				</div>
				<div class="form-body" style="">
					<div id="user_detail">
					</div>
				</div>
			</div>
			<br>
			<div class="form-data">
				<div class="form-header">
					<h4><i class="fa fa-address-book-o"></i> &nbsp;&nbsp; Thông tin liên hệ</h4>
					<!-- <a >Đăng nhập để điền nhanh hơn</a> -->
				</div>
				<div class="form-body">
					<div class="row">
						<div class="col-sm-2 col-sm-offset-1">
							<label>Giới tính</label>
							<select class="form-control" name="contact_sex">
								<option value="male">Ông</option>
								<option value="female">Bà</option>
							</select>
							<br>
						</div>
						<div class="col-md-4">
							<label>Họ và Tên</label>
							<input type="text" name="contact_name" placeholder="Họ và Tên" class="form-control" required>
							<br>
						</div>
						<div class="col-md-4">
							<label>Số điện thoại</label>
							<input type="tel" name="contact_phone" placeholder="Số điện thoại" class="form-control" required>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5 col-sm-offset-1 ">
							<label>Email</label>
							<input type="email" name="contact_email" placeholder="Email" class="form-control" required>
							<br>
						</div>
						<div class="col-md-5">
							<label>Địa chỉ</label>
							<input type="text" name="contact_address" placeholder="Địa chỉ" class="form-control" required>
							<br>
						</div>
					</div>
					<br>
				</div>
			</div>
			<br>
			<div class="form-data">
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
							<p>Xin hãy liên hệ với nhân viên cty Tiến Phong để tư vấn thêm</p>
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
			<div class="form-data">
				<div class="form-header">
					<h4><i class="fa fa-phone"></i> &nbsp;&nbsp; Thông tin hóa đơn</h4>
				</div>
				<div class="form-body">
					<div class="row">

						<div class="col-sm-1">&nbsp; </div>
						<div class="col-sm-10">
							<div class="checkbox checkbox-primary checkbox-bill"  >
								<input id="checkbox-bill" type="checkbox" name="is_bill"> 
								<label for="checkbox-bill" onclick="open_bill()">
									Thông tin xuất hóa đơn
								</label>
							</div>
						</div>
					</div>
					<div  id="bill" class="collapse">

						<br>
						<br>
						<div class="row">
							<div class="col-sm-7 col-sm-offset-1">
								<label>Tên công ty</label>
								<input type="text" name="bill_company" class="form-control" placeholder="Tên công ty">
								<br>
							</div>
							<div class="col-sm-3">
								<label>Mã số thuế</label>
								<input type="text" name="bill_tax" class="form-control" placeholder="Mã số thuế">
								<br>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-1">
								<label>Địa chỉ</label>
								<input type="text" name="bill_address" class="form-control" placeholder="Địa chỉ">
								<br>
							</div>
							<div class="col-sm-4">
								<label>Thành phố</label>
								<input type="text" name="bill_city" class="form-control" placeholder="Thành phố">
								<br>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<label>Đại chỉ nhận hóa đơn</label>
								<textarea name="bill_service" rows="4" class="form-control" placeholder="Địa chỉ nhận hóa đơn"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="form-data">
				<div class="form-header">
					<h4><i class="fa fa-credit-card"></i> &nbsp;&nbsp;  Hình thức thanh toán</h4>
				</div>
				<div class="form-body" style="padding: 0">
					<input type="text" class="hidden" name="method" id="method" required value="bank">

					<div class="panel-group no-margin" id="accordion">
						<div class="panel panel-default no-margin active" id="bank_div" style="border-radius: 0">
							<div class="panel-heading no-border " style="padding: 5px 5px 5px 20px;">
								<h4 class="panel-title">
									<div class="row">
										<div class="col-sm-1">&nbsp; </div>
										<div class="col-sm-10">
											<div class="radio radio-primary"  >
												<input id="radio-bank" checked type="radio" name="method" value="bank"> 
												<label for="radio-bank"  onclick="select_method('bank')">
													Thanh toán qua ngân hàng
												</label>
											</div>
										</div>
									</div>

								</h4>
							</div>
							<div id="bank" class="panel-collapse collapse in">
								<div class="panel-body  no-border ">
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<p>Bạn có thể chuyển khoản tới một trong những ngân hàng sau</p>
											<div>
												<img src="/img/bank/2.jpg" width="100" style="margin-right: 2px; border: 1px solid #ccc">
												<img src="/img/bank/4.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
												<img src="/img/bank/5.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
												<img src="/img/bank/7.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
												<img src="/img/bank/8.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
												<img src="/img/bank/9.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
												<img src="/img/bank/12.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
											</div>
											<br>
											<p><strong>Lưu ý:</strong> bạn chỉ thanh toán sau khi chúng tôi xác nhận lại với bạn về giá và gửi cho bạn thông tin thanh toán chi tiết</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default no-margin" id="direct_div"  style="border-radius: 0">
							<div class="panel-heading no-border " style="padding: 5px 5px 5px 20px;">
								<h4 class="panel-title">
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="radio radio-primary"  >
												<input id="radio-direct" type="radio" name="method" value="direct"> 
												<label for="radio-direct" onclick="select_method('direct')">
													Thanh toán qua đại lý
												</label>
											</div>
										</div>
									</div>

								</h4>
							</div>
							<div id="direct" class="panel-collapse collapse">
								<div class="panel-body  no-border">
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<p><i class="fa fa-map-marker text-blue"></i> VĂN PHÒNG MỸ XUÂN :QL51,Ấp Bến Đình, Mỹ Xuân, Tân Thành, Bà Rịa – Vũng Tàu Tell. Fax : 0643.923.138 Hotline : <strong>0936780166 + 0934662800</strong></p>
												<p><i class="fa fa-map-marker text-blue"></i> VĂN PHÒNG PHƯỚC HÒA :QL51,Ấp Hải Sơn , Xã Phước Hòa , Tân Thành , Bà Rịa - Vũng Tàu Tell. Fax : 0643.893.896 Hotline : <strong>0933381325 - 0945259113</strong></p>
													<p><i class="fa fa-map-marker text-blue"></i> VĂN PHÒNG PHƯỚC BÌNH : QL51 (Đối diện cổng VEDAN) Phước Bình ,Long Thành ,Đồng Nai Hotline : <strong>0922 897 997 - 0945 255 113</strong></p>

														<p>Bạn cũng có thể nộp tiền mặt trực tiếp tại bất kỳ chi nhánh nào của các ngân hàng sau</p>

														<div>
															<img src="/img/bank/2.jpg" width="100" style="margin-right: 2px; border: 1px solid #ccc">
															<img src="/img/bank/4.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
															<img src="/img/bank/5.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
															<img src="/img/bank/7.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
															<img src="/img/bank/8.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
															<img src="/img/bank/9.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
															<img src="/img/bank/12.jpg" width="100" style="margin-right: 5px;border: 1px solid #ccc">
														</div>
														<br>
														<p><strong>Lưu ý:</strong> bạn chỉ thanh toán sau khi chúng tôi xác nhận lại với bạn về giá và gửi cho bạn thông tin thanh toán chi tiết</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default no-margin" id="ship_div"  style="border-radius: 0">
										<div class="panel-heading no-border "  style="padding: 5px 5px 5px 20px;">
											<h4 class="panel-title">
												<div class="row">
													<div class="col-sm-10  col-sm-offset-1">
														<div class="radio radio-primary"  >
															<input id="radio-ship" type="radio" name="method" value="ship"> 
															<label for="radio-ship"  onclick="select_method('ship')">
																Giao vé tới tận nhà
															</label>
														</div>
													</div>
												</div>
											</h4>
										</div>
										<div id="ship" class="panel-collapse collapse">
											<div class="panel-body no-border">
												<div class="row">
													<div class="col-sm-10  col-sm-offset-1">
														<p>Hãy chung cấp địa chỉ và số điện thoại của bạn, chúng tao sẽ giao đến địa chỉ bạn gửi tới, giá cước có thể thay đổi tùy thuộc vào nơi bạn ở, thời gian giao có thể từ 2-3 ngày làm việc</p>
														<input id="ship_address" type="text" name="ship_address" class="form-control" placeholder="Địa chỉ giao vé - Sđt liên lạc">
														<br>
														<br>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<br />
					</div>
					<div class="col-md-3 ">
						<div id="price" style="background: white; border-radius: 5px; width: 100%; padding: 15px; border: 1px solid #ccc" >
							<h4 class="text-center" style="    background: #2ab27b; color: white;  margin: -15px; height: 60px;    padding-top: 20px;"><strong style="color: #fff"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng của bạn</strong></h4>
							<br />

							<br />
							<div id="price_detail">
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
				if (topLimit - 20 <= $(window).scrollTop()) {
					$('#price').addClass('stickIt')
				} else {
					$('#price').removeClass('stickIt')
				}
			})

			$('.ticket.ticket-right').css('height', $('.ticket.ticket-left').css('height'));

			function select_method(type){
				$('#method').val(type);
				$('#bank_div').removeClass('active');
				$('#direct_div').removeClass('active');
				$('#ship_div').removeClass('active');

				$('#bank_div .collapse').removeClass('in');
				$('#direct_div .collapse').removeClass('in');
				$('#ship_div .collapse').removeClass('in');


				$('#'+type+'_div').addClass('active');
				$('#'+type+'_div  .collapse').addClass('in');

				if(type == 'ship'){
					$('#ship_address').prop('required', 'required')
				}else{
					$('#ship_address').prop('required', false)
				}

			}
			function open_bill(){
				$('#bill').collapse('toggle');
			}
			// function money_format(money){
			// 	return (Math.round((money * 10 * d_v)/10).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') );
			// }

		    var airports = [];
		    @foreach ($place_point as $l)
		    	airports['{{$l->key}}'] = '{{$l->name}}';
		    @endforeach
		    var city = [];
		    @foreach ($place_point as $l)
		    	city['{{$l->key}}'] = '{{$l->city}}';
		    @endforeach
		    var country = [];
		    @foreach ($place_point as $l)
		    	country['{{$l->key}}'] = '{{$l->country}}';
		    @endforeach
		    // $.get("/search_point", function(data){
		    //     airports = JSON.parse(data);

		    // })

		    var flight_name = {
		    	@foreach ($brand as $a)
		    	'{{$a->key}}' : '{{$a->name}}',
		    	@endforeach
		    }
		    var flight_image = {
		    	@foreach ($brand as $a)
		    	'{{$a->key}}' : '{{$a->image}}',
		    	@endforeach
		    }

			render_flights();
			function get_flight(){
				var data_booking = localStorage.getItem('data_booking');
				data_booking = JSON.parse(data_booking);

				if( data_booking.ListReturnFlight){
					var output = {
						'data_flight' : data_booking,
						'flight_fisrt' : data_booking.ListDepartureFlight.Flight,
						'flight_back' : data_booking.ListReturnFlight.Flight,
					}
				}else{
					var output = {
						'data_flight' : data_booking,
						'flight_fisrt' : data_booking.ListDepartureFlight.Flight,
					}
				}
				return output;
			}
			function render_flights(){

				var f = get_flight();

				var html_first = render_flight(f.data_flight, f.flight_fisrt, 'first');
				if(f.flight_back){
					var html_back = render_flight(f.data_flight, f.flight_back, 'back');
				}else{
					var html_back = '';
				}
				$('#list_flights').html('');
				$('#list_flights').append('<input type="hidden" name="flight" value='+JSON.stringify(f.data_flight)+' />');

				var html = '<div class="flight no-margin no-padding">'+
				'<div class="form-data ">'+
				'		<div class="form-header">'+
								'<h4>'+
				'				<i class="material-icons" style="margin-top: -8px">flight_takeoff</i>&nbsp;&nbsp; '+
				'Thông tin chuyến bay'+
				'			</h4>'+
				'		</div>'+
				'		<div class="form-body no-margin no-padding">';

				var html_end  =	'</div>'+
				'	</div>'+
				'	</div>'; 
				html += html_first+ html_back+ html_end ;
				$('#list_flights').append(html);
			}
			function render_flight(data_flight, flight, type){
				var start_time = new Date(flight.StartTm).getTime();
				var end_time = new Date(flight.EndTm).getTime();
				var fly_time = (end_time - start_time)/60000;
				var fly_time = Math.floor(fly_time/60) + 'g ' + (fly_time%60) + ' p';

				var start_point = flight.StartPoint;
				var start_time = flight.StartTm ? flight.StartTm : '';
				var end_point = flight.EndPoint;
				var end_time = flight.EndTm ? flight.EndTm : '';

				var render = '';
				render += 
				'<div style="background: #f6962d;  padding: 6px 15px 5px 15px; height: 30px">'+
				'			<p class="text-white"><strong>'+
				'				<img height="20" src="/img/plane_real.png"/>'+
				'				&nbsp; '+(airports[flight.StartPoint] ? airports[flight.StartPoint] : '' )+' <small style="color: white">đến</small> '+
				'				'+(airports[flight.EndPoint] ? airports[flight.EndPoint]  : '' )+' '+
				'				<small class="text-white pull-right">&nbsp;&nbsp;&nbsp;Thời gian bay: '+fly_time+'&nbsp;&nbsp;&nbsp;'+
				'				</small> '+
				'			</strong></p>'+
				'		</div>';
				// 	'            <br>'+
				// '			<div class="row">'+
				// '				<div class="col-xs-4 text-right">'+
				// '					<h3 class="no-margin">'+start_time.substr(11, 5)+'</h3>'+
				// '					<p class="no-margin"><small>'+start_time.substr(0, 10)+'</small></p>'+
				// '					<p class="no-margin"><small> '+airports[flight.StartPoint]+'</small></p>'+
				// '				</div>'+
				// '				<div class="col-xs-3 text-center" style="margin-top: 5px;display: flex; justify-content: center">'+
				// '					<i class="fa fa-long-arrow-right pull-left" style="margin-top: 20px"></i>'+
				// '					<div class="text-center">'+
				// '						<p class="no-margin"><i class="fa fa-clock-o"></i> '+fly_time+'</p>'+
				// '					<img  src="https://daisycon.io/images/airline/?width=100&amp;height=30&amp;color=ffffff&amp;iata='+flight.Airline+'" width="100" height="30">'+
				// '					<p><small class="unbreak">'+(flight.StopNum == 0 ? 'Bay thẳng' : flight.StopNum+' chặng dừng')+'</small></p>'+
				// '					</div>'+

				// '					<i class="fa fa-long-arrow-right pull-right" style="margin-top: 20px"></i>'+
				// '				</div>'+
				// '				<div class="col-xs-4">'+
				// '					<h3 class="no-margin">'+end_time.substr(11, 5)+'</h3>'+
				// '					<p class="no-margin"><small>'+end_time.substr(0, 10)+'</small></p>'+
				// '					<p class="no-margin"><small> '+airports[flight.EndPoint]+'</small></p>'+
				// '				</div>'+
				// '			<a class="detail-more" data-toggle="collapse" data-target="#id_'+type+'_'+data_flight.FareDataId+'" >Xem chi tiết</a>'+
				// '			</div>'+
					// '            <br>';

				var html_detail = render_detail(data_flight, flight, type );
				render += html_detail;
				return render ;

			}

			function render_detail(flight, first_flight, type){
				var render= '';
				render += '<div id="id_'+type+'_'+flight.FareDataId+'" class=" coll-detail no-margin" style="background:white; padding: 0px 10px" ><br />';
				if(first_flight.ListAvailFlt.AvailFlt.length == undefined){
					var availFlts = [first_flight.ListAvailFlt.AvailFlt];
				}else{
					var availFlts = first_flight.ListAvailFlt.AvailFlt;
				}

				$.each(availFlts, function(index, availFlt){
					var availFlt_st = '00'+availFlt.StartTm;
					availFlt_st  = (availFlt_st).substr(availFlt_st.length - 4);
					availFlt_st = availFlt_st.substr(0, 2)+':'+availFlt_st.substr(2, 2);
					var availFlt_et = '00'+availFlt.EndTm;
					availFlt_et  = (availFlt_et).substr(availFlt_et.length - 4);
					availFlt_et = availFlt_et.substr(0, 2)+':'+availFlt_et.substr(2, 2);

					var availFlt_sd = availFlt.StartDt.substr(0, 4) +'/'+ availFlt.StartDt.substr(4, 2) + '/'+availFlt.StartDt.substr(6,8);
					var availFlt_ed = availFlt.EndDt.substr(0, 4) +'/'+ availFlt.EndDt.substr(4, 2  ) + '/'+availFlt.EndDt.substr(6,2);
					var class_seat = '';
					if(flight.Adult != 0 ){
			            class_seat += 'Người lớn: '+ availFlt.ClassAdult;
			        }
			        if(flight.Child != 0 ){
			            class_seat += '<br>Trẻ em: '+ availFlt.ClassChild;
			        }
			        if(flight.Infant != 0 ){
			            class_seat += '<br>Trẻ sơ sinh: '+ availFlt.ClassInfant;
			        }

					render += '<div>'+
					'        <div style="width: 15%; " class="inline text-center">'+
					'            <img src="https://daisycon.io/images/airline/?width=100&height=50&color=ffffff&iata='+availFlt.AirV+'" width="100" height="50" />'+
					'        <p><small>'+(flight_name[availFlt.AirV] ? flight_name[availFlt.AirV] : '') +'</small></p>'+
					'        </div>'+
					'        <div style="width: 25%" class="inline text-right">'+
					'            <h4 style="font-weight: bold; color: #ff9c00">'+availFlt.StartAirp+'</h4>'+
					'            <p><strong>'+city[availFlt.StartAirp]+' - '+country[availFlt.StartAirp]+'</strong></p>'+
					'            <p><small>Sân bay: '+airports[availFlt.StartAirp]+'</small></p>'+
					'            <p><strong>'+availFlt_st+' </strong><small>'+availFlt_sd+'</small></p>'+
					'            <br>'+
					'        </div>'+
					'        <div style="width: 15%; " class="inline text-center">'+
					'            <br>'+
					'            <br>'+
					'            <br>'+
					'            <p><small>Mã máy bay: <strong>'+availFlt.Equip+'</strong></small></p>'+
					'            <p><small>Số hiệu : <strong>'+availFlt.FltNum+'</strong></small></p>'+
					'			<i class="fa fa-long-arrow-right pull-left" style="margin-top: -20px; margin-left: 10px"></i>'+
					'			<i class="fa fa-long-arrow-right pull-right" style="margin-top: -20px; margin-right: 10px"></i>'+
					'        </div>'+
					'        <div style="width: 25%" class="inline">'+
					'            <h4 style="font-weight: bold; color: #ff9c00">'+availFlt.EndAirp+'</h4>'+
					'            <p><strong>'+city[availFlt.EndAirp]+' - '+country[availFlt.EndAirp]+'</strong></p>'+
					'            <p><small>Sân bay: '+airports[availFlt.EndAirp]+'</small></p>'+
					'            <p><strong>'+availFlt_et+' </strong><small>'+availFlt_ed+'</small></p>'+
					'            <br>'+
					'        </div>'+
					'        <div style="width: 15%" class="inline">'+
					'            <br>'+
					'            <p>Hạng vé<br><strong>'+class_seat+'</strong></p>'+
					// '            <button data-toggle="modal" data-target=".modal-dk" type="button">Điều kiện vé</button>'+
					'        </div>'+
					'        </div>'+
					'    <div style="clear: both"></div>'+
					'    <hr style="margin: 0px">';
				});
				render +=	'</div>';

				return render;
			}

			render_user();
			function render_user(){
				var f = get_flight();
				flight = f.data_flight;
				var render = '';
				if(flight.Adult && flight.Adult > 0){
					for(var i= 1; i <= flight.Adult; i++){
						render += '<div class="row">'+
						'		<div class="col-sm-11 col-sm-offset-1">'+
						'			<h4><strong>Người lớn '+i+' </strong><small>Trên 12 tuổi</small></h4>'+
						'		</div>'+
						'	</div>'+
						'	<div class="row">'+

						'		<div class="col-sm-2  col-sm-offset-1">'+
						'			<label>Ông/Bà</label>'+
						'			<select class="form-control" name="adult['+i+'][sex]" required="">'+
						'				<option value="M">Ông</option>'+
						'				<option value="F">Bà</option>'+
						'			</select>'+
						'			<br>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Họ</label>'+
						'			<input type="text" name="adult['+i+'][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Tên</label>'+
						'			<input type="text" name="adult['+i+'][last_name]" placeholder="Tên" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						// '		<div class="col-md-2">'+
						// '			<label>Tuổi</label>'+
						// '			<input type="number" name="adult['+i+'][age]" placeholder="Tuổi" class="form-control " required>'+
						// '			<br>'+
						// '		</div>'+
						'	</div>'+
						'	<br>';
					}
				}
				if(flight.Child && flight.Child > 0){
					render += '<hr class="no-margin"><br>';
					for(var i= 1; i <= flight.Child; i++){
						render +='<div class="row">'+
						'		<div class="col-sm-11 col-sm-offset-1">'+
						'			<h4><strong>Trẻ em '+i+' </strong><small>từ 2 đến 12 tuổi</small></h4>'+
						'		</div>'+
						'	</div>'+
						'	<div class="row">'+
						'		<div class="col-sm-2  col-sm-offset-1">'+
						'			<label>Giới tính</label>'+
						'			<select class="form-control" name="children['+i+'][sex]" required="">'+
						'				<option value="M">Trai</option>'+
						'				<option value="F">Gái</option>'+
						'			</select>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Họ</label>'+
						'			<input type="text" name="children['+i+'][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Tên</label>'+
						'			<input type="text" name="children['+i+'][last_name]" placeholder="Tên" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						// '		<div class="col-md-2">'+
						// '			<label>Tuổi</label>'+
						// '			<input type="number" name="children['+i+'][age]" placeholder="Tuổi" class="form-control" required>'+
						// '			<br>'+
						// '		</div>'+

						'	</div>'+
						'	<br>';
					}
				}
				if(flight.Infant && flight.Infant > 0){
					render += '<hr class="no-margin"><br>';
					for(var i= 1; i <= flight.Infant; i++){
						render +='<div class="row">'+
						'		<div class="col-sm-11 col-sm-offset-1">'+
						'			<h4><strong>Trẻ sơ sinh '+i+' </strong><small>dưới 24 tháng tuổi</small></h4>'+
						'		</div>'+
						'	</div>'+
						'	<div class="row">'+
						'		<div class="col-sm-2  col-sm-offset-1">'+
						'			<label>Giới tính</label>'+
						'			<select class="form-control" name="baby['+i+'][sex]" required="">'+
						'				<option value="M">Trai</option>'+
						'				<option value="F">Gái</option>'+
						'			</select>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Họ</label>'+
						'			<input type="text" name="baby['+i+'][first_name]" placeholder="Họ và Tên đệm" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						'		<div class="col-md-4">'+
						'			<label>Tên</label>'+
						'			<input type="text" name="baby['+i+'][last_name]" placeholder="Tên" class="form-control" required>'+
						'			<br>'+
						'		</div>'+
						// '		<div class="col-md-2">'+
						// '			<label>Ngày sinh</label>'+
						// '			<input type="text" name="baby['+i+'][age]" placeholder="Ngày sinh" class="form-control  date-select" required>'+
						// '			<br>'+
						// '		</div>'+

						'	</div>';
					}
				}

				$('#user_detail').append(render);
				$( ".date-select" ).datepicker({ numberOfMonths: 1 , dateFormat: 'dd/mm/yy'});

			}
			render_price(0, '');
			function render_price(gift, promotion){
				$('#price_detail').html('');
				var f = get_flight();
				var flight = f.data_flight;
				var service_price = {
				@foreach ($brand as $a)
					'{{$a->key}}' : '{{$a->price_service}}',
				@endforeach
				}
				var service_price_adult = {{ $input['service_adult'] }};


				if(service_price[flight.PlatingCarrier]){
                    s_price = service_price[flight.PlatingCarrier]*1;
                }else{
                    s_price = service_price_adult;
                }
                if(flight.ListReturnFlight){
                    s_price = s_price*2;
                }
				var d_v = {{ $input['convert'] }};

				var service_price = s_price*flight.Adult + s_price*flight.Child;
				var total =  flight.TotalFare*1*d_v + service_price;
				var render = '';
				render +='<div class="row " data-toggle="collapse" data-target="#price_show" style="cursor: pointer;">'+
				'			<div class="col-xs-6">'+
				'				<p><strong><i class="fa fa-caret-down"></i> '+flight.TotalPax+'x hành khách</strong></p>'+
				'			</div>'+
				'			<div class="col-xs-6 text-right">'+
				'				<p><strong style="color: #3097D1" class="unbreak money">'+Math.ceil(flight.TotalFare*d_v)+' đ</strong></p>'+
				'			</div>'+
				'		</div>'+
				'		<div class="collapse in" id="price_show">';

				if(flight.Adult && flight.Adult > 0){
					render +='<div class="row">'+
					'	<div class="col-xs-6">'+
					'		<p>&nbsp;&nbsp;&nbsp;'+flight.Adult+' người lớn</p>'+
					'	</div>'+
					'	<div class="col-xs-6 text-right">'+
					'		<p style="color: #3097D1" class="unbreak money">'+Math.ceil(flight.Adult * flight.FareAdult*d_v)+' đ</p>'+
					'	</div>'+
					'</div>';
				}
				if(flight.Child && flight.Child > 0){
					render +='<div class="row">'+
					'	<div class="col-xs-6">'+
					'		<p>&nbsp;&nbsp;&nbsp;'+flight.Child+' trẻ em</p>'+
					'	</div>'+
					'	<div class="col-xs-6 text-right">'+
					'		<p style="color: #3097D1" class="unbreak money">'+Math.ceil(flight.Child * flight.FareChild*d_v)+' đ</p>'+
					'	</div>'+
					'</div>';
				}
				if(flight.Infant && flight.Infant > 0){
					render +='<div class="row">'+
					'	<div class="col-xs-6">'+
					'		<p>&nbsp;&nbsp;&nbsp;'+flight.Infant+' trẻ sơ sinh</p>'+
					'	</div>'+
					'	<div class="col-xs-6 text-right">'+
					'		<p style="color: #3097D1 " class="unbreak money">'+Math.ceil(flight.Infant * flight.FareInfant*d_v)+' đ</p>'+
					'	</div>'+
					'</div>';
				}

				render +='</div><br>'+
				'<div class="row">'+
				'	<div class="col-xs-6">'+
				'		<p><strong>Phí dịch vụ</strong></p>'+
				'	</div>'+
				'	<div class="col-xs-6 text-right">'+
				'		<p><strong style="color: #3097D1; " class="unbreak money">'+Math.ceil(service_price)+' đ</strong></p>'+
				'	</div>'+
				'</div>'+

				'<hr class="no-margin">'+
				'<br>'+
				'<div class="row">'+
				'	<div class="col-xs-6" style="font-size: 16px">'+
				'		<p><strong>Tổng cộng</strong></p>'+
				'	</div>'+
				'	<div class="col-xs-6 text-right">'+
				'		<p><strong style="color: #3097D1; font-size: 16px" class="unbreak money">'+Math.ceil(total)+' đ</strong></p>'+
				'	</div>'+

				'</div>'+
				'<br>';
				if(!gift){
					render +=	
					'<div class="row">'+
					'<div class="col-xs-12 text-right" id="promotion"><button type="button" class="btn btn-xs btn-success " data-toggle="modal" data-target="#promotion_modal">Thêm mã khuyến mãi</button></div>'+
					'</div>';
				}else{
					render +=
					'<div class="row">'+
					'	<div class="col-xs-6" style="font-size: 14px">'+
					'		<p><strong>Khuyến mãi</strong></p>'+
					'	</div>'+
					'	<div class="col-xs-6 text-right">'+
					'	<input type="hidden" name="promotion" value="'+promotion+'">'+
					'		<p><strong style="color: #3097D1; font-size: 14px" class="unbreak money">'+Math.ceil(gift)+' đ</strong></p>'+
					'<small><a  data-toggle="modal" data-target="#promotion_modal">Đổi mã khuyến mãi</a></small>'+
					'	</div>'+
					'</div>';
				}
				
				render +=
				'<hr>'+
				'<div class="row">'+
				'	<div class="col-xs-6" style="font-size: 16px">'+
				'		<p><strong>Thanh toán</strong></p>'+
				'	</div>'+
				'	<div class="col-xs-6 text-right">'+
				'		<p><strong style="color: #3097D1; font-size: 16px" class="unbreak money">'+ ((total - gift*1 >= 0 ) ? Math.ceil(total - gift*1) : 0) +'  đ</strong></p>'+
				'	</div>'+

				'</div>'+
				'<br>'+
				'<br>';

				render += '<div class="row">'+
				'	<div class="col-xs-12 text-center">'+
				'		<button class="btn btn-success">Đặt vé ngay</button>'+
				'	</div>'+
				'</div>';
				$('#price_detail').append(render);
				$('.money').each(function(index, value){
					$(this).html(commaSeparateNumber($(this).html()));
				})
			}
			function commaSeparateNumber(val){
			    while (/(\d+)(\d{3})/.test(val.toString())){
			      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
			    }
			    return val;
			}
			$('#promotion_submit').click(function(e){
				var key = $('#promotion_input').val();
				$('#promotion_msg').css('display', 'none');
				var _token = $('input[name="_token"]').val();
				$.ajax({
					type: "POST",
					url: '/get_promotion',
					data: {'key' : key, '_token' : _token },
					success: function(data){
						var res = JSON.parse(data);
						console.log(res);
						if(res.success){
							$('#promotion_modal').modal('hide');
							render_price(res.price, key);
						}else{
							$('#promotion_msg').css('display', 'block');
							$('#promotion_msg').html('<p>'+res.msg+'</p>');
						}
					},
				});
			})


		</script>
		@component('component.footer')
		@endcomponent

		@component('modal.modal_dk')
		@endcomponent

		@endsection


		<div id="promotion_modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				{{ csrf_field() }}
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Nhập mã khuyến mãi</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger"  style="display: none " id="promotion_msg">
						</div>
						<label>Hãy nhập mã khuyến mãi</label>
						<input type="text" name="promotion" class="form-control" id="promotion_input" required>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" id="promotion_submit">Ok</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Tắt</button>
					</div>
				</div>

			</div>
		</div>
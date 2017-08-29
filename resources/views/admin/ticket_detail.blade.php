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
	<form action="/admin/user/save" method="POST">
		<div class="title">
			<div class="row">
				<div class="col-md-6 ">
					<h4>Thông tin vé: <strong>{{$ticket->seat_id}}</strong></h4>
					<a href="/ticket/info/{{base64_encode('ticket_id='.$ticket->id)}}">Xem trên web</a>
				</div>
				<div class="col-md-6 text-right">
					@if (($ticket->status == 'complete' || $ticket->status == 'book' || $ticket->status == 'paid' || $ticket->status == 'part-paid' ) && ( Auth::user()->role == 1 ||  Auth::user()->role == 3 ))
					<!-- <button type="button" class="btn btn-success" onclick="print_ticket()"><i class="fa fa-print"></i> In vé</button> -->
					@endif
					@if (($ticket->status == 'book' || $ticket->status == 'part-paid') && ($total_fund >= $ticket->total || Auth::user()->role == 1 ||  Auth::user()->role == 3 ))
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#pay" >Thanh toán</button>
					@endif
					@if (($ticket->status == 'book' ) || Auth::user()->role == 1 ||  Auth::user()->role == 3 )
					<button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#cancel" >Hủy</button>
					<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#delete" >Xóa</button>
					@endif
					@if ($ticket->status == 'cancel' )
					<!-- <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#rebook" >Đăng ký lại</button> -->
					@endif
				</div>

			</div>
		</div>
		<br>
		<div class="detail" id="detail">
			<div class="row">
				<div class="col-md-8">
					<h4><strong>Thông tin thanh toán</strong></h4>
					<div class="row">
						<div class="col-md-5">
							<p>Trạng thái</p>
							<p style="color: green"><strong>{{$status[$ticket->status]}}</strong></p>
							@if($ticket->status == 'part-paid')
							<ul>
								<li><strong> Số tiền còn lại {{$ticket->total - $ticket->paid}} </strong></li>
							</ul>
							@endif
							<br>
							<hr>
							<p>Phương thức thanh toán</p>
							<ul>
								<li><strong>@if ($ticket->payment_method == 'bank') Chuyển khoản @elseif ($ticket->payment_method == 'direct') Giao dịch trực tiếp tại văn phòng @elseif ($ticket->payment_method == 'ship') Giao vé tận nhà @endif</strong></li>
							</ul>
							@if($ticket->payment_method == 'ship')
							<p>Địa chỉ giao vé: </p>
							<ul>
								<li><strong>{{$ticket->ship_address}} </strong></li>
							</ul>
							@endif
							<br>
						</div>
						<div class="col-md-7">
							<div class="price" style="border: 1px solid #ccc; padding: 20px; border-radius: 5px ">
								@if($ticket->count_adult > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_adult}}x Người lớn: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money"> {{$ticket->price_adult * $ticket->count_adult}} đ</strong></p>
									</div>
								</div>
								@endif
								@if($ticket->count_children > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_children}}x trẻ em: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money">{{$ticket->price_children * $ticket->count_children}} đ</strong></p>
									</div>
								</div>
								@endif
								@if($ticket->count_baby > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_baby}}x trẻ sơ sinh: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong class="money">{{$ticket->price_baby  * $ticket->count_baby}} đ</strong></p>
									</div>
								</div>
								@endif
								@if($ticket->count_adult > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_adult}}x dịch vụ người lớn: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong class="money">{{$ticket->service_adult  * $ticket->count_adult}} đ</strong></p>
									</div>
								</div>
								@endif
								@if($ticket->count_children > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_children}}x dịch vụ trẻ em: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money">{{$ticket->service_children  * $ticket->count_children}} đ</strong></p>
									</div>
								</div>
								@endif
								@if($ticket->count_baby > 0 )
								<div class="row">
									<div class="col-md-6">
										<p>{{$ticket->count_baby}}x dịch vụ trẻ sơ sinh: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money">{{$ticket->service_baby  * $ticket->count_baby}} đ</strong></p>
									</div>
								</div>
								@endif
								<div class="row">
									<div class="col-md-6">
										<p>Giá tất cả:</p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money">{{$ticket->total}} đ</strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<p>Giá khuyến mãi: </p>
									</div>
									<div class="col-md-6 text-right">
										<p><strong  class="money">{{$ticket->gift}} đ</strong></p>
									</div>
								</div>

								<hr>
								<div class="row">
									<div class="col-md-6">
										<h4>Giá thanh toán: </h4>

									</div>
									<div class="col-md-6 text-right">
										<h4><strong  class="money">{{$ticket->total}} đ</strong></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<h4><strong>Thông tin chuyến bay</strong></h4>
					
						@foreach ($ticket->flights as $index => $flight)
						<div class="flight no-margin no-padding">
							<div class="form-data">
								<div class="form-header">
									<h4>
										@if($flight->type == 'first')
										<i class="material-icons" style="margin-top: -8px">flight_takeoff</i>
										@else
										<i class="material-icons reverse" style="margin-top: -8px">flight_takeoff</i>
										@endif
										&nbsp; <span class="place_replace">{{$flight->start_place}}</span>
										<small class="text-white">&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;1g 12 phút&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;
										</small> 
										<span class="place_replace">{{$flight->end_place}}</span>
									</h4>

								</div>
								<div class="form-body">

									<div class="row">
										<div class="col-xs-4 text-right">
											<h3 class="no-margin"><strong>{{substr($flight->start_time, 11, 5)}}</strong></h3>
											<h3 class="no-margin"><small>{{substr($flight->start_time, 0, 10)}}</small></h3>
											<p class="place_replace">{{$flight->start_place}}</p>
										</div>
										<div class="col-xs-3" style="margin-top: 5px;display: flex;">
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
											<p class="place_replace">{{$flight->end_place}}</p>
										</div>
										<a class="detail-more" data-toggle="collapse" data-target="#id_flight_{{ $flight->type }}">Xem chi tiết</a>
									</div>
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
											<div style="width: 30%" class="inline">
												<p>Mã máy bay: <strong>{{$turn->Equip}}</strong></p>
												<p>Số hiệu chuyến bay: <strong>{{$turn->FltNum}}</strong></p>
											</div>
											<div style="clear: both"></div>
										</div>

										@endforeach
									</div>

								</div>           
							</div>
						</div>
						<br>
						@endforeach

				</div>

				<div class="col-md-4">
					<h4><strong>Thông tin hành khách</strong></h4>
					<p><strong>Hành khách</strong></p>
					<ul>
						@foreach ($ticket->passengers as $passenger)
						<li>
							@if($passenger->type == 'ADT')
							@if($passenger->sex == 'M')
							<span >Ông</span>
							@else
							<span> Bà </span>
							@endif

							<span> {{$passenger->first_name}} {{$passenger->last_name}} ({{$passenger->age}} tuổi)</span>
							@elseif ($passenger->type == 'CHD')
							<span>Trẻ em: {{$passenger->first_name}} {{$passenger->last_name}} ({{$passenger->age}} tuổi @if($passenger->sex == 'M') - con trai @else con gái @endif)</span>
							@elseif ($passenger->type == 'INF')
							<span>Trẻ sơ sinh: {{$passenger->first_name}} {{$passenger->last_name}} (sinh ngày {{$passenger->age}} @if($passenger->sex == 'M') - con trai @else con gái @endif)</span>
							@endif
						</li>
					@endforeach
					</ul>
					<hr>
					<p><strong>Liên hệ</strong></p>
					<ul>
						<li>Liên lạc : @if($ticket->contact_sex == 'male')<strong> Ông @else<strong> Bà @endif {{$ticket->contact_name}}</strong></li>
						<li>Địa chỉ : <strong>{{$ticket->contact_address}}</strong></li>
						<li>Số điện thoại : <strong><a href="tel:{{$ticket->contact_phone}}"> {{$ticket->contact_phone}}</a></strong></li>
						<li>Email : <strong><a href="mailto:{{$ticket->contact_email}}"> {{$ticket->contact_email}}</a></strong></li>
					</ul>
					@if ($ticket->is_bill)
					<p><strong>Thông tin hóa đơn</strong></p>
					<ul>
						<li>Công ty: {{$ticket->bill_company_name}}</li>
						<li>Mã số thuế: {{$ticket->bill_tax_number}}</li>
						<li>Thành phố: {{$ticket->bill_city}}</li>
						<li>Địa chỉ: {{$ticket->bill_address}}</li>
						<li>Địa chỉ nhận hóa đơn: {{$ticket->bill_address_receive}}</li>
					</ul>
					@endif

				</div>
			</div>
			<br>

		</div>
		@if($ticket->user_id)
		<br>
		<div class="detail">
			<h4><strong>Thông tin tài khoản đặt vé</strong></h4>
			<div class="row">
				<div class="col-md-3">
					<p>Tên</p>
					<p><strong><a href="/admin/user/{{$staff->id}}">{{$staff->name}}</a></strong></p>
				</div>
				<div class="col-md-3">
					<p>Chức vụ</p>
					<p><strong>@if($staff->role == '1') Quản trị @elseif($staff->role == '2') Đại lý cấp 2 @elseif($staff->role == '3') Nhân viên @elseif($staff->role == '4') Khách hàng @endif </strong></p>
				</div>
				<div class="col-md-3">
					<p>Email liên hệ</p>
					<p><strong>{{$staff->email}}</strong></p>
				</div>
				<div class="col-md-3">
					<p>Quỹ tiền</p>
					<p><strong>{{$total_fund}} vnđ</strong></p>
				</div>
			</div>
		</div>
		@endif
	</form>
</div>
<script type="text/javascript">

	var airports = [];
	$.getJSON("/airport.json", function(data){

		$.each(data, function(index, value){
			var key = value.substring(value.lastIndexOf("(")+1,value.lastIndexOf(")"));
			airports[key] = value;
		})
	})
	setTimeout(function() {
		$('.place_replace').each(function(){
			console.log($(this).html());
			$(this).html(airports[$(this).html()]);
		})
	}, 1000);

</script>
@endsection
<div id="cancel" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form action="/admin/change_status">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Hủy vé</h4>
				</div>
				<div class="modal-body">
					<p>Xin hãy nhập lý do</p>
					<div class="form-group label-floating">
						<input type="hidden" name="type" value="cancel">
						<input type="hidden" name="id" value="{{$ticket->id}}">
						<label class="control-label">Lý do</label>
						<input type="text" name="reason" class="form-control" placeholder="" required minlength="10">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning">Hủy</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</form>
	</div>
</div>



<!-- Modal -->
<div id="pay" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form action="/admin/change_status">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Thanh toán</h4>
				</div>
				<div class="modal-body">
					<p>Xin hãy nhập số tiền thanh toán vào đây (vnd)</p>
					<div class="form-group label-floating">
						<input type="hidden" name="type" value="pay">
						<input type="hidden" name="id" value="{{$ticket->id}}">
						<label class="control-label">Số tiền thanh toán</label>
						<input type="number" name="pay_amount" class="form-control" value="{{$ticket->total}}" required id="pay_amount">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" >Đồng ý</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="delete" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form action="/admin/change_status">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<input type="hidden" name="type" value="delete">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<input type="hidden" name="id" value="{{$ticket->id}}">
					<h4 class="modal-title">Xóa </h4>
				</div>
				<div class="modal-body">
					<p>Bạn chắc chắn muốn xóa</p>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Xóa</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</form>
	</div>
</div>
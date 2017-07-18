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
					<h4>Thông tin vé: {{$ticket->transition_id}}</h4>
				</div>
				<div class="col-md-6 text-right">
					<button type="button" class="btn btn-success">Đã thanh toán</button>
					<button type="button" class="btn btn-warning">Hủy</button>
					<button type="button" class="btn btn-danger">Xóa</button>
				</div>
			</div>
		</div>
		<br>
		<div class="detail">
			<div class="row">
				<div class="col-md-7">
					<h4><strong>Thông tin thanh toán</strong></h4>
					<p><strong>Trạng thái</strong></p>
					<p>Đã xác nhận, chờ thanh toán</p>
					<p><strong>Giá</strong></p>
					<p>Giá một người: {{$ticket->price_one}} {{$ticket->currency}}</p>
					<p>Giá tất cả: {{$ticket->price_all}} {{$ticket->currency}}</p>
					<p>Giá dịch vụ: {{$ticket->price_service}} {{$ticket->currency}}</p>
					<p>Tổng giá: {{$ticket->total}} {{$ticket->currency}}</p>
					<p>Giá khuyến mãi: -{{$ticket->gift}} {{$ticket->currency}}</p>
					<p>Giá thanh toán: {{$ticket->pay_all}} {{$ticket->currency}}</p>
					<br>
					<p><strong>Phướng thức thanh toán</strong></p>
					<p>@if ($ticket->payment_method == 'bank') Chuyển khoản @elseif ($ticket->payment_method == 'direct') Giao dịch trực tiếp tại văn phòng @elseif ($ticket->payment_method == 'ship') Giao vé tận nhà @endif</p>
					@if($ticket->payment_method == 'ship')
					<p>Địa chỉ giao vé: {{$ticket->ship_address}}</p>
					@endif
					<br>
					<br>

					<h4><strong>Thông tin chuyến bay</strong></h4>
					
					<div class="modal-detail">
						@foreach ($ticket->flights as $flight)
						<p><strong>@if($flight->type == 'go') Chuyến đi @else Chuyến về @endif  @if($flight->turn > 1) {{$flight->turn}} @endif </strong> {{$flight->start_date}}</p>

						<div class="first-way">
							<div class="row">
								<div class="col-xs-4 text-right">
									<h3>{{$flight->start_time}}</h3>
									<p>{{$flight->start_place}}</p>


								</div>
								<div class="col-xs-3">
									<p class="text-center no-margin" style="width: 85%"> 1g 45 phút</p>
									<div class="line"></div> &nbsp; 
									<i class="fa fa-plane fa-rotate-45"></i>
									<p style="width: 85%; margin: 0; text-align: center">{{$flight->brand}}</p>
								</div>
								<div class="col-xs-3">
									<h3>{{$flight->end_time}}</h3>
									<p>{{$flight->end_place}}</p>
								</div>

							</div>
						</div>
						<br />
						@endforeach
					</div>

				</div>

				<div class="col-md-5">
					<h4><strong>Thông tin hành khách</strong></h4>
					<p><strong>Hành khách</strong></p>
						@foreach ($ticket->passengers as $passenger)
							<p>
							@if($passenger->type == 'adult')
								@if($passenger->sex == 'male')
									<span >Ông</span>
								@else
									<span> Bà </span>
								@endif

								<span> {{$passenger->first_name}} {{$passenger->last_name}} </span>
							@elseif ($passenger->type == 'children')
								<span>Trẻ em: {{$passenger->first_name}} {{$passenger->last_name}} ({{$passenger->age}} tuổi)</span>
								@elseif ($passenger->type == 'baby')
								<span>Trẻ sơ sinh: {{$passenger->first_name}} {{$passenger->last_name}} ({{$passenger->age}} tháng tuổi)</span>
							@endif
							</p>
						@endforeach
					<p><strong>Liên hệ</strong></p>
						<p>Tên liên lạc : @if($passenger->sex == 'male')
									<span >Ông</span>
								@else
									<span> Bà </span>
								@endif 

								{{$ticket->contact_name}}</p>
						<p>Địa chỉ : {{$ticket->contact_address}}</p>
						<p>Số điện thoại : {{$ticket->contact_phone}}</p>
						<p>Email : {{$ticket->contact_email}}</p>
						<p></p>
						<p></p>
						<p></p>
						@if ($ticket->is_bill)
					<p><strong>Thông tin hóa đơn</strong></p>
						<p>Công ty: {{$ticket->bill_company_name}}</p>
						<p>Mã số thuế: {{$ticket->bill_tax_number}}</p>
						<p>Thành phố: {{$ticket->bill_city}}</p>
						<p>Địa chỉ: {{$ticket->bill_address}}</p>
						<p>Địa chỉ nhận hóa đơn: {{$ticket->bill_address_receive}}</p>
						@endif
					
				</div>
			</div>
			<br>

		</div>
	</form>
</div>
@endsection
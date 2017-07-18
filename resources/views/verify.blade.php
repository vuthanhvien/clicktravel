@extends('layouts.app')

@section('content')
<div class="container book">
	<div class="row">
		<div class="col-md-12">
			<div class="timeline" style="background: white; border-radius: 10px; padding: 15px; margin-top: 20px;">
				<div class="row">
					<div class="col-md-4 text-center">
						<h4 ><i class="fa fa-check-square-o" aria-hidden="true"></i> Thông tin chuyến bay</h4>
					</div>
					<div class="col-md-4 text-center">
						<h4 style="color: #00c307"><i class="fa fa-check-square-o" aria-hidden="true"></i> Thông tin khách hàng</h4>
					</div>
					<div class="col-md-4 text-center">
						<h4 style="color: #3097D1"><i class="fa fa-check" aria-hidden="true"></i> Thông tin đơn hàng</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="form-body" style="background: white; padding: 15px 15px 15px 25px; border-radius: 5px;border: 1px solid #ccc">
		<div class="row">
			<div class="col-md-8">

				<div class="form-data">
					<div class="row">
						<div class="col-md-8">
							<h4 ><small>Mã đặt chỗ:</small> <strong>{{$data->seat_id}}</strong></h4>
                            <h4 ><small>Mã đơn hàng: </small><strong>{{$data->transition_id}}</strong></h4>
							<h4 ><small>Tổng thanh toán: </small><strong>{{$data->pay_all}} {{$data->currency}}</strong></h4>
						</div>
						<div class="col-md-4 text-center">
							<br>
							<p class="text-blue"><i class="fa fa-credit-card fa-3x"></i></p>
							<p class="text-blue"><strong>Đã xác nhận, chờ thanh toán</strong></p>
						</div>
					</div>

					<hr />
                <h4 class="text-blue"><strong>Thông tin người đặt chỗ</strong></h4>
					<p>@if( $data->contact_sex == 'male' ) Ông @else Bà @endif : {{ $data->contact_name }} </p>
					<p>Số điện thoại : {{ $data->contact_phone }}</p>
					<p>Email : {{ $data->contact_email }}</p>
                    <p>Địa chỉ : {{ $data->contact_address }}</p>
					<p>Phương thức : {{ $data->payment_method }}</p>
					<hr />

                <h4 class="text-blue"><strong>Kiểm tra lịch trình của bạn</strong></h4>
                <p>(Tất cả giờ đều là giờ địa phương)</p>
                <br>
                <div class="modal-detail">
                @foreach ($flights as $flight)
                <h5><strong>@if($flight->type == 'go') Chuyến đi @else Chuyến về @endif  @if($flight->turn > 1) {{$flight->turn}} @endif </strong> {{$flight->start_date}}</h5>

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
                <div>
                    <br>
                    <br>
                    <h4 class="no-margin"><strong>Đặt vé</strong></h4>
                    <p>{{ $passenger_total }}</p>
                    <br>
                </div>
                <hr class="no-margin"/>
                <br>

					<p>Chúng tôi cũng đã gửi thông tin đơn hàng cho bạn qua địa chỉ email bạn cung cấp</p>
					<p>Quý khách vui lòng liên hệ 1900 2060 để xác nhận vé trong 03 giờ kể từ lúc đặt vé Myfly.vn hân hạnh được phục vụ quý khách</p>
                    <p>Ngoài ra, nếu bất cứ vấn đề gì về đơn hàng, xin hãy <a href="/contact-us/{{$data->param}}"> liên hệ với chúng tôi</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<p>Để thanh toán qua chuyển khoản</p>
				<p>Xin bạn vui lòng thanh toán bằng cách chuyển khoản qua </p>

				<p><img src="/img/bank/1.png" height="25">  Trần Phong  - 12345678123 </p>
				<p><img src="/img/bank/2.jpg" height="25">  Trần Phong  - 12345678123 </p>
				<p><img src="/img/bank/3.png" height="25">  Trần Phong  - 12345678123 </p>
				<p><img src="/img/bank/4.png" height="25">  Trần Phong  - 12345678123 </p>
				<p><img src="/img/bank/5.jpg" height="25">  Trần Phong  - 12345678123 </p>
				<p>với cú pháp: </p> 
                <p style="padding: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;"><strong>TTVMB - < email của bạn > - < mã đơn hàng ></strong> </p>
				<br>
				<p>Nếu bạn dụng ngân hàng Eximbank, bạn có thể thanh toán qua quét mã Qrcode dưới</p>

			</div>
		</div>

	</div>
</div>
<br>
<br>
@component('component.footer')
@endcomponent

@endsection


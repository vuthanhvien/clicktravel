@extends('layouts.app')

@section('content')
<div class="container book">
	<div class="row">
		<div class="col-md-12">
			<div class="timeline" style="background: white; border-radius: 10px; padding: 15px; margin-top: 20px;">
				<div class="row">
					<div class="col-md-4 text-center">
						<h4 ><a href="{{ $data['url'] }}" style="color: #00c307"><i class="fa fa-check-square-o" aria-hidden="true"></i> Thông tin chuyến bay</a></h4>
					</div>
					<div class="col-md-4 text-center">
						<h4 style="color: #3097D1"><i class="fa fa-address-card" aria-hidden="true"></i> Thông tin khách hàng</h4>
					</div>
					<div class="col-md-4 text-center">
						<h4 style="color: #cccccc"><i class="fa fa-check" aria-hidden="true"></i> Xác nhận đơn hàng</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-8">

			<div class="form-data">
				<div class="form-header">
					<h4>Chi tiết chuyến bay</h4>
				</div>
				<div class="form-body">
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
									<h3>12:55</h3>
									<p  style="white-space: nowrap;">HCM</p>
								</div>
								<div class="col-sm-3 col-xs-4">
									<p class="text-center time">1g 45 phút</p>
									<div class="line">
									</div>&nbsp;
									<i class="fa fa-plane fa-rotate-45 pull-right" style="margin-left: 0"></i>
									<img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
								</div>
								<div class="col-sm-2 col-xs-3">
									<h3>13:55</h3>
									<p  style="white-space: nowrap;">Hà Nội</p>
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
								<h4 class="white" style="margin-top: 10px; color: white;"> Hành khách </h4>
								<br>
								<br>
								<br>
								<h4>3 Người lớn</h4>
								<h4>2 Trẻ em</h4>
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
					<p>Người lớn 1</p>
					<div class="row">
						<div class="col-sm-2">
							<label>Giới tính</label>
							<select class="form-control">
								<option value="male">Ông</option>
								<option value="female">Bà</option>
							</select>
						</div>
						<div class="col-md-5">
							<label>Tên</label>
							<input type="text" name="" placeholder="Tên" class="form-control">
						</div>
						<div class="col-md-5">
							<label>Họ</label>
							<input type="text" name="" placeholder="Họ và Tên đệm" class="form-control">
						</div>
					</div>
					<br>
					<br>
					<p>Người lớn 2</p>
					<div class="row">
						<div class="col-sm-2">
							<label>Giới tính</label>
							<select class="form-control">
								<option value="male">Ông</option>
								<option value="female">Bà</option>
							</select>
						</div>
						<div class="col-md-5">
							<label>Tên</label>
							<input type="text" name="" placeholder="Tên" class="form-control">
						</div>
						<div class="col-md-5">
							<label>Họ</label>
							<input type="text" name="" placeholder="Họ và Tên đệm" class="form-control">
						</div>
					</div>
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
							<select class="form-control">
								<option value="male">Ông</option>
								<option value="female">Bà</option>
							</select>
						</div>
						<div class="col-md-5">
							<label>Họ và Tên</label>
							<input type="text" name="" placeholder="Họ và Tên" class="form-control">
						</div>
						<div class="col-md-5">
							<label>Số điện thoại</label>
							<input type="tel" name="" placeholder="Số điện thoại" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<label>Email</label>
							<input type="text" name="" placeholder="Email" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Địa chỉ</label>
							<input type="text" name="" placeholder="Địa chỉ" class="form-control">
						</div>
					</div>
					<br>
					<br>
					<a data-toggle="collapse" href="#bill" >Thông tin xuất hóa đơn</a>
					<div  id="bill" class="collapse">
						<hr>

						<div class="row">
							<div class="col-xs-8">
								<label>Tên công ty</label>
								<input type="" name="" class="form-control" placeholder="Tên công ty">
							</div>
							<div class="col-xs-4">
								<label>Mã số thuế</label>
								<input type="" name="" class="form-control" placeholder="Mã số thuế">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-7">
								<label>Địa chỉ</label>
								<input type="" name="" class="form-control" placeholder="Địa chỉ">
							</div>
							<div class="col-xs-5">
								<label>Thành phố</label>
								<input type="" name="" class="form-control" placeholder="Thành phố">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-12">
								<label>Đại chỉ nhận hóa đơn</label>
								<textarea rows="4" class="form-control" placeholder="Địa chỉ nhận hóa đơn"></textarea>
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
					<input type="hidden" name="method" id="method">
					<div class="method-select">
						<div class="inner"><img src="" height="100" width="100">
						<p>Thanh toán qua ngân hàng</p></div>
						<div class="inner"><img src="" height="100" width="100">
						<p>Thánh toán trực tiếp tại đại lý</p></div>
						<div class="inner"><img src="" height="100" width="100">
						<p>Giao vé tới tận nhà</p></div>
					</div>
					<div style="clear: both;"></div>
					<br>
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
						5x hành khách
					</div>
					<div class="col-xs-6 text-right">
						<strong style="color: #3097D1">1.125.125 đ</strong>
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-xs-6">
						Phí dịch vụ
					</div>
					<div class="col-xs-6 text-right">
						<strong style="color: #3097D1; ">125.125 đ</strong>
					</div>

				</div>
				<br>
				<hr>
				<div class="row">
					<div class="col-xs-6" style="font-size: 16px">
						Tổng cộng
					</div>
					<div class="col-xs-6 text-right">
						<strong style="color: #3097D1; font-size: 16px">125.125 đ</strong>
					</div>

				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6" style="font-size: 16px">
						Giá thanh toán
					</div>
					<div class="col-xs-6 text-right">
						<strong style="color: #3097D1; font-size: 16px">125.125 đ</strong>
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
	</div>
</div>
<br>
<br>
<script type="text/javascript">
	var topLimit = $('#price').offset().top;
	$(window).scroll(function() {
	  //console.log(topLimit <= $(window).scrollTop())
	  if (topLimit -20 <= $(window).scrollTop()) {
	    $('#price').addClass('stickIt')
	  } else {
	    $('#price').removeClass('stickIt')
	  }
	})
</script>
@component('component.footer')
@endcomponent

@endsection


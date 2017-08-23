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
			<div class="col-md-5 col-md-offset-3">
				<form action="/payment">
					<br>
					<br>
					<div class="row">
						<div class="col-md-3 text-right">
							<label>Mã chỗ ngồi</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" placeholder="Mã chỗ ngồi" required="" name="seat_id" value="{{$input['seat_id']}}">
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
		</div>
		<div class="row">
			<div class="col-md-12">

				<br>

				@if (isset($ticket))
				@if ($ticket)
				<div class="ticket-detail" style="border: 1px solid #ccc; border-radius: 5px; padding: 15px 5px">
					<table style="width: 100%">
						<tr style="border-bottom: 1px solid #ccc; padding-bottom: 5px; height: 40px">
							<td>Mã chỗ ngồi<br></td>
							<td>Ngày đặt<br></td>
							<td>Tổng giá<br></td>
							<td>Email liên hệ<br></td>
							<td>Người liên hệ<br></td>
							<td>Số lượng hành khách<br></td>
							<td></td>
						</tr>
						<tr>
							<td class=""><br>{{$ticket->seat_id}}</td>
							<td class=""><br>{{$ticket->created_at}}</td>
							<td class=""><br><span class="money">{{$ticket->total}} đ</span></td>
							<td class=""><br>{{$ticket->contact_email}}</td>
							<td class=""><br>{{$ticket->contact_name}}</td>
							<td class=""><br>{{$ticket->count_adult + $ticket->count_children + $ticket->count_baby}}</td>
							<td class=""><br><a href="/ticket/info/{{base64_encode('ticket_id='.$ticket->id)}}">Chi tiết</a></td>
						</tr>

					</table>

				</div>
				@else
				<div class="text-center">
					<h4 class="text-center" style="font-weight: 200; padding: 30px; font-size: 24px; color: #999">
						<br>	
						Không thấy dữ liệu
					</h4>

				</div>
				@endif
				<br>
				<br>
				<br>
				<div class="text-center">
					<p>Nếu bạn có thắc mắc hoặc gặp những vấn đề phát sinh, sinh hãy liên hệ với chúng tôi qua <br>Sđt: <a href=""> 0975010758 </a>hoặc email:<a href=""> contact@clicktravel.vn</a></p>
				</div>
				@endif
			</div>
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


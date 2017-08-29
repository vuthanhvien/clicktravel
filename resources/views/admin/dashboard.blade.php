@extends('admin.layout')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="orange">
						<i class="material-icons">receipt</i>
					</div>
					<div class="card-content">
						<p class="category">Số lướng vé</p>
						<h3 class="title">{{$data['total_ticket']}}<small> vé</small></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons text-success">receipt</i> <a href="/admin/ticket">Xem tất cả</a>
						</div>
					</div>
				</div>
			</div>
			@if($data['_role'] == '1')
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="green">
						<i class="material-icons">person</i>
					</div>
					<div class="card-content">
						<p class="category">Người dùng</p>
						<h3 class="title">{{$data['total_user']}} <small>Người dùng</small></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">person</i> <a href="/admin/user">Xem tất cả</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="red">
						<i class="material-icons">face</i>
					</div>
					<div class="card-content">
						<p class="category">Khách hàng</p>
						<h3 class="title">{{$data['total_passenger']}} <small>khách hành</small></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<!-- <i class="material-icons">face</i> <a href="/admin/passenger">Xem tất cả</a> -->
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="blue">
						<i class="material-icons">timeline</i>
					</div>
					<div class="card-content">
						<p class="category">Đại lý cấp 2 đăng ký</p>
						<h3 class="title">{{$data['total_agency_register']}}<small> đăng ký</small></h3>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">timeline</i> <a href="/admin/agency_register">Xem tất cả</a>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>

		<div class="row">
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Vé mới đặt ngày ({{ date('d/m/Y')}})</h4>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead class="text-primary">
								<th>Người dùng</th>
								<th>Email</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th>Thời gian đặt</th>
								<th>Người đặt</th>
								<th>Chi tiết</th>
							</thead>
							<tbody>
							@foreach ($data['ticket_today'] as $ticket)
								<tr>
									<td>{{$ticket->contact_name}}</td>
									<td>{{$ticket->contact_email}}</td>
									<td>{{$ticket->count_adult + $ticket->count_children + $ticket->count_baby}} hành khách</td>
									<td  class="money">{{$ticket->total}} đ</td>
									<td>{{$ticket->created_at}}</td>
									<td>{{$ticket->user_id}}</td>
									<td><a href="/admin/ticket/{{$ticket->id}}">Chi tiết</a></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Vé khỏi hành hôm nay ({{ date('d/m/Y')}})</h4>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead class="text-primary">
								<th>Người dùng</th>
								<th>Email</th>
								<th>Số lượng</th>
								<th>Thành tiền</th>
								<th>Thời gian đặt</th>
								<th>Người đặt</th>
								<th>Giờ bay</th>
								<th>Lộ trình</th>
								<th>Loại</th>
								<th>Chi tiết</th>
							</thead>
							<tbody>
							@foreach ($data['tickets_run_today'] as $ticket)
								<tr>

									<td>{{$ticket->contact_name}}</td>
									<td>{{$ticket->contact_email}}</td>
									<td>{{$ticket->count_adult + $ticket->count_children + $ticket->count_baby}} hành khách</td>
									<td class="money">{{$ticket->total}}</td>
									<td>{{$ticket->created_at}}</td>
									<td>{{$ticket->user_name}} (@if($ticket->role == '1') Quản trị @elseif($ticket->role == '2') Đại lý cấp 2 @elseif($ticket->role == '3') Nhân viên @elseif($ticket->role == '4') Khách hàng @endif)</td>
									<td>{{$ticket->start_time}} - {{$ticket->end_time}} </td>
									<td><span class="place_replace">{{$ticket->start_place}}</span> - <span class="place_replace">{{$ticket->end_place}}</span> </td>
									<td>{{$ticket->type == 'first' ? 'Chuyến đi' : 'Khứ hổi'}}</td>
									<td><a href="/admin/ticket/{{$ticket->id}}">Chi tiết</a></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
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

@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
							<div class="row">
						<div class="col-xs-5"><h4 class="title">Thông tin vé</h4>
						</div>
						<div class="col-xs-7 text-right">
							<span>
								<ul class="pagination pull-right" style="margin:0; color: #555">
									@if ( $tickets->currentPage() != 1) 
										<li><a href="/admin/ticket?s={{$search}}&page=1">Trang đầu</a></li>
									@else
										<li class="disabled"><a href="/admin/ticket?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $tickets->currentPage() == $tickets->lastPage()  && $tickets->currentPage() > 4)
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() - 4}}">{{ $tickets->currentPage() - 4 }}</a></li>
									@endif
									@if (( $tickets->currentPage() == $tickets->lastPage() - 1 ||  $tickets->currentPage() == $tickets->lastPage()) &&   $tickets->currentPage() > 3) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() - 3}}">{{ $tickets->currentPage() - 3 }}</a></li>
									@endif
									@if ( $tickets->currentPage() > 2) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() - 2}}">{{ $tickets->currentPage() - 2 }}</a></li>
									@endif
									@if ( $tickets->currentPage() > 1) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() - 1}}">{{ $tickets->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $tickets->currentPage() }}</a></li>

									@if ( $tickets->currentPage() < $tickets->lastPage()) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() + 1}}">{{ $tickets->currentPage() + 1 }}</a></li>
									@endif
									@if ( $tickets->currentPage() < $tickets->lastPage() - 1 ) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() + 2}}">{{ $tickets->currentPage() + 2 }}</a></li>
									@endif
									@if (( $tickets->currentPage() == 2 ||  $tickets->currentPage() == 1) && $tickets->lastPage() > 3 )
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() + 3}}">{{ $tickets->currentPage() + 3 }}</a></li>
									@endif
									@if ( $tickets->currentPage() == 1 && $tickets->lastPage() > 4) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->currentPage() + 4}}">{{ $tickets->currentPage() + 4 }}</a></li>
									@endif
									@if ( $tickets->currentPage() != $tickets->lastPage() ) 
										<li><a href="/admin/ticket?s={{$search}}&page={{$tickets->lastPage()}}">Trang cuối</a></li>
									@else
										<li class="disabled"><a href="/admin/ticket?s={{$search}}&page={{$tickets->lastPage()}}">Trang cuối</a></li>
									@endif
								</ul>
								<style type="text/css">
									.pagination a{
										color: #555;
									}
									.card [data-background-color] a{
										color: initial;
									}
									.pagination li.active a{
										color: white;
									}
									.pagination li.disabled a{
										pointer-events: none;
									}
									.pagination li.disabled a{
										color: #ccc;
									}
								</style>
							</span>
							<form action="/admin/ticket">
								<div class="pull-right" style="position: relative;" >
									<input placeholder="Tìm kiếm" name="s" value="{{$search}}" style="color:#555; padding-left: 15px;   height: 34px;border: 0;border-radius: 5px;margin-right: 17px;" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
									<i style="position: absolute;color: #555;right: 25px;top: 10px;" class="fa fa-search"></i>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-content table-responsive">
					<table class="table">
						<thead class="text-primary">
							<th>Liên hệ</th>
							<th>Mã ghế ngồi</th>
							<th>Số lượng</th>
							<th>Khứ hồi / Một chiều</th>
							<th>Giá</th>
							<th>Trạng thái</th>
							<th>Ngày tạo</th>
							<th>Người đặt</th>
							<th>Thao tác</th>
						</thead>
						<tbody>
						@foreach ($tickets as $ticket)
							<tr>
								<td>{{ $ticket->contact_name}}</td>
								<td>{{ $ticket->seat_id}}</td>
								<td>{{ $ticket->count_adult + $ticket->count_children + $ticket->count_baby}} hành khách</td>
								<td>@if($ticket->mode == '1') Một chiều @else Khứ hồi @endif </td>
								<td class="money">{{ $ticket->total}} đ</td>
								<td>{{$status[$ticket->status]}}</td>
								<td>{{ $ticket->created_at }}</td>
								<td>
								@if ( $ticket->user_id)
								<a href="/admin/user/{{ $ticket->user_id }}">{{ $ticket->username }} (@if($ticket->role == '1') Quản trị @elseif($ticket->role == '2') Đại lý cấp 2 @elseif($ticket->role == '3') Nhân viên @elseif($ticket->role == '4') Khách hàng @endif)</a>
								@endif
								</td>
								<td class="text-primary"><a href="/admin/ticket/{{$ticket->id}}">Chi tiết	</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href="/ticket" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp; Đăng ký vé mới </a>
		</div>
	</div>
</div>
@endsection
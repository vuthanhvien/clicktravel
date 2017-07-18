@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
					<div class="row">
						<div class="col-xs-5"><h4 class="title">Thông tin đăng ký</h4>
						</div>
						<div class="col-xs-7 text-right">
							<span>
								<ul class="pagination pull-right" style="margin:0; color: #555">
									@if ( $agency_register->currentPage() != 1) 
										<li><a href="/admin/agency_register?s={{$search}}&page=1">Trang đầu</a></li>
									@else
										<li class="disabled"><a href="/admin/agency_register?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $agency_register->currentPage() == $agency_register->lastPage()  && $agency_register->currentPage() > 4)
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() - 4}}">{{ $agency_register->currentPage() - 4 }}</a></li>
									@endif
									@if (( $agency_register->currentPage() == $agency_register->lastPage() - 1 ||  $agency_register->currentPage() == $agency_register->lastPage()) &&   $agency_register->currentPage() > 3) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() - 3}}">{{ $agency_register->currentPage() - 3 }}</a></li>
									@endif
									@if ( $agency_register->currentPage() > 2) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() - 2}}">{{ $agency_register->currentPage() - 2 }}</a></li>
									@endif
									@if ( $agency_register->currentPage() > 1) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() - 1}}">{{ $agency_register->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $agency_register->currentPage() }}</a></li>

									@if ( $agency_register->currentPage() < $agency_register->lastPage()) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() + 1}}">{{ $agency_register->currentPage() + 1 }}</a></li>
									@endif
									@if ( $agency_register->currentPage() < $agency_register->lastPage() - 1 ) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() + 2}}">{{ $agency_register->currentPage() + 2 }}</a></li>
									@endif
									@if (( $agency_register->currentPage() == 2 ||  $agency_register->currentPage() == 1) && $agency_register->lastPage() > 3 )
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() + 3}}">{{ $agency_register->currentPage() + 3 }}</a></li>
									@endif
									@if ( $agency_register->currentPage() == 1 && $agency_register->lastPage() > 4) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->currentPage() + 4}}">{{ $agency_register->currentPage() + 4 }}</a></li>
									@endif
									@if ( $agency_register->currentPage() != $agency_register->lastPage() ) 
										<li><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->lastPage()}}">Trang cuối</a></li>
									@else
										<li class="disabled"><a href="/admin/agency_register?s={{$search}}&page={{$agency_register->lastPage()}}">Trang cuối</a></li>
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
							<form action="/admin/agency_register">
								<div class="pull-right" style="position: relative;" >
									<input placeholder="Tìm kiếm" name="s" value="{{$search}}" style="color:#555; padding-left: 15px;   height: 34px;border: 0;border-radius: 5px;margin-right: 17px;" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
									<i style="position: absolute;color: #555;right: 25px;top: 10px;" class="fa fa-search"></i>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-content table-responsive">
					<table class="table table-border" id="table">
						<thead class="text-primary">
							<th>Tên</th>
							<th>Họ</th>
							<th>Số điện thoại</th>
							<th>Địa chỉ</th>
							<th>Trạng thái</th>
							<th>Thao tác</th>
						</thead>
						<tbody>
							@foreach ($agency_register as $agency_register)
							<tr>
								<td>{{$agency_register->first_name}}</td>
								<td>{{$agency_register->last_name}}</td>
								<td>{{$agency_register->phone}}</td>
								<td>{{$agency_register->address}}</td>
								<td>{{$agency_register->status}}</td>
								<td>
									<a href="/admin/agency_register/{{$agency_register->id}}">Chi tiết</a>
								</td>
							</tr>
							@endforeach


						</tbody>
					</table>

				</div>
			</div>


		</div>

	</div>
</div>
<script type="text/javascript">
		// $('#table').DataTable({
		// 	 "ajax": '/admin/passenger_data'
		// });
	</script>
	@endsection
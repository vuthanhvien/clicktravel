@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
					<div class="row">
						<div class="col-xs-4"><h4 class="title">Thông tin khách hàng</h4>
						</div>
						<div class="col-xs-8 text-right">
							<span>
								<ul class="pagination pull-right" style="margin:0; color: #555">
									@if ( $users->currentPage() != 1) 
									<li><a href="/admin/user?s={{$search}}&page=1">Trang đầu</a></li>
									@else
									<li class="disabled"><a href="/admin/user?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $users->currentPage() == $users->lastPage()  && $users->currentPage() > 4)
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() - 4}}">{{ $users->currentPage() - 4 }}</a></li>
									@endif
									@if (( $users->currentPage() == $users->lastPage() - 1 ||  $users->currentPage() == $users->lastPage()) &&   $users->currentPage() > 3) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() - 3}}">{{ $users->currentPage() - 3 }}</a></li>
									@endif
									@if ( $users->currentPage() > 2) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() - 2}}">{{ $users->currentPage() - 2 }}</a></li>
									@endif
									@if ( $users->currentPage() > 1) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() - 1}}">{{ $users->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $users->currentPage() }}</a></li>

									@if ( $users->currentPage() < $users->lastPage()) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() + 1}}">{{ $users->currentPage() + 1 }}</a></li>
									@endif
									@if ( $users->currentPage() < $users->lastPage() - 1 ) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() + 2}}">{{ $users->currentPage() + 2 }}</a></li>
									@endif
									@if (( $users->currentPage() == 2 ||  $users->currentPage() == 1) && $users->lastPage() > 3 )
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() + 3}}">{{ $users->currentPage() + 3 }}</a></li>
									@endif
									@if ( $users->currentPage() == 1 && $users->lastPage() > 4) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->currentPage() + 4}}">{{ $users->currentPage() + 4 }}</a></li>
									@endif
									@if ( $users->currentPage() != $users->lastPage() ) 
									<li><a href="/admin/user?s={{$search}}&page={{$users->lastPage()}}">Trang cuối</a></li>
									@else
									<li class="disabled"><a href="/admin/user?s={{$search}}&page={{$users->lastPage()}}">Trang cuối</a></li>
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
							<form action="/admin/user">
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
							<th>Tên</th>
							<th>Email</th>
							<th>Vai trò</th>
							<th>Ngày tạo</th>
							<th>Thao tác</th>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td><strong>{{ $user->name }}</strong></td>
								<td>{{ $user->email }}</td>
								<td>@if ($user->role == 1)  Quản lý  @elseif ($user->role == 2)  Đại lý cấp 2 @elseif ($user->role == 3)  Nhân viên  @else Khách hàng @endif </td>
								<td>{{ $user->created_at }}</td>
								<td><a href="/admin/user/{{$user->id}}">Chi tiết</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
			<span><a class="btn btn-success" href="/admin/user/new"><i class="fa fa-plus"></i> &nbsp; &nbsp; Tạo tài khoản mới</a></span>

		</div>

		
	</div>
</div>
@endsection
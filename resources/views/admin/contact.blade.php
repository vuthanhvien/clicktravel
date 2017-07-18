@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
										<div class="row">
						<div class="col-xs-5"><h4 class="title">Thông tin khách hàng</h4>
						</div>
						<div class="col-xs-7 text-right">
							<span>
								<ul class="pagination pull-right" style="margin:0; color: #555">
									@if ( $contacts->currentPage() != 1) 
										<li><a href="/admin/contact?s={{$search}}&page=1">Trang đầu</a></li>
									@else
										<li class="disabled"><a href="/admin/contact?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $contacts->currentPage() == $contacts->lastPage()  && $contacts->currentPage() > 4)
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() - 4}}">{{ $contacts->currentPage() - 4 }}</a></li>
									@endif
									@if (( $contacts->currentPage() == $contacts->lastPage() - 1 ||  $contacts->currentPage() == $contacts->lastPage()) &&   $contacts->currentPage() > 3) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() - 3}}">{{ $contacts->currentPage() - 3 }}</a></li>
									@endif
									@if ( $contacts->currentPage() > 2) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() - 2}}">{{ $contacts->currentPage() - 2 }}</a></li>
									@endif
									@if ( $contacts->currentPage() > 1) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() - 1}}">{{ $contacts->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $contacts->currentPage() }}</a></li>

									@if ( $contacts->currentPage() < $contacts->lastPage()) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() + 1}}">{{ $contacts->currentPage() + 1 }}</a></li>
									@endif
									@if ( $contacts->currentPage() < $contacts->lastPage() - 1 ) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() + 2}}">{{ $contacts->currentPage() + 2 }}</a></li>
									@endif
									@if (( $contacts->currentPage() == 2 ||  $contacts->currentPage() == 1) && $contacts->lastPage() > 3 )
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() + 3}}">{{ $contacts->currentPage() + 3 }}</a></li>
									@endif
									@if ( $contacts->currentPage() == 1 && $contacts->lastPage() > 4) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->currentPage() + 4}}">{{ $contacts->currentPage() + 4 }}</a></li>
									@endif
									@if ( $contacts->currentPage() != $contacts->lastPage() ) 
										<li><a href="/admin/contact?s={{$search}}&page={{$contacts->lastPage()}}">Trang cuối</a></li>
									@else
										<li class="disabled"><a href="/admin/contact?s={{$search}}&page={{$contacts->lastPage()}}">Trang cuối</a></li>
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
							<form action="/admin/contact">
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
							<th>Mã đơn hàng</th>
							<th>Thao tác</th>
							<th>Ngày tạo</th>
						</thead>
						<tbody>
						@foreach ($contacts as $contact)
							<tr>
								<td><strong>{{ $contact->name }}</strong></td>
								<td>{{ $contact->email }}</td>
								<td>{{ $contact->transition_id }}</td>
								<td><a href="/admin/contact/{{$contact->id}}"> Chi tiết</a></td>
								<td>{{ $contact->created_at }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>

		
	</div>
</div>
@endsection
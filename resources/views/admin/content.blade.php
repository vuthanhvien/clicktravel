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
									@if ( $contents->currentPage() != 1) 
										<li><a href="/admin/content?s={{$search}}&page=1">Trang đầu</a></li>
									@else
										<li class="disabled"><a href="/admin/content?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $contents->currentPage() == $contents->lastPage()  && $contents->currentPage() > 4)
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() - 4}}">{{ $contents->currentPage() - 4 }}</a></li>
									@endif
									@if (( $contents->currentPage() == $contents->lastPage() - 1 ||  $contents->currentPage() == $contents->lastPage()) &&   $contents->currentPage() > 3) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() - 3}}">{{ $contents->currentPage() - 3 }}</a></li>
									@endif
									@if ( $contents->currentPage() > 2) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() - 2}}">{{ $contents->currentPage() - 2 }}</a></li>
									@endif
									@if ( $contents->currentPage() > 1) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() - 1}}">{{ $contents->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $contents->currentPage() }}</a></li>

									@if ( $contents->currentPage() < $contents->lastPage()) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() + 1}}">{{ $contents->currentPage() + 1 }}</a></li>
									@endif
									@if ( $contents->currentPage() < $contents->lastPage() - 1 ) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() + 2}}">{{ $contents->currentPage() + 2 }}</a></li>
									@endif
									@if (( $contents->currentPage() == 2 ||  $contents->currentPage() == 1) && $contents->lastPage() > 3 )
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() + 3}}">{{ $contents->currentPage() + 3 }}</a></li>
									@endif
									@if ( $contents->currentPage() == 1 && $contents->lastPage() > 4) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->currentPage() + 4}}">{{ $contents->currentPage() + 4 }}</a></li>
									@endif
									@if ( $contents->currentPage() != $contents->lastPage() ) 
										<li><a href="/admin/content?s={{$search}}&page={{$contents->lastPage()}}">Trang cuối</a></li>
									@else
										<li class="disabled"><a href="/admin/content?s={{$search}}&page={{$contents->lastPage()}}">Trang cuối</a></li>
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
							<form action="/admin/content">
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
							<th>Mã url</th>
							<th>Tên</th>
							<th>Ngày tạo</th>
							<th>Thao tác</th>
						</thead>
						<tbody>
						@foreach ($contents as $content)
							<tr>
								<td><strong>{{ $content->key_config }}</strong></td>
								<td>{{ $content->title }}</td>
								<td>{{ $content->created_at }}</td>
								<td><a href="/admin/content/{{$content->id}}"> Chi tiết</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>

		
	</div>
	<a href="/admin/content/new" class="btn btn-success">Thêm bài viết mới</a>
</div>
@endsection
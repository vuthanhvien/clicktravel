@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
										<div class="row">
						<div class="col-xs-5"><h4 class="title">Mã khuyến mãi</h4>
						</div>
						<div class="col-xs-7 text-right">
							<span>
								<ul class="pagination pull-right" style="margin:0; color: #555">
									@if ( $promotions->currentPage() != 1) 
										<li><a href="/admin/promotion?s={{$search}}&page=1">Trang đầu</a></li>
									@else
										<li class="disabled"><a href="/admin/promotion?s={{$search}}&page=1">Trang đầu</a></li>

									@endif
									@if ( $promotions->currentPage() == $promotions->lastPage()  && $promotions->currentPage() > 4)
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() - 4}}">{{ $promotions->currentPage() - 4 }}</a></li>
									@endif
									@if (( $promotions->currentPage() == $promotions->lastPage() - 1 ||  $promotions->currentPage() == $promotions->lastPage()) &&   $promotions->currentPage() > 3) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() - 3}}">{{ $promotions->currentPage() - 3 }}</a></li>
									@endif
									@if ( $promotions->currentPage() > 2) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() - 2}}">{{ $promotions->currentPage() - 2 }}</a></li>
									@endif
									@if ( $promotions->currentPage() > 1) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() - 1}}">{{ $promotions->currentPage() - 1 }}</a></li>
									@endif

									<li  class="active"><a  href="#">{{ $promotions->currentPage() }}</a></li>

									@if ( $promotions->currentPage() < $promotions->lastPage()) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() + 1}}">{{ $promotions->currentPage() + 1 }}</a></li>
									@endif
									@if ( $promotions->currentPage() < $promotions->lastPage() - 1 ) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() + 2}}">{{ $promotions->currentPage() + 2 }}</a></li>
									@endif
									@if (( $promotions->currentPage() == 2 ||  $promotions->currentPage() == 1) && $promotions->lastPage() > 3 )
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() + 3}}">{{ $promotions->currentPage() + 3 }}</a></li>
									@endif
									@if ( $promotions->currentPage() == 1 && $promotions->lastPage() > 4) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->currentPage() + 4}}">{{ $promotions->currentPage() + 4 }}</a></li>
									@endif
									@if ( $promotions->currentPage() != $promotions->lastPage() ) 
										<li><a href="/admin/promotion?s={{$search}}&page={{$promotions->lastPage()}}">Trang cuối</a></li>
									@else
										<li class="disabled"><a href="/admin/promotion?s={{$search}}&page={{$promotions->lastPage()}}">Trang cuối</a></li>
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
							<form action="/admin/promotion">
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
							<th>Mã</th>
							<th>Loại</th>
							<th>Gía</th>
							<th>Trạng thái</th>
							<th>Email sử dụng</th>
							<th></th>
						</thead>
						<tbody>
						@foreach ($promotions as $promotion)
							<tr>
								<td><p>{{$promotion->key}}</p></td>
								<td>@if($promotion->type == 'one') Sử dụng 1 lần @else Sử dụng nhiều lần @endif</td>
								<td class="money">{{$promotion->price}}</td>
								<td>@if($promotion->status == 'new') Mới tạo ({{$promotion->created_at}}) @endif
									@if($promotion->status == 'expire') Hết hạn @endif
									@if($promotion->status == 'used') Đã được sử dụng @endif
									</td>
								<td>{{$promotion->email_used}}</td>
								<td class="no-padding"><button class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#promotion_delete" onclick="add_delete('{{$promotion->key}}')">Xóa</button></td>
							</tr>
						@endforeach
						</tbody>
					</table>

				</div>
			</div>
			<span><a class="btn btn-success"   data-toggle="modal" data-target="#promotion_new" ><i class="fa fa-plus"></i> &nbsp; &nbsp; Tạo khuyến mãi mới</a></span>
		</div>

		
	</div>
</div>
<script type="text/javascript">
	@if(isset($_REQUEST['error']) || isset($_REQUEST['success']))
	$('#promotion_new').modal('show');
	@endif

	function add_delete(key){
		$('#delete_id').val(key);

	}
</script>
<style type="text/css">
	.table td{
		font-size: 14px;
	}
</style>
@endsection
<div id="promotion_new" class="modal fade @if(isset($_REQUEST['error']) || isset($_REQUEST['success'])) in @endif" role="dialog">
	<form action="/admin/promotion_save" method="POST">
		<div class="modal-dialog">
                {{ csrf_field() }}

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Khuyến mãi mới</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group label-floating ">
								<label class="control-label">Mã khuyến mãi (Viết liền, không dấu)</label>
								<input type="text" class="form-control" name="key" required @if (isset($_GET['code']) )  value="{{$_GET['code']}}"  @endif>
								<span class="material-input"></span>
							</div>
						</div>

						<div class="col-md-8 col-md-offset-2">
							<div class="form-group label-floating ">
								<label class="control-label">Giá trị (VND)</label>
								<input type="number" class="form-control" name="price" required> 
								<span class="material-input"></span>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group label-floating ">
								<label class="control-label">Loại</label>
								<select type="number" class="form-control" name="type" required> 
									<option value="one">Sử dụng 1 lần</option>
									<option value="muti">Sử dụng nhiều lần</option>
								</select>
								<span class="material-input"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" >Tạo</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="promotion_delete" class="modal fade" role="dialog">
	<form action="/admin/promotion_delete" method="POST">
                {{ csrf_field() }}

		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Khuyến mãi mới</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<label class="control-label">Mã khuyến mãi (Viết liền, không dấu)</label>
							<input type="text" class="form-control" name="key" required id="delete_id">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Xóa</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
				</div>
			</div>
		</form>
	</div>
</div>


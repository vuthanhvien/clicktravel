@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#content" style="cursor: pointer;">
						<h4 class="title">Thông tin chung</h4>
				</div>
				<div class="card-content collapse in" id="content" style="padding-bottom: 0;padding-top: 0">
					<div class="row">
						<div class="col-md-4">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Tên công ty</label>
									<input type="text" class="form-control" value="TNHH Trần Phong">
								<span class="material-input"></span></div>
							</div>

							<div class="col-md-4">
								<div class="form-group label-floating is-empty">
									<label class="control-label">Email quản trị</label>
									<input type="text" class="form-control">
								<span class="material-input"></span></div>
							</div>
					</div>
					<br>
					<br>
				</div>
			</div>


			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#homepage" style="cursor: pointer;">
						<h4 class="title">Hình ảnh trang chủ</h4>
				</div>
				<div class="card-content collapse in" id="homepage" style="padding-bottom: 0;padding-top: 0">
					<table class="table table-border" >
						<thead class="text-primary">
							<th>Tên</th>
							<th>Họ</th>
							<th>Tuổi</th>
							<th>Giới tính</th>
							<th>Loại</th>
							<th>Thao tác</th>
						</thead>
						<tbody>
							


						</tbody>
					</table>

				</div>
			</div>


		</div>

	</div>
</div>
	@endsection
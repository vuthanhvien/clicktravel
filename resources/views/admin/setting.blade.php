@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#content" style="cursor: pointer;">
					<h4 class="title">Thông tin chung</h4>
				</div>
				<div class="card-content collapse @if($show =='content') in @endif" id="content" style="padding-bottom: 0;padding-top: 0">
					<form action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="content">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Tên công ty</label>
									<input type="text" class="form-control" value="{{isset($config->company_name) ? $config->company_name : ''}}" name="company_name">
									<span class="material-input"></span>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Email quản trị</label>
									<input type="text" class="form-control" value="{{isset($config->email_admin) ? $config->email_admin : ''}}"  name="email_admin"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Email liên hệ</label>
									<input type="text" class="form-control" value="{{isset($config->contact_mail) ? $config->contact_mail : ''}}"  name="contact_mail"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Giá dịch vụ cho người lớn </label>
									<input type="text" class="form-control" value="{{isset($config->service_adult) ? $config->service_adult : ''}}" name="service_adult">
									<span class="material-input"></span>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Giá dịch vụ cho trẻ em </label>
									<input type="text" class="form-control" value="{{isset($config->service_children) ? $config->service_children : ''}}"  name="service_children"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Giá dịch vụ cho trẻ sơ sinh</label>
									<input type="text" class="form-control" value="{{isset($config->service_baby) ? $config->service_baby : ''}}"  name="service_baby"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Giá quy đổi sang vnd</label>
									<input type="text" class="form-control" value="{{isset($config->convert) ? $config->convert : ''}}"  name="convert"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Tên trang web</label>
									<input type="text" class="form-control" value="{{isset($config->website_name) ? $config->website_name : ''}}" name="website_name">
									<span class="material-input"></span>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Mô tả</label>
									<input type="text" class="form-control" value="{{isset($config->description) ? $config->description : ''}}"  name="description"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Địa chỉ công ty</label>
									<input type="text" class="form-control" value="{{isset($config->address_company) ? $config->address_company : ''}}"  name="address_company"> 
									<span class="material-input"></span>
								</div>
							</div>


						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Điện thoại 1</label>
									<input type="text" class="form-control" value="{{isset($config->phone1) ? $config->phone1 : ''}}" name="phone1"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Điện thoại 2</label>
									<input type="text" class="form-control" value="{{isset($config->phone2) ? $config->phone2 : ''}}" name="phone2"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Zalo</label>
									<input type="text" class="form-control" value="{{isset($config->zalo) ? $config->zalo : ''}}"  name="zalo"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Skype</label>
									<input type="text" class="form-control" value="{{isset($config->skype) ? $config->skype : ''}}"  name="skype"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Facebook</label>
									<input type="text" class="form-control" value="{{isset($config->facebook) ? $config->facebook : ''}}"  name="facebook"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Viber</label>
									<input type="text" class="form-control" value="{{isset($config->viber) ? $config->viber : ''}}"  name="viber"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hỉnh ảnh "LIên hệ"</label>
									<input type="text" class="form-control" value="{{isset($config->contact_url) ? $config->contact_url : ''}}"  name="contact_url"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hình ảnh "Đại lý cấp 2"</label>
									<input type="text" class="form-control" value="{{isset($config->agency_url) ? $config->agency_url : ''}}"  name="agency_url"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hình ảnh "Về chúng tôi"</label>
									<input type="text" class="form-control" value="{{isset($config->about_url) ? $config->about_url : ''}}"  name="about_url"> 
									<span class="material-input"></span>
								</div>
							</div>
							 
						</div>

						<div class="text-right">
							<button type="submit" class="btn btn-success">Lưu</button>
						</div>
						<br>
					</form>
				</div>

			</div>
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#home" style="cursor: pointer;">
					<h4 class="title">Nội dung trang chủ</h4>
				</div>
				<div class="card-content collapse  @if($show =='home') in @endif" id="home" style="padding-bottom: 0;padding-top: 0">
					<form action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="home">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Tiêu đề</label>
									<input type="text" class="form-control" value="{{isset($config->title_1_hompage) ? $config->title_1_hompage : ''}}" name="title_1_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->content_1_hompage) ? $config->content_1_hompage : ''}}" name="content_1_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Tiêu đề</label>
									<input type="text" class="form-control" value="{{isset($config->title_2_hompage) ? $config->title_2_hompage : ''}}"  name="title_2_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->content_2_hompage) ? $config->content_2_hompage : ''}}"  name="content_2_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Tiêu đề</label>
									<input type="text" class="form-control" value="{{isset($config->title_3_hompage) ? $config->title_3_hompage : ''}}"  name="title_3_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->content_3_hompage) ? $config->content_3_hompage : ''}}"  name="content_3_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hình thức thanh toán 1</label>
									<input type="text" class="form-control" value="{{isset($config->method_1_hompage) ? $config->method_1_hompage : ''}}" name="method_1_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->method_content_1_hompage) ? $config->method_content_1_hompage : ''}}"  name="method_content_1_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hình thức thanh toán 2</label>
									<input type="text" class="form-control" value="{{isset($config->method_2_hompage) ? $config->method_2_hompage : ''}}"  name="method_2_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->method_content_2_hompage) ? $config->method_content_2_hompage : ''}}" name="method_content_2_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group label-floating ">
									<label class="control-label">Hình thức thanh toán 3</label>
									<input type="text" class="form-control" value="{{isset($config->method_3_hompage) ? $config->method_3_hompage : ''}}" name="method_3_hompage"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Nội dung</label>
									<input type="text" class="form-control" value="{{isset($config->method_content_3_hompage) ? $config->method_content_3_hompage : ''}}"  name="method_content_3_hompage"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group label-floating ">
									<label class="control-label">Đường dẫn facebook</label>
									<input type="text" class="form-control" value="{{isset($config->facebook_url) ? $config->facebook_url : ''}}"  name="facebook_url"> 
									<span class="material-input"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating ">
									<label class="control-label">Đường dẫn google</label>
									<input type="text" class="form-control" value="{{isset($config->google_url) ? $config->google_url : ''}}"  name="google_url"> 
									<span class="material-input"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Tên tab 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_name_1) ? $config->tab_name_1 : ''}}"  name="tab_name_1"> 
									<span class="material-input"></span>
								</div>
								<div class="form-group label-floating ">
									<label class="control-label">Url tab 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_url_1) ? $config->tab_url_1 : ''}}"  name="tab_url_1"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Link ảnh 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_img_1) ? $config->tab_img_1 : ''}}"  name="tab_img_1"> 
									<span class="material-input"></span>
								</div>

							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Tên tab 2</label>
									<input type="text" class="form-control" value="{{isset($config->tab_name_2) ? $config->tab_name_2 : ''}}"  name="tab_name_2"> 
									<span class="material-input"></span>
								</div>
								<div class="form-group label-floating ">
									<label class="control-label">Url tab 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_url_2) ? $config->tab_url_2 : ''}}"  name="tab_url_2"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Link ảnh 2</label>
									<input type="text" class="form-control" value="{{isset($config->tab_img_2) ? $config->tab_img_2 : ''}}"  name="tab_img_2"> 
									<span class="material-input"></span>
								</div>

							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Tên tab 3</label>
									<input type="text" class="form-control" value="{{isset($config->tab_name_3) ? $config->tab_name_3 : ''}}"  name="tab_name_3"> 
									<span class="material-input"></span>
								</div>
								<div class="form-group label-floating ">
									<label class="control-label">Url tab 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_url_3) ? $config->tab_url_3 : ''}}"  name="tab_url_3"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Link ảnh 3</label>
									<input type="text" class="form-control" value="{{isset($config->tab_img_3) ? $config->tab_img_3 : ''}}"  name="tab_img_3"> 
									<span class="material-input"></span>
								</div>

							</div>
							<div class="col-md-3">
								<div class="form-group label-floating ">
									<label class="control-label">Tên tab 4</label>
									<input type="text" class="form-control" value="{{isset($config->tab_name_4) ? $config->tab_name_4 : ''}}"  name="tab_name_4"> 
									<span class="material-input"></span>
								</div>
								<div class="form-group label-floating ">
									<label class="control-label">Url tab 1</label>
									<input type="text" class="form-control" value="{{isset($config->tab_url_4) ? $config->tab_url_4 : ''}}"  name="tab_url_4"> 
									<span class="material-input"></span>
								</div>

								<div class="form-group label-floating ">
									<label class="control-label">Link ảnh 4</label>
									<input type="text" class="form-control" value="{{isset($config->tab_img_4) ? $config->tab_img_4 : ''}}"  name="tab_img_4"> 
									<span class="material-input"></span>
								</div>

							</div>
							
						</div>


						<br>
						<div class="text-right">
							<button class="btn btn-success" type="submit">Lưu</button>
						</div>
						<br>
					</form>
				</div>

			</div>
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#location" style="cursor: pointer;">
					<h4 class="title">Hình ảnh địa danh</h4>
				</div>
				<div class="card-content collapse  @if($show =='location') in @endif" id="location" style="padding-bottom: 0;padding-top: 0">
					<form action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="location">
						<br>
						<h4><strong>Nội dung 1</strong></h4>
						<div class="section">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Tiêu đề</label>
										<input type="text" name="title_location_1" class="form-control" value="{{isset($config->title_location_1) ? $config->title_location_1 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Nội dung</label>
										<input type="text" name="content_location_1" class="form-control"  value="{{isset($config->content_location_1) ? $config->content_location_1 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_1_1" class="form-control"  value="{{isset($config->image_1_1) ? $config->image_1_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_1_1" class="form-control"  value="{{isset($config->location_1_1) ? $config->location_1_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_1_1" class="form-control"  value="{{isset($config->price_1_1) ? $config->price_1_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_1_1" class="form-control"  value="{{isset($config->width_1_1) ? $config->width_1_1 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_1_2" class="form-control"  value="{{isset($config->image_1_2) ? $config->image_1_2 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_1_2" class="form-control"  value="{{isset($config->location_1_2) ? $config->location_1_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_1_2" class="form-control" value="{{isset($config->price_1_2) ? $config->price_1_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_1_2" class="form-control"  value="{{isset($config->width_1_2) ? $config->width_1_2 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_1_3" class="form-control"  value="{{isset($config->image_1_3) ? $config->image_1_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_1_3" class="form-control"  value="{{isset($config->location_1_3) ? $config->location_1_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_1_3" class="form-control"  value="{{isset($config->price_1_3) ? $config->price_1_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_1_3" class="form-control"  value="{{isset($config->width_1_3) ? $config->width_1_3 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_1_4" class="form-control"  value="{{isset($config->image_1_4) ? $config->image_1_4 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_1_4" class="form-control"  value="{{isset($config->location_1_4) ? $config->location_1_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_1_4" class="form-control"  value="{{isset($config->price_1_4) ? $config->price_1_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_1_4" class="form-control"  value="{{isset($config->width_1_4) ? $config->width_1_4 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
								</div>
							</div>

						</div>

						<h4><strong>Nội dung 2</strong></h4>
						<div class="section">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Tiêu đề</label>
										<input type="text" name="title_location_2" class="form-control"  value="{{isset($config->title_location_2) ? $config->title_location_2 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Nội dung</label>
										<input type="text" name="content_location_2" class="form-control" value="{{isset($config->content_location_2) ? $config->content_location_2 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_2_1" class="form-control" value="{{isset($config->image_2_1) ? $config->image_2_1 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_2_1" class="form-control" value="{{isset($config->location_2_1) ? $config->location_2_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_2_1" class="form-control" value="{{isset($config->price_2_1) ? $config->price_2_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_2_1" class="form-control" value="{{isset($config->width_2_1) ? $config->width_2_1 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_2_2" class="form-control" value="{{isset($config->image_2_2) ? $config->image_2_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_2_2" class="form-control" value="{{isset($config->location_2_2) ? $config->location_2_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_2_2" class="form-control" value="{{isset($config->price_2_2) ? $config->price_2_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_2_2" class="form-control" value="{{isset($config->width_2_2) ? $config->width_2_2 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_2_3" class="form-control" value="{{isset($config->image_2_3) ? $config->image_2_3 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_2_3" class="form-control" value="{{isset($config->location_2_3) ? $config->location_2_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_2_3" class="form-control" value="{{isset($config->price_2_3) ? $config->price_2_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_2_3" class="form-control" value="{{isset($config->width_2_3) ? $config->width_2_3 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_2_4" class="form-control" value="{{isset($config->image_2_4) ? $config->image_2_4 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_2_4" class="form-control" value="{{isset($config->location_2_4) ? $config->location_2_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_2_4" class="form-control" value="{{isset($config->price_2_4) ? $config->price_2_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_2_4" class="form-control" value="{{isset($config->width_2_4) ? $config->width_2_4 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
								</div>
							</div>

						</div>					
						<h4><strong>Nội dung 3</strong></h4>
						<div class="section">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Tiêu đề</label>
										<input type="text" name="title_location_3" class="form-control" value="{{isset($config->title_location_3) ? $config->title_location_3 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating ">
										<label class="control-label">Nội dung</label>
										<input type="text" name="content_location_3" class="form-control" value="{{isset($config->content_location_3) ? $config->content_location_3 : ''}}">
										<span class="material-input"></span>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_3_1" class="form-control" value="{{isset($config->image_3_1) ? $config->image_3_1 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_3_1" class="form-control" value="{{isset($config->location_3_1) ? $config->location_3_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_3_1" class="form-control" value="{{isset($config->price_3_1) ? $config->price_3_1 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_3_1" class="form-control" value="{{isset($config->width_3_1) ? $config->width_3_1 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_3_2" class="form-control" value="{{isset($config->image_3_2) ? $config->image_3_2 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_3_2" class="form-control" value="{{isset($config->location_3_2) ? $config->location_3_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_3_2" class="form-control" value="{{isset($config->price_3_2) ? $config->price_3_2 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_3_2" class="form-control" value="{{isset($config->width_3_2) ? $config->width_3_2 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_3_3" class="form-control" value="{{isset($config->image_3_3) ? $config->image_3_3 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_3_3" class="form-control" value="{{isset($config->location_3_3) ? $config->location_3_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_3_3" class="form-control" value="{{isset($config->price_3_3) ? $config->price_3_3 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_3_3" class="form-control" value="{{isset($config->width_3_3) ? $config->width_3_3 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
									<div class="col-md-3">
										<div class="form-group label-floating ">
											<label class="control-label">Hình ảnh</label>
											<input type="text" name="image_3_4" class="form-control" value="{{isset($config->image_3_4) ? $config->image_3_4 : ''}}">
											<span class="material-input"></span>
										</div>

										<div class="form-group label-floating ">
											<label class="control-label">Địa đanh</label>
											<input type="text" name="location_3_4" class="form-control" value="{{isset($config->location_3_4) ? $config->location_3_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Giá</label>
											<input type="text" name="price_3_4" class="form-control" value="{{isset($config->price_3_4) ? $config->price_3_4 : ''}}">
											<span class="material-input"></span>
										</div>
										<div class="form-group label-floating ">
											<label class="control-label">Độ rộng</label>
											<input type="text" name="width_3_4" class="form-control" value="{{isset($config->width_3_4) ? $config->width_3_4 : ''}}">
											<span class="material-input"></span>
										</div>

									</div>
								</div>
							</div>

						</div>
						<div class="text-right">
							<button class='btn btn-success' type="submit">Lưu</button>
						</div>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#page" style="cursor: pointer;">
					<h4 class="title">Các trang nội dung</h4>
				</div>
				<div class="card-content collapse  @if($show =='page') in @endif" id="page" style="padding-bottom: 0;padding-top: 0">
					<br>
					<form id="contact_form" action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="page">
						<h4 style="display: inline-block;"><strong>Nội dung liên hệ</strong></h4> 
						&nbsp;&nbsp;&nbsp; 
						<button class="btn btn-success btn-sm" type="submit">Lưu</button>

						<textarea name="contact"  id="textarea_contact">{{isset($content['contact']) ? $content['contact'] : ''}}</textarea>
					</form>
					<br>
					<form id="about_form" action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="page">
						<h4 style="display: inline-block;"><strong>Nội dung Về chúng tôi</strong></h4> 
						&nbsp;&nbsp;&nbsp;
						<button class="btn btn-success btn-sm" type="submit" >Lưu</button>
						<textarea name="about" id="textarea_about">{{isset($content['about']) ? $content['about'] : ''}}</textarea>
					</form>
					<br>
					<form id="benefit_form" action="/admin/setting/save" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="type" value="page">
						<h4 style="display: inline-block;"><strong>Lợi ích đại lý cấp 2</strong></h4>
						&nbsp;&nbsp;&nbsp; 
						<button class="btn btn-success btn-sm" type="submit">Lưu</button>
						<textarea name="benefit" id="textarea_benefit">{{isset($content['benefit']) ? $content['benefit'] : ''}}</textarea>
					</form>
					<br>
				</div>

			</div>
			<div class="card">
				<div class="card-header" data-background-color="blue" data-toggle="collapse" data-target="#price" style="cursor: pointer;">
					<h4 class="title">Giá dịch vụ các hãng bay</h4>
				</div>
				<div class="card-content collapse  @if($show =='price') in @endif" id="price" style="padding-bottom: 0;padding-top: 0">
					<form action="/admin/services_brand">
						<table class="table">
							<tr>
								<th>Mã hãng bay</th>
								<th>Tên hãng bay</th>
								<th>Giá dịch vụ</th>
								<th>Dường dẫn hình ảnh</th>
							</tr>
							@foreach($services_brand as $key => $price)
							<tr>
								<td>{{$price->key}}</td>
								<td>{{$price->name}}</td>
								<td>{{$price->price_service}}</td>
								<td>{{$price->image}}</td>
							</tr>
							@endforeach
							<tr>
								<td>
									<div class="form-group label-floating ">
										<label class="control-label">Mã hãng bay</label>
										<input type="text" name="key" class="form-control" >
										<span class="material-input"></span>
									</div>

								</td>
								<td>
									<div class="form-group label-floating ">
										<label class="control-label">Tên hãng bay</label>
										<input type="text" name="name" class="form-control" >
										<span class="material-input"></span>
									</div>
								</td>
								<td>
									<div class="form-group label-floating ">
										<label class="control-label">Giá dịch vụ (VND)</label>
										<input type="text" name="value" class="form-control" >
										<span class="material-input"></span>
									</div>
								</td>

								<td>
									<div class="form-group label-floating ">
										<label class="control-label">Đường dẫn hình ảnh</label>
										<input type="text" name="img" class="form-control" >
										<span class="material-input"></span>
									</div>

								</td>
							</tr>
						</table>
						<div class="text-right">
							<button type="submit" class="btn btn-success btn-sm">Thêm</button>
						</div>
						<br>
					</form>
				</div>

			</div>


		</div>
	</div>
</div>
<style type="text/css">
	.label-upload{
		cursor: pointer;
		z-index: 21;
	}

	.upload-photo {
		margin-top: -40px;
		margin-left: 44px;
		position: absolute;
		z-index: 20;
	}
	.form-group{
	}
</style>
<script type="text/javascript">
	tinymce.init({ selector:'#textarea_contact' });
	tinymce.init({ selector:'#textarea_benefit' });
	tinymce.init({ selector:'#textarea_about' });
</script>
@endsection
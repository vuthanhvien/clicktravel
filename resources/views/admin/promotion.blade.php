@extends('admin.layout')


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form action="/admin/promotion_email_send" action="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Gửi thông tin khuyến mãi</h4>
				</div>
				<div class="modal-body">
					<p>Mã khuyến mãi</p>
					<input type="text" name="key" class="form-control" placeholder="Mã khuyến mãi" required>
					<p>Nội dung gửi</p>
					<input type="text" name="content" class="form-control" placeholder="Nội dung gửi" required>
					<p>Danh sách người nhận</p>
					<input type="hidden" name="type" value="one">
					<div id="recive_list"></div>
					<div id="recive_list_input"></div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" >Gửi</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</form>

		</div>

	</div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form action="/admin/promotion_email_send" action="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Gửi thông tin khuyến mãi cho tất cả</h4>
				</div>
				<div class="modal-body">
					<p>Mã khuyến mãi</p>
					<input type="text" name="code" class="form-control" placeholder="Mã khuyến mãi" required>
					<p>Nội dung gửi</p>
					<input type="text" name="content" class="form-control" placeholder="Nội dung gửi" required>
					<p>Gửi cho tất cả</p>
					<input type="hidden" name="type" value="all">

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" >Gửi</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</form>

		</div>

	</div>
</div>


@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="blue">
					<div class="row">
						<div class="col-xs-5"><h4 class="title">Email đăng ký khuyến mãi</h4>
						</div>

					</div>
				</div>
				<div class="card-content table-responsive">
					<table class="table" id="table-khuyenmai">
						<thead class="text-primary">
							<th></th>
							<th>Tên</th>
							<th>Email</th>
							<th></th>
						</thead>
						<tbody>

						</tbody>
					</table>

				</div>
			</div>
			<span><a class="btn btn-success" id="button-send"   data-toggle="modal" data-target="#myModal" >Gửi email</a></span>
			<span><a class="btn btn-success" data-toggle="modal" data-target="#myModal2" onclick="selectAll()" >Gửi email tất cả</a></span>
		</div>
	</div>
	<br>
	<br>
			<div class="card">
			<form action="/admin/promotion_save" method="post">
				<div class="card-header" data-background-color="blue">
					<div class="row">
						<div class="col-xs-5"><h4 class="title">Mã khuyến mãi gửi tự động khi người dùng đăng ký</h4>
						<small>Nếu không có mã khuyến mãi, hệ thống sẽ không gửi mail</small>
						</div>

					</div>
				</div>
				<div class="card-content">
				{{ csrf_field() }}
					<label>Mã khuyến mãi</label>
					<input class="form-control" type="text" name="key" value="{{$promotion->key}}">
					<br>
					<label>Nội dung</label>
					<input class="form-control" type="text" name="email_used" value="{{$promotion->email_used}}">
					<br>
					<button class="btn btn-success">Lưu</button>
			</div>
			</form>
			</div>
</div>
<style type="text/css">
	.table td{
		font-size: 14px;
	}
	.mailcheck{
		height: 16px;
		width: 16px
	}
	#recive_list li{

	}
</style>
<script type="text/javascript">
var table = {};
	$(document).ready(function() {
		table = $('#table-khuyenmai').DataTable({
			"ajax": {
				"url" : "/admin/promotion_email_list",
			},
			"columns": [
			{ "data": "id" },
			{ "data": "name" },
			{ "data": "email" }
			],
			'select': {
				'style':    'os',
				'selector': 'td:first-child'
			},

			"columnDefs": [{
				'orderable': false,
				'targets':   0,
				'render': function (data, type, full, meta){
					return '<input type="checkbox" class="mailcheck" onclick="addData(&quot;'+full.name+'&quot;,&quot;'+full.email+'&quot;)"  >';
				}
			},
			{
				"targets": 3,
				'data' : null,
				'render': function (data, type, full, meta){
					return '<button type="button" class="btn btn-danger btn-small" onclick="deleteItem(&quot;'+full.name+'&quot;,&quot;'+full.email+'&quot;)"  >Xóa</button>';
				}
			} ],
			'order': [[ 1, 'asc' ]]
		});
	});

	var emails = [];

	function deleteItem(name, email){
		bootbox.confirm({
			message: "Bạn chắc chắn muốn xóa ?",
			buttons: {
				confirm: {
					label: 'Xóa',
					className: 'btn-danger'
				},
				cancel: {
					label: 'Không xóa',
					className: 'btn-default'
				}
			},
			callback: function (result) {
				if(result){
					$.ajax({
					  type: "GET",
					  url: '/admin/promotion_email_delete?email='+email,
					  success: function(res){
					  	console.log(res);
					  	table.ajax.reload();
					  },
					});
				}
			}
		});
	}
	function addData(name, email){
		var dup = false;
		var tmp = [];
		emails.map((item, index)=>{
			if(item){
				if(email == item.email){
					dup = true;
				}else{
					tmp.push(item);
				}
			}
		})
		emails = tmp;
		if(!dup){
			emails.push({
				'name' : name,
				'email': email
			});
		}
		if(emails.length > 0){
			var html = '<ul>';
			emails.map((item, index)=>{
				html += '<li><p>'+item.name+'('+item.email+')</p></li>';
			})
			html += '</ul>';

			var html2 = '';
			emails.map((item, index)=>{
				html += '<input type="hidden" name="email[]" value='+item.email+' />';
				html += '<input type="hidden" name="name[]" value='+item.name+' />';
			})

			$('#recive_list_input').html(html2);
			$('#recive_list').html(html);
			$('#button-send').html('Gửi email tới '+emails.length+' người')
		}else{
			$('#button-send').html('Gửi email')
		}

	}
</script>
@endsection
<!-- Trigger the modal with a button -->

@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row">

		<div class="card">
			<div class="card-header" data-background-color="blue" >
				<h4 class="title">Giá dịch vụ các hãng bay</h4>
			</div>
			<div class="card-content " id="price" style="padding-bottom: 0;padding-top: 0">
				<br>
				<form action="/admin/location/save">
				{{ csrf_field() }}
					<table class="table" id="table">
						<thead>
							<tr>
								<th>Mã sân bay</th>
								<th>Tên sân bay</th>
								<th>Thành phố</th>
								<th>Đất nước</th>
								<th>Thao tác</th>
							</tr>
						</thead>
					</table>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="key" class="form-control" placeholder="Mã sân bay">
							<input type="text" name="name" class="form-control" placeholder="Tên sân bay">
						</div>
						<div class="col-md-6">
							<input type="text" name="city" class="form-control" placeholder="Thành phố" >
							<input type="text" name="country" class="form-control"  placeholder="Đất nước">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<button type="button" class="btn btn-success btn-sm" onclick="send()">Thêm / sửa</button>
						</div>
					</div>
				</form>
			</div>

		</div>


	</div>
</div>
</div>
<script type="text/javascript">
var table = null;
	$(document).ready(function() {
		table = $('#table').DataTable({
			"ajax": {
				"url" : "/search_point?type=table",
			},
			"columns": [
	            { "data": "key" },
	            { "data": "name" },
	            { "data": "city" },
	            { "data": "country" },
        	],
        	"columnDefs": [ {
	            "targets": 4,
	            "data": null,
	            "defaultContent": "<a type='button' >Sửa</a>"
	        } ]
		});
		$('#table tbody').on( 'click', 'a', function () {
	        var data = table.row( $(this).parents('tr') ).data();
	        edit(data['key'],data['name'],data['city'],data['country']);
	    } );

	} );
	function edit(key, name, city, country){
		$('input[name=key').val(key);
		$('input[name=name').val(name);
		$('input[name=city').val(city);
		$('input[name=country').val(country);
	}
	function send(){
		var data = {};
		data['_token'] = $('input[name="_token"]').val();
		data['key'] = $('input[name=key').val();
		data['name'] = $('input[name=name').val();
		data['city'] = $('input[name=city').val();
		data['country'] = $('input[name=country').val();

		$.ajax({
			type: "POST",
  			url: '/admin/location/save',
  			data: data,
  			success: function(res){
  				var res = JSON.parse(res);
  				if(res.success){
  					table.ajax.reload();
  					$('input[name=key').val('');
					$('input[name=name').val('');
					$('input[name=city').val('');
					$('input[name=country').val('');
  					// alert('thành công, reload lại page để thấy cập nhật');
  				}

  			},
		})
	}

</script>
@endsection
@extends('admin.layout')

@section('content')
<style type="text/css">
	.detail,
	.title {
		background: white;
		border: 1px solid #ccc;
		padding: 15px 15px 15px 25px;
		border-radius: 5px;
	}
	input,
	select{
		width: 100%;
		height: 50px;
		color: #555;
		border: 1px solid #ccc;
		border-radius: 3px;
		padding-left: 15px;
	}
	label{
		font-weight: bold;
	}
</style>
<div class="container-fluid">
	<form action="/admin/content/save" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$content->id}}">
		<div>
		<label>Tên</label>
		<input type="" name="title" placeholder="Tên" value="{{$content->title}}">
		</div>
		<br>
		<div>
		<label>Đường dẫn</label>
		<input type="" name="key_config" placeholder="Đường dẫn" value="{{$content->key_config}}">
		</div>

		<textarea id="content_text" name="value">
			{{$content->value}}
		</textarea>
		
		<div class="text-right">
			<button type="submit" class="btn btn-success">Lưu</button>
		</div>
		
	</form>
</div>
<script type="text/javascript">
	tinymce.init({ selector:'#content_text' });

	
</script>
@endsection
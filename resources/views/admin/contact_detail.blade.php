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
	<form action="/admin/contact/save" method="POST">
                    {{ csrf_field() }}
		<input type="hidden" name="id" value="{{$contact->id}}">
		<input type="hidden" name="email" value="{{$contact->email}}">
		<div class="title">
			<div class="row">
				<div class="col-md-12 ">
					<h4><strong>Nội dung của {{$contact->name}} </strong>  < {{$contact->email}} > <small>{{$contact->created_at}}</small></h4>
				</div>
			</div>
		</div>
		<br>
		<div class="detail">
		@if( $contact->transition_id)
			<div class="fight-detail">
				{{$contact->transition_id}}
			</div>
			<hr>
		@endif
			<div class="row">
				<div class="col-md-2 text-right"><label>{{$contact->name}}</label></div>
				<div class="col-md-8 ">
				<div  style="border: 1px solid #ccc; min-height: 100px; padding-top: 15px; padding-left: 15px; border-radius: 5px;">
					<label>Nội dung</label>

					<p>{{$contact->memo}}</p>
				</div>
				</div>
				
			</div>
			
			<br>
			<div class="row">
				<div class="col-md-8 col-md-offset-2"  >
					<textarea rows="5" name="content" style="border: 1px solid #ccc; min-height: 100px; padding-top: 15px; width: 100%; padding-left: 15px;" placeholder="Hãy nhập nội dung, nội dung này sẽ được gửi tới email của {{$contact->name}}"></textarea>					
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col-md-10 text-right">
					<button class="btn btn-success">Gửi</button>
				</div>
			</div>

		</div>
	</form>
</div>
@endsection
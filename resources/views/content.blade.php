@extends('layouts.app')

@section('title')
	{{$title}}
@endsection
@section('content')

<div class="container-fluid" style="background-color: #038885">
<div class="container" style="padding-top: 10px">
	<p>
		<a href="/" style="color: white">Trang chủ</a>
		<i class="fa fa-chevron-right" style="color: white"></i>
		<span style="color: white">{{$title}}</span>
	</p>
</div>
</div>
<div class="container" style="padding-top: 10px">
	<div class="row">
		<div class="col-md-9 ">
			{!! $content !!}
		</div>
		<div class="col-md-3">
			<div class="IBESearchForm"></div>
			
		</div>
	</div>
</div>
<style type="text/css">
	.IBESearchBoxHeader{
		background-color: #038885 !important;
		    height: 50px !important;
    padding: 9px;
	}
</style>
@component('component.footer')
@endcomponent

@endsection


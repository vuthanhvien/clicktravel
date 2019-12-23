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
		<div class="col-md-8 ">
			{!! $content !!}
		</div>
		<div class="col-md-4">
			<div id='dtc-search'></div>
			
		</div>
	</div>
</div>

<style>
.dtc-container.dtc-mob{
	display:none;
}</style>
 <script type='text/javascript'> 

var dtc_search = {
path: ('https:' == document.location.protocol ? 'https://' : 

'http://') + 'plugin.datacom.vn', productKey: 'fzvuprpl2m5ulsy', 

languageCode: 'vi', 

       };

       (function () {

var dtc_head = document.getElementsByTagName('head')[0]; var dtc_script = document.createElement('script'); dtc_script.async = true;
dtc_script.src = 

dtc_search.path.concat('/Resources/Static/Js/plugin.js?v=' + (new Date().getTime())); 

dtc_script.charset = 'UTF-8'; 

dtc_head.appendChild(dtc_script); })(); 

</script> 

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


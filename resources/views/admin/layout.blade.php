<!doctype html>
<html lang="en">
	@component('admin.component.head')
	@endcomponent

<body>

	<div class="wrapper">
	@component('admin.component.sidebar')
	@endcomponent


	   <div class="main-panel">
			
	   		@component('admin.component.nav')
			@endcomponent

	        <div class="content" style="margin-top: 0px;">
	        @yield('content')
	        </div>
	    </div>
	</div>
</body>

	@component('admin.component.footer')
	@endcomponent

</html>

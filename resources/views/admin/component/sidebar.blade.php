<div class="sidebar" data-color="blue" data-image="/assets/img/sidebar-1.jpg">
	<!--
	Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

	Tip 2: you can also add an image using data-image tag
-->

<div class="logo" style="padding: 0">
	<a href="/admin" class="simple-text" style="height: 70px">
		<img src="/img/clicktravel-logo.png" height="60">
	</a>
</div>

<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="{{ request()->is('admin') ? 'active' : '' }}">
			<a href="/admin">
				<i class="material-icons">dashboard</i>
				<p>Bảng điều khiển</p>
			</a>
		</li>


		<li class="{{ request()->is('admin/ticket*') ? 'active' : '' }}">
			<a href="/admin/ticket">
				<i class="material-icons">receipt</i>
				<p>Vé</p>
			</a>
		</li>
		@if(Auth::user()->role == '1' || Auth::user()->role == '3')
		<li  class="{{ request()->is('admin/user*') ? 'active' : '' }}">
			<a href="/admin/user">
				<i class="material-icons">person</i>
				<p>Người dùng</p>
			</a>
		</li>
		@else
		<li  class="{{ request()->is('admin/profile*') ? 'active' : '' }}">
			<a href="/admin/profile">
				<i class="material-icons">person</i>
				<p>Tài khoản</p>
			</a>
		</li>
		@endif

		@if(Auth::user()->role == '1')
		<li class="{{ request()->is('admin/agency_register*') ? 'active' : '' }}">
			<a href="/admin/agency_register">
				<i class="material-icons">face</i>
				<p>Đại lý cấp 2 đăng ký</p>
			</a>
		</li>

		<li class="{{ request()->is('admin/promotion*') ? 'active' : '' }}">
			<a href="/admin/promotion">
				<i class="material-icons">card_giftcard</i>
				<p>Mã khuyến mãi</p>
			</a>
		</li>
		@endif
		@if(Auth::user()->role == '1')
		<li class="{{ request()->is('admin/setting') ? 'active' : '' }}">
			<a href="/admin/setting">
				<i class="material-icons">build</i>
				<p>Cài đặt</p>
			</a>
		</li>
		<li class="{{ request()->is('admin/location') ? 'active' : '' }}">
			<a href="/admin/location">
				<i class="material-icons">flight takeoff</i>
				<p>Sân bay</p>
			</a>
		</li>

		@endif
		<li class="active-pro">
			<a href="/">
				<i class="material-icons">open_in_new</i>
				<p>Trang chính</p>
			</a>
		</li>

	</ul>
</div>
</div>
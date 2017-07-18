<div class="sidebar" data-color="blue" data-image="/assets/img/sidebar-1.jpg">
	<!--
	Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

	Tip 2: you can also add an image using data-image tag
-->

<div class="logo" style="padding: 0">
	<a href="/admin" class="simple-text">
		<img src="/img/clicktravel-logo.png" width="110">
	</a>
</div>

<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="{{ Request::path() ==  'admin' ? 'active' : '' }}">
			<a href="/admin">
				<i class="material-icons">dashboard</i>
				<p>Bảng điều khiển</p>
			</a>
			</li>
			<li  class="{{ Request::path() ==  'admin/user' ? 'active' : '' }}">
				<a href="/admin/user">
					<i class="material-icons">person</i>
					<p>Người dùng</p>
				</a>
			</li>
			<li class="{{ Request::path() ==  'admin/agency_register' || Request::path() ==  'admin/agency_register/{id}' ? 'active' : '' }}">
				<a href="/admin/agency_register">
					<i class="material-icons">face</i>
					<p>Đại lý cấp 2 đăng ký</p>
				</a>
			</li>
			<li class="{{ Request::path() ==  'admin/ticket' || Request::path() ==  'admin/ticket/{id}' ? 'active' : '' }}">
				<a href="/admin/ticket">
					<i class="material-icons">receipt</i>
					<p>Vé</p>
				</a>
			</li>

			<li class="{{ Request::path() ==  'admin/contact' || Request::path() ==  'admin/contact/{id}' ? 'active' : '' }}">
				<a href="/admin/contact">
					<i class="material-icons">perm_phone_msg</i>
					<p>Liên hệ</p>
				</a>
			</li>
			<li class="{{ Request::path() ==  'admin/setting' ? 'active' : '' }}">
				<a href="/admin/setting">
					<i class="material-icons">build</i>
					<p>Cài đặt</p>
				</a>
			</li>
			<li class="active-pro">
				<a href="/">
					<i class="material-icons">open_in_new</i>
					<p>Trang chính</p>
				</a>
			</li>

		</ul>
	</div>
</div>
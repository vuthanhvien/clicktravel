<div class="sidebar" data-color="blue" data-image="/assets/img/sidebar-1.jpg">
	<!--
	Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

	Tip 2: you can also add an image using data-image tag
	-->

	<div class="logo">
		<a href="/admin" class="simple-text">
			Clicktravel.vn
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
			<li class="{{ Request::path() ==  'admin/notification' ? 'active' : '' }}">
				<a href="/admin/notification">
					<i class="material-icons text-gray">notifications</i>
					<p>Thông báo</p>
				</a>
			</li>
			<li  class="{{ Request::path() ==  'admin/user' ? 'active' : '' }}">
				<a href="/admin/user">
					<i class="material-icons">person</i>
					<p>Nhân viên</p>
				</a>
			</li>
			<li class="{{ Request::path() ==  'admin/ticket' ? 'active' : '' }}">
				<a href="/admin/ticket">
					<i class="material-icons">receipt</i>
					<p>Vé</p>
				</a>
			</li>
			<li class="{{ Request::path() ==  'admin/passenger' ? 'active' : '' }}">
				<a href="/admin/passenger">
					<i class="material-icons">face</i>
					<p>Khách hàng</p>
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
			
			<!-- <li class="active-pro">
				<a href="upgrade.html">
					<i class="material-icons">unarchive</i>
					<p>Upgrade to PRO</p>
				</a>
			</li> -->
		</ul>
	</div>
</div>
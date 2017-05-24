<div class="admin-login-box">
	<a class="logo" style="left: 0;" href="{{ url('admin/') }}">
		<span style="font-size: 22px;">Message</span>
	</a>
	<div class="admin-side-toggle">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</div>
	<div class="admin-side-full">
		<i class="fa fa-life-bouy" aria-hidden="true"></i>
	</div>
</div>
<ul class="layui-nav admin-header-item">
	<li class="layui-nav-item">
		<a href="javascript:;" class="admin-header-user">
			<img src="images/0.jpg" />
			<span>beginner</span>
		</a>
		<dl class="layui-nav-child">
			<dd>
				<a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 个人信息</a>
			</dd>
			<dd>
				<a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 设置</a>
			</dd>
			<dd id="lock">
				<a href="javascript:;">
					<i class="fa fa-lock" aria-hidden="true" style="padding-right: 3px;padding-left: 1px;"></i> 锁屏 (Alt+L)
				</a>
			</dd>
			<dd>
				<a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
			</dd>
		</dl>
	</li>
</ul>
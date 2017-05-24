<!DOCTYPE html>
<html>

@section('htmlheader')
	@include('admin.layouts.partials.htmlheader')
@show

<body>
<div class="layui-layout layui-layout-admin">
	<div class="layui-header header header-demo">
		<!-- 头部区域（可配合layui已有的水平导航） -->
		<div class="layui-main">
			@include('admin.layouts.partials.header')
		</div>
	</div>
	<div class="layui-side layui-bg-black" id="admin-side">
		@include('admin.layouts.partials.sidebar')
	</div>
	<div class="layui-body content-demo" id="admin-body">
		<!-- 内容主体区域 -->
		<section class="content">
			@yield('content')
		</section>
	</div>
	<div class="layui-footer footer footer-demo" id="admin-footer">
		<!-- 底部固定区域 -->
		@include('admin.layouts.partials.footer')
	</div>
</div>

@section('scripts')
	@include('admin.layouts.partials.scripts')
@show
</body>
</html>
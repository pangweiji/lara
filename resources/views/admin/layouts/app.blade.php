<!DOCTYPE html>
<html>

@section('htmlheader')
	@include('admin.layouts.partials.htmlheader')
@show

<body>
<div class="layui-layout layui-layout-admin">
	<div class="layui-header">
		<!-- 头部区域（可配合layui已有的水平导航） -->
		<div class="layui-main">
			<a class="logo" style="left: 0;" href="{{ url('/admin') }}">
				<span style="font-size: 22px;">Message</span>
			</a>
		</div>
	</div>
	<div class="layui-side layui-bg-black">
		@include('admin.layouts.partials.sidebar')
	</div>
	<div class="layui-body">
		<!-- 内容主体区域 -->
		<section class="content">
			@yield('content')
		</section>
	</div>
	<div class="layui-footer">
		<!-- 底部固定区域 -->
		@include('admin.layouts.partials.footer')
	</div>
</div>

@section('scripts')
	@include('admin.layouts.partials.scripts')
@show
</body>
</html>
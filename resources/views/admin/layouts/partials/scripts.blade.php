<!-- JS -->

<script src="{{ asset('common/plugins/layui/layui.js') }}"></script>

<script>
	//导航 依赖 element 模块
	layui.use('element', function(){
		var element = layui.element();
	});
</script>

@stack('scripts')
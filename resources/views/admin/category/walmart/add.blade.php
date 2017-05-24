@extends('admin.layouts.app')

@section('content')
	<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
		<legend>添加分类</legend>
	</fieldset>
	<div class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">分类名称:</label>
			<div class="layui-input-block">
				<input type="text" name="cate_name" lay-verify="cate_name" autocomplete="off" placeholder="请输入分类名称" class="layui-input" style="width: 50%;">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">帐号:</label>
			<div class="layui-input-block">
				<input type="checkbox" name="account" value="pang379415825" title="pang379415825" lay-skin="primary">
				<input type="checkbox" name="account" value="test1" title="test1" lay-skin="primary"> 
				<input type="checkbox" name="account" value="test2" title="test2" lay-skin="primary"> 
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">规则:</label>
			<div class="layui-input-block">
				<input type="checkbox" name="rules" value="a" title="a" lay-skin="primary">
				<input type="checkbox" name="rules" value="b" title="b" lay-skin="primary"> 
				<input type="checkbox" name="rules" value="c" title="c" lay-skin="primary"> 
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" id="submit" name="submit" value="submit" lay-submit="" lay-filter="demo1">提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
<script>
	layui.use('form', function(){
		var form = layui.form();

		//表单验证
		form.verify({
			cate_name: function(value) {
				if(value.length < 5) {
					return '标题至少得5个字符啊';
				}
			},
			content: function(value) {
				layedit.sync(editIndex);
			}
		});

		//监听提交
		form.on('submit(demo1)', function(data) {
			var account = new Array();
			$('input[name="account"]:checked').each(function () {
				account.push($(this).val());
			});
			var rules = new Array();
			$('input[name="rules"]:checked').each(function () {
				rules.push($(this).val());
			});
			$.ajax({
				url: '{{ url("admin/walmartcate_add") }}',
				type: 'POST',
				dataType: 'json',
				data: {_token: '{{csrf_token()}}', submit: $('#submit').val(), cate_name: data.field.cate_name, account: account, rules: rules},
				success:function (data) {
					console.log(data);
				}
			});
		});
	});
</script>
@endpush

@extends('admin.layouts.app')

@section('content')
	<blockquote class="layui-elem-quote">
		<a href="#" class="layui-btn layui-btn-small" onclick="javascript:history.back(-1);">
			<i class="layui-icon">&#xe608;</i> 返回
		</a>
	</blockquote>
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
				@foreach($accounts as $ac)
					<input type="checkbox" name="account" value="{{ $ac->account }}" title="{{ $ac->account }}" lay-skin="primary"> 
				@endforeach
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">规则:</label>
			<div class="layui-input-block">
				@foreach($rules as $r)
					<input type="checkbox" name="rules" value="{{ $r->id }}" title="{{ $r->rule }}" lay-skin="primary">
				@endforeach
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
				if(value.length < 1) {
					return '标题不能为空！';
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

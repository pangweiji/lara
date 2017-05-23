@extends('admin.layouts.app')

@section('content')
	<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
		<legend>添加分类</legend>
	</fieldset>
	<form class="layui-form" action="">
		<div class="layui-form-item">
			<label class="layui-form-label">分类名称:</label>
			<div class="layui-input-block">
				<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" style="width: 50%;">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">帐号:</label>
			<div class="layui-input-block">
				<div class="layui-input-block">
					<input type="checkbox" name="like[write]" title="写作">
					<input type="checkbox" name="like[read]" title="阅读" checked="">
					<input type="checkbox" name="like[game]" title="游戏">
				</div>
			</div>
		</div>
	</form>
@endsection('content')
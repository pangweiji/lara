@extends('admin.layouts.app')

@section('content')
	<blockquote class="layui-elem-quote">
		<a href="{{ url('admin/walmartlp_acManagement') }}" class="layui-btn layui-btn-small">
			<i class="layui-icon">&#xe608;</i> 帐户管理
		</a>
		所属部门：
		<select name="dept">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
	</blockquote>
	<fieldset class="layui-elem-field">
		<legend>用户管理</legend>
		<div class="layui-field-box layui-form">
			<table class="layui-table admin-table">
				<thead>
					<tr>
						<th width="12%">登录名</th>
						<th width="10%">用户名</th>
						<th width="10%">岗位</th>
						<th>拥有文件夹</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody id="content">
					<tr>
						<td>pangweiji@sailvan.com</td>
						<td>庞伟基</td>
						<td>PHP</td>
						<td>【test】</td>
						<td>
							<a class="layui-btn layui-btn-small" href="#">修改</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</fieldset>
@endsection
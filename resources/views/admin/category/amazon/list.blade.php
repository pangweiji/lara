@extends('admin.layouts.app')

@section('content')
	<blockquote class="layui-elem-quote">
		<a href="javascript:;" class="layui-btn layui-btn-small" id="add">
			<i class="layui-icon">&#xe608;</i> 添加分类
		</a>
		<a href="javascript:;" class="layui-btn layui-btn-small" id="search">
			<i class="layui-icon">&#xe615;</i> 搜索
		</a>
	</blockquote>
	<fieldset class="layui-elem-field">
		<legend>分类列表</legend>
		<div class="layui-field-box layui-form">
			<table class="layui-table admin-table">
				<thead>
					<tr>
						<th>编号</th>
						<th>分类名</th>
						<th>已回复</th>
						<th>未回复</th>
						<th>规则</th>
						<th>帐号</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody id="content">
					@foreach($list as $v)
						<tr>
							<td>{{ $v->id }}</td>
							<td>{{ $v->category_name }}</td>
							<td>12</td>
							<td>13</td>
							<td>a,s</td>
							<td>pang</td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</fieldset>
@endsection('content')
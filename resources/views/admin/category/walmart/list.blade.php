@extends('admin.layouts.app')

@section('content')
	<blockquote class="layui-elem-quote">
		<a href="{{ url('admin/walmartcate_add') }}" class="layui-btn layui-btn-small" id="add">
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
						<th width='80px'>编号</th>
						<th width='150px'>分类名</th>
						<th width='60px'>已回复</th>
						<th width='60px'>未回复</th>
						<th>帐号</th>
						<th>规则</th>
						<th width='105px'>操作</th>
					</tr>
				</thead>
				<tbody id="content">
					@foreach($list as $v)
						<tr>
							<td>{{ $v['id'] }}</td>
							<td>{{ $v['category_name'] }}</td>
							<td><font color="#01AAED">1200000</font></td>
							<td><font color="#FF5722">1200000</font></td>
							<td>{{ $v['account'] }}</td>
							<td>{{ $v['rules'] }}</td>
							<td>
								<button class="layui-btn layui-btn-small">修改</button>
								<button class="layui-btn layui-btn-small layui-btn-danger">删除</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</fieldset>
@endsection
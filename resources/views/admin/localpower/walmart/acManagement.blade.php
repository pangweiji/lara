@extends('admin.layouts.app')

@section('content')
	<blockquote class="layui-elem-quote">
		<button class="layui-btn layui-btn-small" onclick="add()">
			<i class="layui-icon">&#xe608;</i> 添加帐号
		</button>
		<a href="#" class="layui-btn layui-btn-small" onclick="javascript:history.back(-1);">
			<i class="layui-icon">&#xe608;</i> 返回
		</a>
	</blockquote>
	<fieldset class="layui-elem-field">
		<legend>帐号管理</legend>
		<div class="layui-field-box layui-form">
			<table class="layui-table admin-table">
				<thead>
					<tr>
						<th>编号</th>
						<th>所属帐号</th>
						<th>Gmail邮箱</th>
						<th width="105px">操作</th>
					</tr>
				</thead>
				<tbody id="content">
					<tr>
						<td>1</td>
						<td>test</td>
						<td>test@gmail.com</td>
						<td>
							<a class="layui-btn layui-btn-small" href="#">修改</a>
							<a class="layui-btn layui-btn-small" href="#">删除</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</fieldset>
@endsection

@push('scripts')
	<script>
		function add() {
			$.ajax({
				url: '{{ url("admin/walmartlp_addAccount") }}',
				type: 'POST',
				dataType: 'json',
				data: {_token: '{{csrf_token()}}', param1: 'value1'},
				success: function (data) {
					console.log(data);
				}
			});
		}
	</script>
@endpush
@extends('admin.layouts.app')

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/walmart/msg.css') }}">
@endpush

@section('content')
	<blockquote class="layui-elem-quote">
		<a href="javascript:;" class="layui-btn layui-btn-small" id="search">
			<i class="layui-icon">&#xe615;</i> 搜索
		</a>
	</blockquote>
	<fieldset class="layui-elem-field">
		<legend>邮件列表</legend>
		<div class="layui-field-box layui-form">
			<table class="layui-table admin-table msg-table">
				<thead>
					<tr>
						<th width='5px'></th>
						<th width='80px'>邮件编号</th>
						<th width='60px'>店铺帐号</th>
						<th width='60px'>发件人</th>
						<th>发送邮箱</th>
						<th>主题</th>
						<th>回复状态</th>
						<th>邮件发送时间</th>
						<th>进入系统时间</th>
						<th>回复时间</th>
						<th>回复人</th>
						<th>回复周期</th>
						<th>收件夹</th>
					</tr>
				</thead>
				<tbody id="content">
					@foreach($msg_list as $ml)
						<tr>
							<td><input type="checkbox" name=""></td>
							<td>{{ $ml->id }}</td>
							<td>{{ $ml->account }}</td>
							<td>{{ $ml->sendname }}</td>
							<td>{{ $ml->sendid }}</td>
							<td>{{ $ml->subject }}</td>
							<td>
								@php
									switch ($ml->status) {
										case 0:
											echo '未回复';
											break;
										case 1:
											echo '回复中';
											break;
										case 2:
											echo '已回复';
											break;
										case 3:
											echo '标记已回复';
											break;
										case 4:
											echo '回复失败';
											break;
										default :
											echo 'fail';
											break;
									}
								@endphp
							</td>
							<td>{{ date('Y-m-d H-i-s', $ml->sendtime) }}</td>
							<td>{{ date('Y-m-d H-i-s', $ml->receivetimestamp) }}</td>
							<td>{{ date('Y-m-d H-i-s', $ml->replytime or '') }}</td>
							<td>{{ $ml->replyuser_id }}</td>
							<td>0天</td>
							<td>{{ $ml->classid }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</fieldset>
@endsection
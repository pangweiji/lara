<div class="layui-side-scroll">
			<ul class="layui-nav layui-nav-tree" lay-filter="test">
			<!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
			  <li class="layui-nav-item">
				<a href="javascript:;">收件箱管理</a>
				<dl class="layui-nav-child">
					<dd><a href="{{ url('admin/ebaycate_list') }}">Ebay</a></dd>
					<dd><a href="{{ url('admin/amazoncate_list') }}">Amazon</a></dd>
					<dd><a href="{{ url('admin/alicate_list') }}">Ali</a></dd>
					<dd><a href="{{ url('admin/wishcate_list') }}">Wish</a></dd>
					<dd><a href="{{ url('admin/walmartcate_list') }}">Walmart</a></dd>
				</dl>
			  </li>
			  <li class="layui-nav-item">
				<a href="javascript:;">收件箱</a>
				<dl class="layui-nav-child">
					<dd><a href="{{ url('admin/ebaymsg_list') }}">Ebay</a></dd>
					<dd><a href="{{ url('admin/amazonmsg_list') }}">Amazon</a></dd>
					<dd><a href="{{ url('admin/alimsg_list') }}">Ali</a></dd>
					<dd><a href="{{ url('admin/wishmsg_list') }}">Wish</a></dd>
					<dd><a href="{{ url('admin/walmartmsg_list') }}">Walmart</a></dd>
				</dl>
			  </li>
			  <li class="layui-nav-item">
				<a href="javascript:;">模板管理</a>
				<dl class="layui-nav-child">
					<dd><a href="{{ url('admin/ebaytpl_list') }}">Ebay</a></dd>
					<dd><a href="{{ url('admin/amazontpl_list') }}">Amazon</a></dd>
					<dd><a href="{{ url('admin/alitpl_list') }}">Ali</a></dd>
					<dd><a href="{{ url('admin/wishtpl_list') }}">Wish</a></dd>
					<dd><a href="{{ url('admin/walmarttpl_list') }}">Walmart</a></dd>
				</dl>
			  </li>
			  <li class="layui-nav-item">
				<a href="javascript:;">统计报表</a>
				<dl class="layui-nav-child">
					<dd><a href="{{ url('admin/ebaystat_list') }}">Ebay</a></dd>
					<dd><a href="{{ url('admin/ebaytpl_list') }}">Amazon</a></dd>
					<dd><a href="{{ url('admin/ebaytpl_list') }}">Ali</a></dd>
					<dd><a href="{{ url('admin/ebaytpl_list') }}">Wish</a></dd>
					<dd><a href="{{ url('admin/ebaytpl_list') }}">Walmart</a></dd>
				</dl>
			  </li>
			  <li class="layui-nav-item">
				<a href="javascript:;">授权管理</a>
				<dl class="layui-nav-child">
					<dd><a href="javascript:;">Gmail管理</a></dd>
					<dd><a href="javascript:;">Ebay</a></dd>
					<dd><a href="javascript:;">Amazon</a></dd>
					<dd><a href="javascript:;">Ali</a></dd>
					<dd><a href="javascript:;">Wish</a></dd>
					<dd><a href="javascript:;">Walmart</a></dd>
				</dl>
			  </li>
			  <li class="layui-nav-item"><a href="">产品</a></li>
			  <li class="layui-nav-item"><a href="">大数据</a></li>	
			</ul>
		</div>
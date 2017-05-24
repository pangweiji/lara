<!-- JS -->

<script src="{{ asset('common/plugins/layui/layui.js') }}"></script>

<script>
	layui.use(['element', 'layer'], function () {
		$ = layui.jquery;
		layer = layui.layer;
		
		var element = layui.element();

		$('.admin-side-toggle').on('click', function () {
			var sideWidth = $('#admin-side').width();
			if (sideWidth === 200) {
				$('#admin-body').animate({
					left: '0'
				}); //admin-footer
				$('#admin-footer').animate({
					left: '0'
				});
				$('#admin-side').animate({
					width: '0'
				});
			} else {
				$('#admin-body').animate({
					left: '200px'
				});
				$('#admin-footer').animate({
					left: '200px'
				});
				$('#admin-side').animate({
					width: '200px'
				});
			}
		});
		$('.admin-side-full').on('click', function () {
			var docElm = document.documentElement;
			//W3C  
			if (docElm.requestFullscreen) {
				docElm.requestFullscreen();
			}
			//FireFox  
			else if (docElm.mozRequestFullScreen) {
				docElm.mozRequestFullScreen();
			}
			//Chrome等  
			else if (docElm.webkitRequestFullScreen) {
				docElm.webkitRequestFullScreen();
			}
			//IE11
			else if (elem.msRequestFullscreen) {
				elem.msRequestFullscreen();
			}
			layer.msg('按Esc即可退出全屏');
		});
	})
</script>

@stack('scripts')
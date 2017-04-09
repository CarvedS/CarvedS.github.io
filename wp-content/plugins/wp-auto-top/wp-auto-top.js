/**
 * Plugin Name: wp auto top
 * Plugin URI: http://wordpress.org/plugins/wp-auto-top/
 * Description: 博客侧边滑动，返回顶部，查看评论的小工具
 * Version: 2.92
 * Author: Carlos
 * Author URI: http://weibo.com/joychaocc
 */
jQuery(document).ready(function($) {
	_body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $("html") : $("body")) : $("html,body");
	$("#wp-auto-top-top").click(function() {
		_body.animate({
			scrollTop: 0
		}, 400)
	});
	$("#wp-auto-top-bottom").click(function() {
		_body.animate({
			scrollTop: $(document).height()
		}, 400)
	});
	$("#wp-auto-top-comment").click(function() {
		if (typeof commentPositionId == 'undefined' || $(commentPositionId).length < 1) commentPositionId = '#comments';
		if (typeof commentPositionId == 'undefined') commentPositionId = '[name="comments"]';
		_body.animate({
			scrollTop: $(commentPositionId).offset().top
		}, 400)
	})
});
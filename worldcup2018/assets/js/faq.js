window.addEventListener('load', function () {
	if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
		$('#smartphone').show();
		$('#metaMask').hide();
	} else {
		$('#metaMask').show();
		$('#smartphone').hide();
	}
})
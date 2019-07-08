$('.paralax').on('mousemove', (e) => {
	const x = e.pageX / $(window).width();
	const y = e.pageY / $(window).height();

	$('.paralax-bg').css(
		'transform',
		'translate(-' + x * 30 + 'px, -' + y * 30 + 'px)'
	);
});
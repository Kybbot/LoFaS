document.body.onload = function() {

	setTimeout(function(){
		var preloader = document.getElementById('preloader');
		if( !preloader.classList.contains('preloader__done'))
		{
			preloader.classList.add('preloader__done');
			document.body.style.overflowY = "visible";
		}
	}, 1000);

	filmFilter_data();

	function filmFilter_data() {
		let action = 'fetch_data';
		let date = get_filter('sort-date');
		let point = get_filter('sort-point');
		let time = get_filter('sort-time');
		let flag = get_filter('sort-flag');
		$.ajax({
				url:"php/film-sorting.php",
				method:"POST",
				data:{action:action, date:date, point:point, time:time, flag:flag},
				success:function(data){
					$('.film-filter_data').html(data);
				}
		});
	}

	function get_filter(class_name){
		var filter = [];
		$('.'+class_name+':selected').each(function(){
			filter.push($(this).val());
		});
		return filter;
	}

	$('.sorting').on('change', function() {
		filmFilter_data();
	});


	serialFilter_data();

	function serialFilter_data() {
		let action = 'fetch_data';
		let date = get_filter('sort-date');
		let point = get_filter('sort-point');
		let time = get_filter('sort-time');
		let flag = get_filter('sort-flag');
		$.ajax({
				url:"php/serial-sorting.php",
				method:"POST",
				data:{action:action, date:date, point:point, time:time, flag:flag},
				success:function(data){
					$('.serial-filter_data').html(data);
				}
		});
	}

	function get_filter(class_name){
		var filter = [];
		$('.'+class_name+':selected').each(function(){
			filter.push($(this).val());
		});
		return filter;
	}

	$('.sorting').on('change', function() {
		serialFilter_data();
	});

}
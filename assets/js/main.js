
// Add your nice, nice JavaScript here
// And minify! Time to check out Grunt or Gulp - what else to you have to do this weekend?

$(document).ready( function() {

	// Put some nice JavaScript in here.
	var $nav_main = $('#nav-main'),
		$nav_link = $('#nav-open-link');

	$nav_link.click( function() {
		console.log('clicked!');
		$nav_main.toggleClass('active');
		$nav_link.toggleClass('active');
		return false;
	});

	// $('#myModal').on('shown.bs.modal', function () {
	//   	// $('#myInput').focus();
	// 	console.log(src);
	// });

	var $thumb = $('.targetImg');
	var $result = $('#resultImg');

	$thumb.each( function() {
		$(this).on( 'click', function() {
			var src = $(this).attr('src');
			$result.attr('src', src);
			console.log(src);
		});
	});

	

});


$(document).ready(function() {
    	/* This is basic - uses default settings */
	
	$("a.our_work_example").fancybox();
	
	/* Using custom settings */
	
	$("a.our_work_example").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
    });
    
    
})


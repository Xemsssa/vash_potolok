$(document).ready(function() {
    
    	/* This is basic - uses default settings */
    // $("a.our_work_example").fancybox();
	// $("a.our_work_example").attr('rel', 'group1').fancybox();
	
	/* Using custom settings */
	
	$("a.our_work_example").fancybox({
        'hideOnContentClick':   true,
        // 'hideOnContentClick':	false,
        'titleShow':            false,
        'showNavArrows':        true,
        'enableEscapeButton':   true
	});

	/* Apply fancybox to multiple items */
	
	// $("a.our_work_example").fancybox({
	// 	'transitionIn'	:	'elastic',
	// 	'transitionOut'	:	'elastic',
	// 	'speedIn'		:	600, 
	// 	'speedOut'		:	200, 
	// 	'overlayShow'	:	false
    // });
    
    
})


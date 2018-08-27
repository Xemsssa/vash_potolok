$(document).ready(function() {
	
	$("a.our_work_example").fancybox({
        'hideOnContentClick':   true,
        // 'hideOnContentClick':	false,
        'titleShow':            false,
        'showNavArrows':        true,
        'enableEscapeButton':   true
	});

	$("#request").click(function() {
		$.fancybox({
			type: "inline",
			content: "#request_form", 
			'hideOnContentClick': false,
			'enableEscapeButton': false,
			'overlayShow': true,
			'autoScale': true,
			'autoDimensions': true,
			'autoSize': true,
			'showCloseButton' : false,
			afterShow : function() {
				$('.fancybox-skin').append('<a title="Close" class="fancybox-item fancybox-close" href="javascript:jQuery.fancybox.close();"></a>');
   			}
     

		});
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


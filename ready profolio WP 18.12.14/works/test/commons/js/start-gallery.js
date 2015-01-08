$(function(){
	  $(window).load(function() { // Run when everything is loaded (especially images)
	  $('#myExample').theatre({ //Initialize theatre
	  // For comlete list of possible settings visit http://www.webdevelopers.eu/shop/5/doc/index#wdx_Settings
	  'effect': '3d', // css3:stack effect and fall over to 3d effect for older browsers
	  'selector': 'img, embed, video', // for galleries we want to animage only images without the surrounding links
	  'paging': '.paging' // generate paging using element with class 'paging' as the template
	  });
	  });
});
	  

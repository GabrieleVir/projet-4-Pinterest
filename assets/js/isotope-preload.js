// Will use isotope after the images are loaded

var grid = document.querySelector('.grid');
var iso;
$.getScript('assets/js/imagesloaded.pkgd.js', function()
{
	imagesLoaded( grid, function() {
	  // init Isotope after all images have loaded
	  iso = new Isotope( grid, {
	    itemSelector: '.grid-item',
	    percentPosition: true,
	    masonry: {
	    	columnWidth: '.grid-sizer'
	    }
	  });
	});
});


/**
 * Scroll Elephant — the little saffron elephant that walks
 * from left to right as the visitor scrolls down the page.
 */
document.addEventListener( 'DOMContentLoaded', function () {
	var container = document.querySelector( '.scroll-elephant-container' );
	var elephant = document.querySelector( '.scroll-elephant' );
	var trail = document.querySelector( '.scroll-elephant-trail' );

	if ( ! container || ! elephant || ! trail ) {
		return;
	}

	var elephantWidth = 56;
	var lastScrollY = -1;
	var ticking = false;
	var walkingTimeout = null;

	function getScrollProgress() {
		var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		var docHeight = Math.max(
			document.body.scrollHeight,
			document.documentElement.scrollHeight
		);
		var winHeight = window.innerHeight;
		var scrollable = docHeight - winHeight;

		if ( scrollable <= 0 ) {
			return 0;
		}

		return Math.min( Math.max( scrollTop / scrollable, 0 ), 1 );
	}

	function update() {
		ticking = false;

		var progress = getScrollProgress();
		var viewportWidth = window.innerWidth;
		var maxTravel = viewportWidth + elephantWidth;
		var xPos = -elephantWidth + ( progress * maxTravel );

		elephant.style.left = xPos + 'px';

		var trailWidth = Math.max( 0, xPos );
		trail.style.width = trailWidth + 'px';
	}

	function onScroll() {
		var currentY = window.pageYOffset || document.documentElement.scrollTop;

		// Add walking class for the bob animation
		elephant.classList.add( 'scroll-elephant--walking' );

		// Clear previous timeout and set a new one to stop bobbing
		if ( walkingTimeout ) {
			clearTimeout( walkingTimeout );
		}
		walkingTimeout = setTimeout( function () {
			elephant.classList.remove( 'scroll-elephant--walking' );
		}, 200 );

		if ( currentY !== lastScrollY ) {
			lastScrollY = currentY;

			if ( ! ticking ) {
				ticking = true;
				requestAnimationFrame( update );
			}
		}
	}

	// Set the saffron color
	elephant.style.color = getComputedStyle( document.documentElement )
		.getPropertyValue( '--wp--preset--color--saffron' )
		.trim() || '#C0622F';

	// Initial position
	update();

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	window.addEventListener( 'resize', function () {
		if ( ! ticking ) {
			ticking = true;
			requestAnimationFrame( update );
		}
	}, { passive: true } );
} );
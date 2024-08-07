/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */


 	jQuery(function($) {
	"use strict";

	/* ----------------------------------------------------------- */
	 /*  Fixed header
	 /* ----------------------------------------------------------- */

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > 100 ) {
			$('#t3-mainnav').addClass('navbar-fixed');
		} else {
			$('#t3-mainnav').removeClass('navbar-fixed');
		}
	});


	/* ----------------------------------------------------------- */
	/*  Counter
	/* ----------------------------------------------------------- */

		$('.counterUp').counterUp({
		 delay: 10,
		 time: 1000
		});


	/* ----------------------------------------------------------- */
	/*  Team
	/* ----------------------------------------------------------- */
      $("#team-carousel").owlCarousel({
 
        navigation : true, // Show next and prev buttons
        navigationText: ["<i class='fa fa fa-angle-left'></i>", "<i class='fa fa fa-angle-right'></i>"],
        slideSpeed : 800,
        pagination:false,
        items : 4,
        rewindNav: true,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        stopOnHover:true
 
      });



	});

<?php
//Scripts Inits
?>
<script type="text/javascript">
	jQuery(document).ready(function(){
    
		// Flexnav
		jQuery("#menu-main").flexNav();

    // Add breakpoint attribute to main menu
    jQuery("#menu-main").attr('data-breakpoint','768');
        
    <?php if(is_front_page()) : ?>

      // Main Slider
      jQuery("#main-slider").flexslider({
        slideshow: true,
        animation: "slide",
        slideshowSpeed: 7000,
        animationSpeed: 1000,        
      });

      // Resize, can be inside Load or Ready
      jQuery(window).trigger('resize',function(){
        alert("sdfassdfa");
      });

      //jQuery('#main-slider.flexslider .slides li').append('<span id="ls"></span><span id="rs"></span>');

      // Main Slider Control Nav
      var control = jQuery('#main-slider .flex-control-nav').outerWidth();
      var pos = control/2;
      var finalpos =  pos * -1;
      // console.log('position'+finalpos);
      jQuery('#main-slider .flex-control-nav').css('margin-left',finalpos);

    <?php endif; ?>

    <?php if(is_page_template('main.php')) : ?>
      jQuery('#top-questions ul li p').click(function(){
        // Set the effect type
        var effect = 'slide';
     
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
     
        // Set the duration (default: 400 milliseconds)
        var duration = 750;
        jQuery(this).parent('li').siblings().find('.flyout').hide(500);
        jQuery(this).next('.flyout').toggle(effect, options, duration);        
      });

      jQuery('#top-questions ul li a.close').click(function(){
        jQuery(this).parent('.flyout').hide(500);
      });
    <?php endif; ?>

    // Special Offers Carousel
    jQuery("#offers").flexslider({
      slideshow: false,
      animation: "slide",
      controlNav: true,
      itemWidth: 200,
      maxItems: 3,
      minItems: 1,
      move: 3
    });    

    // Search Field
		jQuery('.search-text').click(function() {
    	if (this.value == this.defaultValue) {
      	this.value = '';
    	}
    });
  	jQuery('.search-text').blur(function() {
    	if (this.value == '') {
      	this.value = this.defaultValue;
    	}
    });

    equalheight = function(container){

    var currentTallest = 0,
         currentRowStart = 0,
         rowDivs = new Array(),
         jQueryel,
         topPosition = 0;
     jQuery(container).each(function() {

       jQueryel = jQuery(this);
       jQuery(jQueryel).height('auto')
       topPostion = jQueryel.position().top;

       if (currentRowStart != topPostion) {
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
         rowDivs.length = 0; // empty the array
         currentRowStart = topPostion;
         currentTallest = jQueryel.height();
         rowDivs.push(jQueryel);
       } else {
         rowDivs.push(jQueryel);
         currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
      }
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
     });
    }

    equalheight('#now-playing .now-playing');

    <?php if(!is_front_page()) : ?>

    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop()) {
          jQuery('#toTop').fadeIn();
      } else {
          jQuery('#toTop').fadeOut();
      }
    });

    jQuery("#toTop").click(function() {
        jQuery("body").animate({scrollTop: 0}, 1000);
    });

    jQuery(".oceanic-accordion .menu li").hover(
    function() {
      jQuery(this).children('ul.sub-menu').stop(true,true).slideDown(500);
      if (jQuery(this).children('ul').length > 0) {
        jQuery(this).addClass("hasChildren");
      }
    },
    function() {
      jQuery(this).children('ul.sub-menu').stop(true,true).slideUp(500);
      jQuery(this).removeClass("active");
    }
  );

    <?php endif; ?>

	});	
</script>
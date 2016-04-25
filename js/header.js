  jQuery(document).ready(function() {
    var navpos = jQuery('#mainnav').offset();
    console.log(navpos.top);
      jQuery(window).bind('scroll', function() {
        if (jQuery(window).scrollTop() > navpos.top) {
          jQuery('#mainnav').addClass('fixedNav');
          jQuery('.site-logo').addClass('smaller-site-logo');
          jQuery('#sectionsMenu').addClass('shrinkSectionsMenu');
          jQuery('.hamburger').addClass('smallerHamburger');
          jQuery('#spacer').addClass('on');
          jQuery('.headerImage').addClass('darken');
         }
         else {
           jQuery('#mainnav').removeClass('fixedNav');
           jQuery('#sectionsMenu').removeClass('shrinkSectionsMenu');
          jQuery('.site-logo').removeClass('smaller-site-logo');
          jQuery('.hamburger').removeClass('smallerHamburger');
          jQuery('#spacer').removeClass('on');
          jQuery('.headerImage').removeClass('darken');
         }
      });
  });







  jQuery(".hamburger").click(function(){
      jQuery(".mobileMenuContainer").toggleClass('showMobileMenu');
  });

  jQuery('.hamburger').css("cursor", "pointer");








  jQuery(".searchIcon").click(function(){
      jQuery(".formSearchBoxJS").toggleClass('searchShow');
  });

  jQuery(".frontPage").click(function(){
      jQuery(".formSearchBoxJS").removeClass('searchShow');
  });

  jQuery('.searchIcon').css("cursor", "pointer");

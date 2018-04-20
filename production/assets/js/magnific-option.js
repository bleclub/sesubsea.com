$(document).ready(function() {
    // MagnificPopup
     var magnifPopup = function() {

         $('#photo-grid-pro-container .gd-cell-link').magnificPopup({
             type: 'image',
             removalDelay: 300,
             disableOn: 700,
             mainClass: 'mfp-fade',
             gallery:{
                 enabled:true
             }
         }); 
 
         $('.project_map').magnificPopup({
             type: 'image',
             removalDelay: 300,
             disableOn: 700,
             mainClass: 'mfp-fade',
             gallery:{
                 enabled:true
             }
         }); 
         
     };
 
     var magnifVideo = function() {
         $('.video_project').magnificPopup({
         disableOn: 700,
         type: 'iframe',
         mainClass: 'mfp-fade',
         removalDelay: 160,
         preloader: false,
 
         //fixedContentPos: false
     });
     
     $('.disclamer_pop').magnificPopup({
         disableOn: 700,
         type: 'iframe',
         mainClass: 'mfp-fade',
         removalDelay: 160,
         preloader: false,
 
         //fixedContentPos: false
     });
     };
 
    //  $.magnificPopup.open({
    //      items: {
    //          src: '<div class="white-popup container"><a href="http://www.theloftssilom.com/presales/#contact" target="_blank"><img src="images/promotion_popup.jpg" class="img-responsive"></a></div>'
    //      },
    //      type: 'inline'
    //  });
 
 
     // Call the functions 
     magnifPopup();
     magnifVideo();
 
 });
/* 
 * 
 * Enable responsive men
 * 
 */


/* global jquery */

(function($) {
    $('#site-burger').click(function(e){
        e.preventDefault();
        $('body').toggleClass('is_slided');
    });
    
    $('#site-cache').click(function(e){
        e.preventDefault();
        $('body').removeClass('is_slided');
    });
            
})(jQuery);

/** Gallery  Side 2**/

function slideSwitch2() { var $active = $('#slidercont1 img.active'); if ( $active.length == 0 ) $active = $('#slidercont1 img:last'); var $next =  $active.next().length ? $active.next() : $('#slidercont1 img:first'); $active.addClass('last-active'); $next.css({opacity: 0.0}) .addClass('active') .animate({opacity: 1.0}, 1000, function() { $active.removeClass('active last-active'); }); }
$(function() { setInterval( "slideSwitch2()", 4000 ); });


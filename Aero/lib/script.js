/** Gallery  Side 1**/

function slideSwitch() { var $active = $('#slidercont img.active'); if ( $active.length == 0 ) $active = $('#slidercont img:last'); var $next =  $active.next().length ? $active.next() : $('#slidercont img:first'); $active.addClass('last-active'); $next.css({opacity: 0.0}) .addClass('active') .animate({opacity: 1.0}, 1000, function() { $active.removeClass('active last-active'); }); }
$(function() { setInterval( "slideSwitch()", 4000 ); });


// Paralax Section
function getViewportHeight() {
    var a = document.documentElement.clientHeight, b = window.innerHeight;
    return a < b ? b : a;
}

function getViewportScroll() {
    if(typeof window.scrollY != 'undefined') {
        return window.scrollY;
    }
    if(typeof pageYOffset != 'undefined') {
        return pageYOffset;
    }
    var doc = document.documentElement;
    doc = doc.clientHeight ? doc : document.body;
    return doc.scrollTop;
}

function doParallax() {
    var el, elOffset, elHeight,
        images = [].slice.call(document.querySelectorAll('.js-parallax-bg')),
        offset = getViewportScroll(),
        vHeight = getViewportHeight();
 
    for(var i in images) {
        el = images[i];
        elOffset = el.offsetTop;
        elHeight = el.offsetHeight;
 
        if((elOffset > offset + vHeight) || (elOffset + elHeight < offset)) { continue; }
 
        el.style.backgroundPosition = '50% '+Math.round((elOffset - offset)*3/8)+'px';
    }
}

jQuery(window).on('scroll', doParallax);


jQuery(document).ready(function(){
    if( jQuery(window).width > 991 ) {
        jQuery(".dropdown").hover(            
            function() {
                jQuery('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
                jQuery(this).toggleClass('open');        
            },
            function() {
                jQuery('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
                jQuery(this).toggleClass('open');       
            }
        );
    }
});
// Gumby is ready to go
Gumby.ready(function() {
	console.log('Gumby is ready to go...', Gumby.debug());

	// placeholder polyfil
	if(Gumby.isOldie || Gumby.$dom.find('html').hasClass('ie9')) {
		$('input, textarea').placeholder();
	}
});

// Oldie document loaded
Gumby.oldie(function() {

});

// Document ready
$(function() {
    $('a#toogleFooter').addClass('open');
    ///$('.example1').append('<a href="#" id="close-example1" class="button">Close &uarr;</a>');
    $('.moreFooter a#toogleFooter').click(function() {
        $('#panel').slideToggle("slow");
        $(this).toggleClass('close open');
        $('html, body').animate({scrollTop:$(document).height()}, 'slow');
        //$('#open-example1').fadeOut(500);
        return false;
    });
    
    $('#slideshow').bjqs({
        'height' : 252,
        'width' : 940,
        'responsive' : true,
        'showcontrols' : true,
        'showmarkers' : false,
    });
    
    var subMenu = jQuery(".menu ul li ul li");
    var linkClick = jQuery(".menu ul li").filter(":has(ul)");

    subMenu.hide();

    linkClick.click(function () {
        $(this).find('ul li').slideToggle("fast, 100");
    });
    
$('.share a').click(function() {
$( '#social-bookmarks' ).toggle('slow');
});    
    
});


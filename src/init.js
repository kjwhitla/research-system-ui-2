var menuIsOpen = true;
var isMobile = false;

function animateDrawer() {
    if (menuIsOpen === true) {
        closeDrawer();
    }
    else if (menuIsOpen === false) {
        openDrawer();
    }
}
function closeDrawer() {
    $('.main-menu').animate({width: "58px"}, 100);
    $('.main-content').animate({left: "58px"}, 100);
    $('.collapse').hide();
    $('.footer').hide();
    $('.expand').show();
    menuIsOpen = false;
    $('.tooltip').tooltipster('enable');
}
function openDrawer() {
    $('.main-menu').animate({width: "200px"}, 100);
    $('.main-content').animate({left: "200px"}, 100);
    $('.collapse').show();
    $('.footer').show();
    $('.expand').hide();
    menuIsOpen = true;
    $('.tooltip').tooltipster('disable');
}





$(document).ready(function() {
    
    // if mobile code
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('.main-menu').css('width', '58px');
        $('.main-content').css('left', '58px');
        $('.collapse').hide();
        $('.footer').hide();
        isMobile = true;
    }
    
    // logo button handler
    $('#btn-logo').click(function() {
        location.reload();
    });
    
    // search input handler
    $('#btn-search').click(function() {
        $('.drop-search').slideToggle();
    });
    
    // name button handler
    $('#btn-name').click(function() {
        $('.drop-name').slideToggle();
    });
    
    // menu handler
    $('.menu-control').click(function() {
        animateDrawer();
    });
    
    // form button
    $('#btn-form-save').click(function() {
        $('#saving-indicator').fadeIn().delay('500').fadeOut();
    });
    
    // form button
    $('#btn-notifs').click(function() {
        $('#section-notifs').slideToggle('fast');
    });
    
    // tabs handler
    $('#tabs li a').click(function(e){
        $('#tabs li, #content .current').removeClass('current');
        $(this).parent().addClass('current');
        var currentTab = $(this).attr('href');
        $(currentTab).addClass('current');
        e.preventDefault();
    });
    
    // tooltip init - menu
    $('.tooltip').tooltipster({
        animation: 'fade',
        delay: 20,
        position: 'right',
        theme: 'tooltipster-default',
        touchDevices: false,
        trigger: 'hover'
    }); 
    $('.tooltip').tooltipster('disable');
    
    // tooltip init - form control
    $('.tooltip2').tooltipster({
        animation: 'fade',
        delay: 20,
        position: 'left',
        theme: 'tooltipster-default',
        touchDevices: false,
        trigger: 'hover'
    });
    
    // input label position
    $('input').blur(function() {
        if ($(this).val())
            $(this).addClass('used');
        else
            $(this).removeClass('used');
    });
});






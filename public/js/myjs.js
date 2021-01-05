

$( document ).ready(function() {
    $('.menu-items a[href="'+window.location.href.replace(/\/+$/,'')+'"]').addClass('menu-item-current');
});


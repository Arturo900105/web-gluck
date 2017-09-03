$(document).ready(function () {
    $('.ancla').click(function () {
        $('#collapseOne').attr('class', 'collapse');
        var link = $(this);
        var anchor = link.attr('href');
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 1000);
        return false;
    });
});

$(document).ready(function () {
    $('.form-group input').on('focus', function () {
        $(this).parent().find('label').fadeIn(300);
    });
    $('.form-group input').on('focusout', function () {
        $(this).parent().find('label').fadeOut(300);
    });

    $('.tab-heading').click(function () {
        $('.tab-heading').parent().removeClass('active');
        $(this).parent().addClass('active');
    });
});
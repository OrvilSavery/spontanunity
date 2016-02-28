/*
 APPLY VALUE TO AN INPUT:
 Commonly used for applying values to hidden inputs
 */
var applyValueToInputOnClick = function (ele, activeClass) {
    $(ele).on('click', function () {
        var value = $(this).data('value');
        var input = $(this).parent().find('input');
        input.val(value);
        $(ele).removeClass(activeClass);
        $(this).addClass(activeClass);
    });
};

/*
 APPLY VALUE TO MODAL
 */
var applyValueToModalOnClick = function (ele, modalClass, modalClassButton) {
    $(ele).on('click', function () {
        var url = $(this).data('url');
        $(modalClassButton).attr('href', url);
        $(modalClass).fadeIn();
    });
};

/*
Submit Form on Change of input
 */
var submitFormOnChange = function(button, ele, form) {
    $(document).ready(function(){
        var value = $(ele).val();
        $(button).on('click', function() {
            if($(ele).val() !== value) {
                $(form).submit();
            }
        });
    });
};

/* exported applyValueToInputOnClick, applyValueToModalOnClick, submitFormOnChange */
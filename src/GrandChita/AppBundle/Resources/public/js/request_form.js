/**
 * Created by Erlan on 10/27/16.
 */

$(document).ready(function() {
    var form = $('#request_form');
    var loadingEffect = $('#loading-effect');
    var b = $('#submit-button');

    $(form).on('submit', function(event) {
        event.preventDefault();

        $(b).animate({
            opacity: 0
        }, 500, function() {
            $(loadingEffect).fadeIn('fast');
        });

        $.ajax({
            type: $(form).attr('method'),
            dataType: 'JSON',
            data: $(form).serialize(),
            url: $(form).attr('action'),
            success: function(response) {
                if(response.result == 'ok') {
                    $(loadingEffect).animate({
                        display: 'none'
                    }, 500, function() {
                        $(b).animate({
                            opacity: 1
                        }, 500, function() {
                            alert('Писмо успешно отправлено! Приятного вам дня!');
                        });
                    });
                } else {
                    $(loadingEffect).fadeOut('fast');
                    $(b).animate({
                        opacity: 1
                    }, 500, function() {
                        alert('Произошла ошибка сервера, пожалуйста, попробуйте позже!');
                    });
                }
            },
            error: function() {
                $(loadingEffect).fadeOut('fast');
                $(b).animate({
                    opacity: 1
                }, 500, function() {
                    alert('Не можем отправить сообщение с сайта, попробуйте позже!');
                });
            }
        });
    });
});
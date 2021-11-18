$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('html').on('submit', 'form:not(.ajax_off)', function () {
        const form = $(this);
        const action = form.attr('action');
        let data = new FormData(form[0]);
        // $('.ajax_load').fadeIn().css('display', 'flex');
        $.post({
            url: action,
            data: data,
            type: "POST",
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            success: function (response) {
                // $('.ajax_load').fadeOut(function () {
                if (response.message) {
                    ajaxMessage(response.message, 3);
                }

                if (response.select_bank_port) {
                    $('.j_add_port_mailing').html(response.select_bank_port);
                }

                if (response.uf_list) {
                    $('.uf_list').html(response.uf_list);
                }

                if (response.gallery) {
                    $('.gallery_docs').fadeTo('300', '0.5', function () {
                        $(this).html($(this).html() + response.gallery).fadeTo('300', '1');
                    });
                }
                if (response.recording) {
                    $('.recording_list').fadeTo('300', '0.5', function () {
                        $(this).html($(this).html() + response.recording).fadeTo('300', '1');
                    });
                }

                if (response.address) {
                    addressUpdate(response.address)
                    setTimeout(function () {
                        $('#addressEdit').modal('hide')
                    }, 2000);
                }

                if (response.redirect) {
                    window.location.href = response.redirect;
                }
                // })
            }
        });
        return false;
    });


    let ajaxResponseBaseTime = 3;

    function ajaxMessage(message, time) {
        let ajaxMessage = $(message);

        ajaxMessage.append("<div class='message_time'></div>");
        ajaxMessage.find(".message_time").animate({
            "width": "100%"
        }, time * 1000, function () {
            $(this).parents(".message").fadeOut(200);
        });

        $(".ajax_response").append(ajaxMessage);
    }

    // AJAX RESPONSE MONITOR
    $(".ajax_response .message").each(function (e, m) {
        ajaxMessage(m, ajaxResponseBaseTime += 1);
    });

    // AJAX MESSAGE CLOSE ON CLICK
    $(".ajax_response").on("click", ".message", function (e) {
        $(this).effect("bounce").fadeOut(1);
    });
});
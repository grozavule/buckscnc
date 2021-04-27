function generateAlert(type, message)
{
    let alert = '<div class="alert alert-' + type + '">';
    alert += message;
    alert += '</div>';

    return alert;
}

function getElementVerticalPosition(selector)
{
    let body = document.body.getBoundingClientRect();
    let element = document.querySelector(selector).getBoundingClientRect();

    return element.y - body.y;
}

let form = document.querySelector('#footer-contact');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
})

$(document).ready(function () {
    $('.nav-menu').on('click', function () {
        $('body').css('overflow-y', 'hidden');
        $('.nav-links').animate({ left: "0px" }, 500);
    });

    $('.nav-links i.fa-times').on('click', function () {
        $('.nav-links').animate({ left: "100vw" }, 500);
        $('body').css('overflow-y', 'auto');
    });

    $('#footer-contact input[type="submit"]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(document).scrollTop(getElementVerticalPosition('.footer'));

        let formData = new FormData(form);

        $.ajax({
            url: '/send-message',
            data: formData,
            processData: false,
            contentType: false,
            method: 'post',
            dataType: 'json',
            beforeSend: function ()
            {
                $('.contact-modal').css('visibility', 'visible');
            },
            success: function (data, status)
            {
                $('.contact-form').prepend(generateAlert('success', data.success));
                $('#footer-contact input, #footer-contact textarea').not('input[type="submit"]').val('');
                $(document).scrollTop(getElementVerticalPosition('.footer'));
            },
            error: function (obj, status, error)
            {
                $('.contact-form').prepend(generateAlert('danger', 'Oops! Something went wrong. Please try again.'));
            },
            complete: function ()
            {
                $('.contact-modal').css('visibility', 'hidden');
            }
        });
    })
})

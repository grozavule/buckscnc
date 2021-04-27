let id = 0;

function setBackground(id)
{
    console.log(id);
    $('.modal-bg .photo').css('background-image', 'url(../assets/images/portfolio-fs-' + id + '.jpg)');
}

$(document).ready(function () {
    $('.polaroid').on('click', function () {
        id = $(this).attr('id').substring(9);
        setBackground(id);
        $('.modal-bg').fadeIn('slow');
    });

    $('.modal-bg .arrow').on('click', function () {
        if ($(this).hasClass('arrow-left')) {
            id--;
        } else {
            id++;
        }
        if (id > 35) {
            id = 1;
        }
        if (id < 1) {
            id = 35;
        }
        if (id < 10) {
            id = '0' + id;
        }
        setBackground(id);
    });

    $('.modal-bg .modal-close').on('click', function () {
        $('.modal-bg').fadeOut('slow');
    });
});

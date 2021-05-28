let id = 0;
let maxID = 4;
let minID = 1;
let breakpoints = [425, 1100, 1920];

function setBackground(id)
{
    console.log(id);
    console.log(window.innerWidth);
    let width = 1920;
    for (var i = 0; i < breakpoints.length; i++)
    {
        if (window.innerWidth <= breakpoints[i])
        {
            width = breakpoints[i];
            break;
        }
    }
    $('.modal-bg .photo').css('background-image', 'url(../assets/images/portfolio-' + id + '-' + width + 'w.jpg)');
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
        if (id > maxID) {
            id = 1;
        }
        if (id < minID) {
            id = maxID;
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

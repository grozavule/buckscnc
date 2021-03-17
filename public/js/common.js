$(document).ready(function () {
    $('.nav-menu').on('click', function () {
        $('.nav-links').animate({ left:"0px" }, 500);
    });
    $('.nav-links i.fa-times').on('click', function () {
        $('.nav-links').animate({ left:"100vw" }, 500);
    })
})

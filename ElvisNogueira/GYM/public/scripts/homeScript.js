$(function(){
    $('.menu-expandivel').click(function () {
        $(this).toggleClass('active');
    });

    $('.sub-lateral').click(function () {
        $(this).toggleClass('active');
    });

    $('#usuario').click(function () {
        $('#menuLogout').toggleClass('active');
    });

    //Modal

    $('#sairButton').click(function () {
        $('.modal-content').toggleClass('active');
        $('.modal').toggleClass('active');
    });

    $('#cancelarButton').click(function () {
        $('.modal-content').toggleClass('active');
        $('.modal').toggleClass('active');
    });


});
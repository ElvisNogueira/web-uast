$(function(){
    $('.menu-expandivel').click(function () {
        $(this).toggleClass('active');
    });

    $('.sub-lateral').click(function () {
        $(this).toggleClass('active');
    });

    $('#usuario').click(function () {
        console.log("aqqqq");
        $('#menuLogout').toggleClass('active');
    });


});
$(document).ready(function ($) {
    // mobile导航
    $('.menuBtn').click(function (e) {
        if ($(this).hasClass('on')) {
            $('.overlay').remove();
            $(this).removeClass('on');
            $('#aside').removeClass('open');
            e.stopPropagation();
        } else {
            $(this).addClass('on');
            $('#aside').addClass('open');
            e.stopPropagation();
        }
    });
    $('#aside').click(function (e) {
        e.stopPropagation();
    });
    $(document).on('click', function () {
        $('#aside').removeClass('open');
        $('.menuBtn').removeClass('on');
    });

    // 头部固定
    $('.header .navig li:first').addClass('on');
    var headNum = $('.m-index').length;
    $(window).scroll(function (event) {
        var winScroTop = $(window).scrollTop();
        if (winScroTop > 10) {
            $('.header').addClass('header-fixed');
        } else {
            $('.header').removeClass('header-fixed');
        };

        for (var i = 0; i < headNum; i++) {
            if (winScroTop >= $('.m-index').eq(i).offset().top - 120) {
                $('.header .navig li').eq(i).addClass('on').siblings().removeClass('on');
            };
        };
    });
    // pc
    $('.header .navig li a').click(function (event) {
        var indx = $(this).parent('li').index();
        var pageTop = $('.m-index').eq(indx).offset().top - 100;
        if (indx == 0) {
            $('body,html').animate({ 'scrollTop': 0 }, 500);
        } else {
            $('body,html').animate({ 'scrollTop': pageTop }, 500);
        };
    });
    $('.footer .link a').click(function (event) {
        var indx = $(this).index();
        var pageTop = $('.m-index').eq(indx).offset().top - 100;
        if (indx == 0) {
            $('body,html').animate({ 'scrollTop': 0 }, 500);
        } else {
            $('body,html').animate({ 'scrollTop': pageTop }, 500);
        };
    });
    // mobi
    $('#aside .menu li a').click(function (event) {
        var indx = $(this).parent('li').index();
        var pageTop = $('.m-index').eq(indx).offset().top - 65;
        $('#aside .menu li').eq(indx).addClass('on').siblings().removeClass('on');
        if (indx == 0) {
            $('body,html').animate({ 'scrollTop': 0 }, 500);
        } else {
            $('body,html').animate({ 'scrollTop': pageTop }, 500);
        };
    });

    $('.header .li-wx').click(function () {
        $('.pop-qr').fadeIn();
        event.stopPropagation();
    });
    $('bady,html').click(function () {
        $('.pop-qr').hide();
    })

    $('.menu .li-wx').click(function () {
        $('.pop-qrwap').fadeIn();
        event.stopPropagation();
    });
    $('bady,html').click(function () {
        $('.pop-qrwap').hide();
    })


});
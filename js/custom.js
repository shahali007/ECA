$(document).ready(function() {
    // preloader js
    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#ff0000');
    }, 3000);

    // resize
    resizeContent();
    $(window).resize(function() {
        resizeContent();
    });
    function resizeContent() {
        $height = $(window).height() - 120;
        $heightLeft = $(window).height() - 60;
        $heightChat = $(window).height() - 120;
        $heightChatRight = $(window).height() - 220;
        $heightChatLeft = $(window).height() - 190;
        $('body').height($height);
        $('body div.left-menu').height($heightLeft);
        $('body div.chat-box').height($heightChat);
        $('body div.chatRight').height($heightChatRight);
        $('body div.chatLeft').height($heightChatLeft);
    }

    // button-toggle
    $("#button-swip").click(function(){
        $(".left-menu").toggleClass("swipp");
        $(".main-body").toggleClass("swipp");
        $(this).toggleClass("arrow");
    });

    // sidemenu active
    $(".list-unstyled li").click(function(){
        $(".list-unstyled li").removeClass("active");
        $(this).addClass("active");
    });
    // accordian
    $('.accordion-toggle').on('click', function(){
        $(this).closest('.box').children().each(function(){
            $(this).find('>.eca-heading').removeClass('active');
        });

        $(this).closest('.eca-heading').toggleClass('active');
    });

});
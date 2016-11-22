
if (window.screen.width > 800) {
    $parpaph1 = $('.alfa').attr('href');
    document.write('<script type="text/javascript" src="js/animate-css.js"><\/script>');
    $.getScript($parpaph1);
}


$(document).ready(function () {

    $('.nav__container').on('click', function (e) {
            $('.nav__dropdown').fadeIn(500).fadeOut(3000);
        }
    )

});

$(document).ready(function () {
    //Slider
    $('.bxslider').bxSlider();


    $(".header__contacts").animated("flipInY", "fadeOutDown");
    $(".contacts__content").animated("fadeInLeft", "fadeOutDown");
    $(".contacts__form").animated("fadeInRight", "fadeOutDown");
    $(".article__header").animated("fadeInUp", "fadeOutDown");
    $(".superprice").animated("fadeInUpBig", "fadeOutDown");


    //Parallax

    $parpaph = $('.beta').attr('href');
    $('.parallax-window').parallax({imageSrc: $parpaph});

    //Валидация
    $("input, select, textarea").jqBootstrapValidation();

    //Фиксированная навигация

});

$('#my_tabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#nav__container').singlePageNav();

$(document).ready(function () {

    //tabs



    $('.func__linc').on('click', function (e) {
        e.preventDefault();

        console.log(1);

        var
            $this = $(this),
            item = $this.closest('.func__item');


        item.addClass('func__item-active')
                .siblings()
                .removeClass('func__item-active');


    })


});

$(window).load(function () {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

});



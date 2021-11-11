"use strict";

$(document).ready(function () {
    function e(e, t) {
        /*var i = $(e);
        a(i, !0), $.post("/apply", {
            name: i.find("#name").val(),
            phone: i.find("#phone").val(),
            class: i.find("#class").val()
        }, function (e) {
            typeof(fbq) === 'undefined' || fbq('track', 'Lead');
            a(i, !1), i.parent().html($("<h2>").text(e.result)), "undefined" != typeof yaCounter44172364 && yaCounter44172364.reachGoal("form-private-school")
        })*/
    }

    function a(e, a) {
        var t = e.find("input,button,select");
        a ? t.attr("disabled", !0) : t.removeAttr("disabled")
    }

    function t() {
        var e = $(window).height(), a = $(".topbar-wrapper").outerHeight(), t = $(".navbar").outerHeight(),
            i = $(".footer").outerHeight(), r = e - (a + t + i);
        $(".full-sizer").attr("style", "min-height:" + r + "px")
    }

    function i() {
        $(".dropdown").off("mouseenter"), $(".dropdown").off("mouseleave"), window.matchMedia("(min-width: 1150px)").matches && ($(".dropdown").on("mouseenter", function () {
            $(this).hasClass("open") || $(this).find(".caret").trigger("click")
        }), $(".dropdown").on("mouseleave", function () {
            $(this).find(".caret").trigger("click")
        }))
    }

    if ($.extend($.validator.messages, {
        required: "Р­С‚Рѕ РїРѕР»Рµ РЅРµРѕР±С…РѕРґРёРјРѕ Р·Р°РїРѕР»РЅРёС‚СЊ.",
        remote: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РїСЂР°РІРёР»СЊРЅРѕРµ Р·РЅР°С‡РµРЅРёРµ.",
        email: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅС‹Р№ Р°РґСЂРµСЃ СЌР»РµРєС‚СЂРѕРЅРЅРѕР№ РїРѕС‡С‚С‹.",
        url: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅС‹Р№ URL.",
        date: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅСѓСЋ РґР°С‚Сѓ.",
        dateISO: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅСѓСЋ РґР°С‚Сѓ РІ С„РѕСЂРјР°С‚Рµ ISO.",
        number: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ С‡РёСЃР»Рѕ.",
        digits: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРѕРґРёС‚Рµ С‚РѕР»СЊРєРѕ С†РёС„СЂС‹.",
        creditcard: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РїСЂР°РІРёР»СЊРЅС‹Р№ РЅРѕРјРµСЂ РєСЂРµРґРёС‚РЅРѕР№ РєР°СЂС‚С‹.",
        equalTo: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ С‚Р°РєРѕРµ Р¶Рµ Р·РЅР°С‡РµРЅРёРµ РµС‰С‘ СЂР°Р·.",
        extension: "РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІС‹Р±РµСЂРёС‚Рµ С„Р°Р№Р» СЃ РїСЂР°РІРёР»СЊРЅС‹Рј СЂР°СЃС€РёСЂРµРЅРёРµРј.",
        maxlength: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РЅРµ Р±РѕР»СЊС€Рµ {0} СЃРёРјРІРѕР»РѕРІ."),
        minlength: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ РЅРµ РјРµРЅСЊС€Рµ {0} СЃРёРјРІРѕР»РѕРІ."),
        rangelength: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ Р·РЅР°С‡РµРЅРёРµ РґР»РёРЅРѕР№ РѕС‚ {0} РґРѕ {1} СЃРёРјРІРѕР»РѕРІ."),
        range: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ С‡РёСЃР»Рѕ РѕС‚ {0} РґРѕ {1}."),
        max: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ С‡РёСЃР»Рѕ, РјРµРЅСЊС€РµРµ РёР»Рё СЂР°РІРЅРѕРµВ {0}."),
        min: $.validator.format("РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РІРІРµРґРёС‚Рµ С‡РёСЃР»Рѕ, Р±РѕР»СЊС€РµРµ РёР»Рё СЂР°РІРЅРѕРµ {0}.")
    }), $.validator.setDefaults({
        errorClass: "error",
        validClass: "valid",
        ignore: "hidden",
        highlight: function (e, a, t) {
            $(e).addClass(a).removeClass(t)
        },
        unhighlight: function (e, a, t) {
            $(e).removeClass(a).addClass(t)
        },
        rules: {firstName: {required: !0, minlength: 3}, contactPhone: {required: !0, minlength: 11}},
        submitHandler: function (a) {
            return e(a), a.reset(), !1
        }
    }),
        $("#news-carousel").owlCarousel({items: "1"}),
        $(".js-gallery").length) {
        var r = [];
        $(".photo-gallery__item").map(function (e, a) {
            var t = {
                index: $(a).attr("data-index"),
                src: $(a).attr("data-img"),
                thumb: $(a).find(".photo-gallery__img").attr("src"),
                title: $(a).find(".photo-gallery__description").text()
            };
            r.push(t)
        });
        var l = $('<div class="gallery-carusel"><div class="gallery-carusel__container js-gallery-carusel owl-carousel"></div></div>');
        r.forEach(function (e) {
            var a = '<div class="gallery-carusel__item" data-index="' + e.index + '"><img class="gallery-carusel__img" src="' + e.thumb + '" alt=""></div>';
            $(l).find(".gallery-carusel__container").append($(a))
        });
        var o;
        $(".photo-gallery__item").on("click", function () {
            var e = parseInt($(this).attr("data-index"));
            $.magnificPopup.open({
                items: r,
                type: "image",
                showCloseBtn: !1,
                mainClass: "gallery-pop-up-overlay",
                closeOnBgClick: !1,
                gallery: {enabled: !0},
                callbacks: {
                    beforeOpen: function () {
                        this.goTo(e)
                    }, open: function () {
                        var a = this;
                        $(".gallery-pop-up-overlay").find(".mfp-container").append(l), $(".js-gallery-carusel").hasClass("owl-loaded") || (o = $(".js-gallery-carusel").owlCarousel({
                            autoWidth: !0,
                            nav: !0,
                            dots: !1,
                            margin: 1,
                            items: 1,
                            responsive: {0: {mouseDrag: !0, touchDrag: !0}, 768: {mouseDrag: !1, touchDrag: !1}}
                        })), $(".gallery-carusel__item[data-index=" + e + "]").addClass("gallery-carusel__item_active"), $(".gallery-carusel__item").on("click", function () {
                            var e = parseInt($(this).attr("data-index"));
                            $(".gallery-carusel__item").removeClass("gallery-carusel__item_active"), $(this).addClass("gallery-carusel__item_active"), a.goTo(e)
                        })
                    }, beforeClose: function () {
                        $(".gallery-carusel__item").removeClass("gallery-carusel__item_active"), o.trigger("destroy.owl.carousel")
                    }, change: function () {
                        var e = this.index;
                        $(".gallery-carusel__item").removeClass("gallery-carusel__item_active"), $(".gallery-carusel__item[data-index=" + e + "]").addClass("gallery-carusel__item_active")
                    }
                },
                image: {markup: '<div class="mfp-figure"><div class="close-wrapper"><div class="mfp-close dsadsa"></div></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></div>'}
            })
        })
    }

    if ($("#home-carousel").is(':visible')) {
        $("#home-carousel").owlCarousel({
            items: "1",
            autoplay: !0,
            autoplayTimeout: 5e3,
            loop: !0
        });
    }


    $(document).on("contextmenu", ".item-image, .article-image, img", function () {
        return !1
    }), $(document).on("mousedown", "img", function () {
        return !1
    }), $(".full-sizer").length && ($(window).resize(function () {
        t()
    }), $(window).trigger("resize")), i(), $(".nav").on("click", "a", function () {
        if (0 == $(this).attr("href").indexOf("#")) return $(window).width() < 1150 && $(this).closest(".dropdown").find(".caret").trigger("click"), !1
    }), $(window).resize(function () {
        i()
    });

    $(".visually-link").on("click", function () {
        $.cookie('visually', '1', {expires: 31, path: '/'});
        $.cookie('font-size', 'font-middle', {expires: 31, path: '/'});
        $.cookie('color', 'light-scheme', {expires: 31, path: '/'});
        $.cookie('font', 'arial-type', {expires: 31, path: '/'});

        $('body').addClass('special');
        $('body').addClass('font-middle');
        $('body').addClass('light-scheme');
        $('body').addClass('arial-type');

        $('header .navbar-brand .navbar-logo').attr('src', '/images/logo-lite.png');

        return false;
    });

    $(".casual").on("click", function () {
        $.cookie('visually', '', {expires: 0, path: '/'});
        $.cookie('font-size', '', {expires: 0, path: '/'});
        $.cookie('color', '', {expires: 0, path: '/'});
        $.cookie('font', '', {expires: 0, path: '/'});

        $('body').removeClass('special');
        $('body').removeClass('font-middle');
        $('body').removeClass('light-scheme');
        $('body').removeClass('arial-type');

        $('header .navbar-brand .navbar-logo').attr('src', '/images/logo.png');

        return false;
    });

    $(".visually-content .set-view a").on("click", function () {
        if ($(this).parent().attr('class').indexOf('font-size') != -1) {
            if ($(this).attr('class') == 'font-small' || $(this).attr('class') == 'font-middle'
                || $(this).attr('class') == 'font-large') {
                $.cookie('font-size', $(this).attr('class'), {expires: 31, path: '/'});

                if ($(this).attr('class') != 'font-small') {
                    $('body').removeClass('font-small');
                }

                if ($(this).attr('class') != 'font-middle') {
                    $('body').removeClass('font-middle');
                }

                if ($(this).attr('class') != 'font-large') {
                    $('body').removeClass('font-large');
                }

                $('body').addClass($(this).attr('class'));
            }
        }

        if ($(this).parent().attr('class').indexOf('scheme-type') != -1) {
            if ($(this).attr('class') == 'light-scheme' || $(this).attr('class') == 'dark-scheme') {
                $.cookie('color', $(this).attr('class'), {expires: 31, path: '/'});

                if ($(this).attr('class') != 'light-scheme') {
                    $('body').removeClass('light-scheme');
                    $('header .navbar-header .navbar-logo').attr('src', '/images/logo-dark.png');
                }

                if ($(this).attr('class') != 'dark-scheme') {
                    $('body').removeClass('dark-scheme');
                    $('header .navbar-header .navbar-logo').attr('src', '/images/logo-lite.png');
                }

                $('body').addClass($(this).attr('class'));
            }
        }

        if ($(this).parent().attr('class').indexOf('font-type') != -1) {
            if ($(this).attr('class') == 'arial-type' || $(this).attr('class') == 'times-type') {
                $.cookie('font', $(this).attr('class'), {expires: 31, path: '/'});

                if ($(this).attr('class') != 'arial-type') {
                    $('body').removeClass('arial-type');
                }

                if ($(this).attr('class') != 'times-type') {
                    $('body').removeClass('times-type');
                }

                $('body').addClass($(this).attr('class'));
            }
        }

        return false;
    });

    if ($('.index-top-content .right-content .form-top')) {
        setTimeout(function () {
            $('.index-top-content .right-content .form-top').load('/site/form-top');
        }, 300);
    }

    if ($('.home-page.form-bottom')) {
        setTimeout(function () {
            $('.home-page.form-bottom').load('/site/form-bottom');
        }, 300);
    }

    $(".youtube").each(function () {
        // Based on the YouTube ID, we can easily find the thumbnail image
        $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

        // Overlay the Play icon to make it look like a video player
        $(this).html($('<div/>', {'class': 'play'}));

        $(document).delegate('#' + this.id, 'click', function () {
            // Create an iFrame with autoplay set to true
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url += '&' + $(this).data('params');

            // The height and width of the iFrame should be the same as parent
            var iframe = $('<iframe/>', {
                'frameborder': '0',
                'src': iframe_url,
                'width': $(this).width(),
                'height': $(this).height()
            })

            // Replace the YouTube thumbnail with YouTube HTML5 Player
            $(this).replaceWith(iframe);
        });
    });

    $(".phone-mask").mask("+7 (999) 999-99-99");
});

function clickTarget(type, city = [], elem = []) {
    switch (type) {
        case 'header':
            ym(44172364, 'reachGoal', 'телефон_в_шапке');
            ga('send', 'event', 'телефон_в_шапке', 'click');
            break;
        case 'emailPersonal':
            ym(yaCounter44172364.reachGoal('Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_personal'));
            ga('send', 'event', 'Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_personal', 'РєР»РёРє');
            break;
        case 'emailSchcool':
            ym(yaCounter44172364.reachGoal('Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_school'));
            ga('send', 'event', 'Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_school', 'РєР»РёРє');
            break;
        case 'emailDir':
            ym(yaCounter44172364.reachGoal('Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_director'));
            ga('send', 'event', 'Р°РґСЂРµСЃ_РїРѕС‡С‚С‹_director', 'РєР»РёРє');
            break;
        case 'topSearch':
            ym(44172364, 'reachGoal', 'poisk');
            ga('send', 'event', 'poisk', 'click');
            break;
        case 'formOnTop':
            if (city.length > 0) {
                ym(yaCounter44172364.reachGoal('knopka_ostavit_zayavku_' + city));
                ga('send', 'event', 'knopka_ostavit_zayavku_' + city, 'click');
            } else {
                ym(yaCounter44172364.reachGoal('knopka_ostavit_zayavku'));
                ga('send', 'event', 'knopka_ostavit_zayavku', 'click');
            }

            Comagic.addOfflineRequest({
                name: $('#client-name-top').val(),
                email: $('#client-email-top').val(),
                phone: $('#client-phone-top').val(),
                message: 'Заявка. Класс - ' + $('#children-class-top').val(),
            });
            break;
        case 'formOnBottom':
            if (city.length > 0) {
                ym(yaCounter44172364.reachGoal('knopka_otpravit_v_ostalis_voprosy_' + city));
                ga('send', 'event', 'knopka_otpravit_v_ostalis_voprosy_' + city, 'click');
            } else {
                ym(44172364, 'reachGoal', 'телефон_в_форме_ов');
                ga('send', 'event', 'телефон_в_форме_ов', 'click');
            }

            Comagic.addOfflineRequest({
                name: $('#client-name-bottom').val(),
                email: $('#client-email-bottom').val(),
                phone: $('#client-phone-bottom').val(),
                message: 'Вопрос. Класс - ' + $('#children-class-bottom').val(),
            });
            break;
        case 'formOnErrorValidate':
            ym(yaCounter44172364.reachGoal('errorform'));
            break;
        case 'reviews':
            ym(44172364, 'reachGoal', 'смотреть_все_отзывы');
            ga('send', 'event', 'смотреть_все_отзывы', 'click');
        case 'krujki':
            ym(44172364, 'reachGoal', 'кружки_ секции_подробнее');
            ga('send', 'event', 'кружки_ секции_подробнее', 'click');
        case 'ekskursii':
            ym(44172364, 'reachGoal', 'экскурсии_поездки_подробнее');
            ga('send', 'event', 'экскурсии_поездки_подробнее', 'click');
        case 'sport':
            ym(44172364, 'reachGoal', 'спорт_здоровье_подробнее');
            ga('send', 'event', 'спорт_здоровье_подробнее', 'click');
    }


    return true;
}

function directorMailClick() {
    ym(44172364, 'reachGoal', 'адрес_почты_director');
    ga('send', 'event', 'адрес_почты_director', 'click');
}

function schoolMailClick() {
    ym(44172364, 'reachGoal', 'адрес_почты_school');
    ga('send', 'event', 'адрес_почты_school', 'click');
}

$(document).on('click','.dop_btn1',function(e) {
    clickTarget('krujki');
});

$(document).on('click','.dop_btn2',function(e) {
    clickTarget('ekskursii');
});

$(document).on('click','.dop_btn3',function(e) {
    clickTarget('sport');
});

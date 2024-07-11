function contentCardTimelines() {
    var n, e = !1,
        t = 2;

    function o() {
        e = !1
    }

    function i() {
        c(), n = setInterval(function() {
            var n = $(".content-card-timelines__content").scrollLeft();
            $(".content-card-timelines__content").scrollLeft(n + t);
            var o = $(".content-card-timelines__content").scrollLeft();
            console.log("pxxxx", n, o), 0 == n ? $(".content-card-timelines__btn--left").hide() : $(".content-card-timelines__btn--left").show(), e || c()
        }, 20)
    }

    function c() {
        n && clearInterval(n)
    }

    function r() {}
    $(".content-card-timelines__btn--right").on("mouseover", function n() {
        e = !0, t = 2, i()
    }), $(".content-card-timelines__btn--right").on("mouseout", o), $(".content-card-timelines__btn--left").on("mouseover", function n() {
        e = !0, t = -2, i(), console.log("gotLeft")
    }), $(".content-card-timelines__btn--left").on("mouseout", o), $(".content-card-timelines__btn--right").each(function() {
        console.log("content-card-timelines__btn--right")
    })
}

function accordionService() {
    function n() {
        var n = $("#accordionServices .collapse.show").data("info"),
            e = $("#accordionServices .collapse.show").data("header");
        $(".section-services").hide(), $("#" + n).show(), console.log("header:", e)
    }
    console.log("accordionService"), $("#accordionServices").on("shown.bs.collapse", function(e, t) {
        console.log("event", e, t), n()
    }), n()
}! function(n) {
    n(document).ready(function() {
        n(".open-menu").on("click", function(e) {
            e.preventDefault(), n(".header-menu").toggleClass("open")
        }), n(".page-politics .items--icon a").on("click", function(e) {
            e.preventDefault();
            var t = n(n(this).attr("href"));
            t.length && n("html, body").animate({
                scrollTop: t.offset().top
            })
        })
    })
}(jQuery), new contentCardTimelines, new accordionService, $(function() {
    var n = $(document),
        e = $(".fade-scroll");
    n.on("scroll", function() {
        var t = n.scrollTop();
        e.each(function() {
            var n = $(this),
                e = n.offset().top;
            t > e && n.css("opacity", 1 - (t - e) / 100)
        })
    })
}), $(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500)
    }, 3e3), setTimeout(function() {
        $(".content2").fadeIn(1500)
    }, 12e3)
}), $(function() {
    $(window).scroll(function() {
        $(window).scrollTop() > $(".b").offset().top + $(".b").height() ? $(".sticky").show() : $(".sticky").hide()
    })
});
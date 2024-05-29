import { S as e, A as t, N as r, P as o } from "./vendor.js";
! function() {
    const e = document.createElement("link").relList;
    if (!(e && e.supports && e.supports("modulepreload"))) {
        for (const e of document.querySelectorAll('link[rel="modulepreload"]')) t(e);
        new MutationObserver((e => {
            for (const r of e)
                if ("childList" === r.type)
                    for (const e of r.addedNodes) "LINK" === e.tagName && "modulepreload" === e.rel && t(e)
        })).observe(document, { childList: !0, subtree: !0 })
    }

    function t(e) {
        if (e.ep) return;
        e.ep = !0;
        const t = function(e) { const t = {}; return e.integrity && (t.integrity = e.integrity), e.referrerpolicy && (t.referrerPolicy = e.referrerpolicy), "use-credentials" === e.crossorigin ? t.credentials = "include" : "anonymous" === e.crossorigin ? t.credentials = "omit" : t.credentials = "same-origin", t }(e);
        fetch(e.href, t)
    }
}();
! function(s) {
    const i = s.querySelector(".swiper");
    new e(i, {
        modules: [t, r, o],
        grabCursor: !0,
        watchSlidesProgress: !0,
        loop: !0,
        loopedSlides: 5,
        slidesPerView: "auto",
        centeredSlides: !0,
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        pagination: { el: ".swiper-pagination" },
        autoplay: { delay: 3e3 },
        on: {
            progress(e) {
                const t = e.slides.length;
                for (let r = 0; r < e.slides.length; r += 1) {
                    const o = e.slides[r],
                        s = e.slides[r].progress,
                        i = Math.abs(s);
                    let n = 1;
                    i > 1 && (n = .3 * (i - 1) + 1);
                    const l = o.querySelectorAll(".carousel-slider-animate-opacity"),
                        a = s * n * 50 + "%",
                        c = 1 - .2 * i,
                        d = t - Math.abs(Math.round(s));
                    o.style.transform = `translateX(${a}) scale(${c})`, o.style.zIndex = d, o.style.opacity = i > 3 ? 0 : 1, l.forEach((e => { e.style.opacity = 1 - i / 3 }))
                }
            },
            setTransition(e, t) {
                for (let r = 0; r < e.slides.length; r += 1) {
                    const o = e.slides[r],
                        s = o.querySelectorAll(".carousel-slider-animate-opacity");
                    o.style.transitionDuration = `${t}ms`, s.forEach((e => { e.style.transitionDuration = `${t}ms` }))
                }
            }
        }
    })
}(document.querySelector(".carousel-slider"));
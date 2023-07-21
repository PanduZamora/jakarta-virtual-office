var btn = $('#button-top');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

// delete id link untuk posisi di URL
var links = document.getElementsByTagName("a");

Array.prototype.forEach.call(links, function (elem, index) {
    var elemAttr = elem.getAttribute("href");
    if (elemAttr && elemAttr.includes("#")) {
        elem.addEventListener("click", function (ev) {
            ev.preventDefault();
            document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest"
            });
        });
    }
});



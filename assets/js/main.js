console.log(localStorage.clickcount);

function clickCounter(lang) {
    if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            if (lang == 'eng') {
                location.reload();
                $("span.ser-lang").css('display', 'none');
                $("div.ser-lang").css('display', 'none');
                $("li.ser-lang").css('display', 'none');
                $("span.ita-lang").css('display', 'none');
                $("div.ita-lang").css('display', 'none');
                $("li.ita-lang").css('display', 'none');
                $("span.eng-lang").css('display', 'inline-block');
                $("div.eng-lang").css('display', 'block');
                $("li.eng-lang").css('display', 'block');
                localStorage.clickcount = 1;
            } else if (lang == 'ser') {
                localStorage.clickcount = 0;
                location.reload();
                $("span.ita-lang").css('display', 'none');
                $("div.ita-lang").css('display', 'none');
                $("li.ita-lang").css('display', 'none');
                $("span.eng-lang").css('display', 'none');
                $("div.eng-lang").css('display', 'none');
                $("li.eng-lang").css('display', 'none');
                $("span.ser-lang").css('display', 'inline-block');
                $("div.ser-lang").css('display', 'block');
                $("li.ser-lang").css('display', 'block');
            } else {
                localStorage.clickcount = 2;
                location.reload();
                $("span.ser-lang").css('display', 'none');
                $("div.ser-lang").css('display', 'none');
                $("li.ser-lang").css('display', 'none');
                $("span.ita-lang").css('display', 'inline-block');
                $("div.ita-lang").css('display', 'block');
                $("li.ita-lang").css('display', 'block');
                $("span.eng-lang").css('display', 'none');
                $("div.eng-lang").css('display', 'none');
                $("li.eng-lang").css('display', 'none');
            }
        } else {
            localStorage.clickcount = 0;
        }
    } else {
        console.log(localStorage.clickcount + "ne podrzava");
    }
}

$(() => {
    if (localStorage.clickcount == 1) {
        $("span.ser-lang").css('display', 'none');
        $("div.ser-lang").css('display', 'none');
        $("li.ser-lang").css('display', 'none');
        $("span.ita-lang").css('display', 'none');
        $("div.ita-lang").css('display', 'none');
        $("li.ita-lang").css('display', 'none');
        $("span.eng-lang").css('display', 'inline-block');
        $("div.eng-lang").css('display', 'block');
        $("li.eng-lang").css('display', 'block');
        // console.log(localStorage.clickcount + "u jedinici");
    } else if (localStorage.clickcount == 2) {
        $("span.ser-lang").css('display', 'none');
        $("div.ser-lang").css('display', 'none');
        $("li.ser-lang").css('display', 'none');
        $("span.eng-lang").css('display', 'none');
        $("div.eng-lang").css('display', 'none');
        $("li.eng-lang").css('display', 'none');
        $("span.ita-lang").css('display', 'inline-block');
        $("div.ita-lang").css('display', 'block');
        $("li.ita-lang").css('display', 'block');
        // console.log(localStorage.clickcount + "u dvojci");
    } else if (localStorage.clickcount == 0) {
        $("span.eng-lang").css('display', 'none');
        $("div.eng-lang").css('display', 'none');
        $("li.eng-lang").css('display', 'none');
        $("span.ita-lang").css('display', 'none');
        $("div.ita-lang").css('display', 'none');
        $("li.ita-lang").css('display', 'none');
        $("span.ser-lang").css('display', 'inline-block');
        $("div.ser-lang").css('display', 'block');
        $("li.ser-lang").css('display', 'block');
        // console.log(localStorage.clickcount + "u nuli");
    }
    var date = new Date();
    var year = date.getFullYear();
    console.log(year);
    document.getElementById('prava').innerHTML = "<small>Copyright &copy; Devel D.O.O. " + year + ". All Rights Reserved</small>";
    // let flag = false;
    if ($(window).width() <= 992) {
        $(".hamburger").click(() => {
            $("nav").addClass('navbg');
        })
    }
    if (document.title !== "Devel") {
        $("nav").addClass('navbg');
    }

    setTimeout(function() {
        $("p.alert").css("display", "none")
    }, 1900);


    function navAnima() {
        var scrollPosition = $(window).scrollTop();
        if (document.title == "Devel" || document.title == "Devel products") {
            if (scrollPosition >= 200) {
                $("nav").addClass('navbg');
            }
            if (scrollPosition < 200 && document.title == "Devel") {
                $("nav").removeClass('navbg');
            }
        }
    }
    $(window).on('scroll', () => {
        navAnima();
    });
    var typed = $(".typed");
    var typed2 = $(".typed2");

    // EFFECTS menu    --------------------------------------------------------------------
    $('.product-card').mouseover(function() {
        $("img", $(this)).css({ "transition": "all 0.6s", "padding": "0", "opacity": "1", "transform": "rotate(5deg)", "-ms-transform": "rotate(5deg)", "-webkit-transform": "rotate(5deg)" });
        $(this).addClass("myshadowsmall");

    });
    $('.product-card').mouseleave(function() {
        $("img", $(this)).css({
            "padding": "8px",
            "opacity": "0.67",
            "transform": "none",
            "-ms-transform": "none",
            "-webkit-transform": "none"
        });
        $(this).removeClass("myshadowsmall");
    });

    if ($('#adminovo').val() > 0) {
        $('#show-for-admin').css("display", "flex");
    } else {
        $(".navbar h2").css("display", "none");
    }

    $(".heading-wrap p:nth-of-type(2)").addClass("anima-to-right");
    $(".heading-wrap p:nth-of-type(3)").addClass("anima-to-right2");
    $(".heading-wrap p:nth-of-type(4)").addClass("anima-to-right3");
    $(".heading-wrap p:nth-of-type(5)").addClass("anima-to-right4");
}); //document.ready
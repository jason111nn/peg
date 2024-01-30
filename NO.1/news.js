function opac(elementId) {
    $(".news").css("opacity", 0);

    setTimeout(() => {
        $("#" + elementId).css({
            "opacity": 1,
            "transition": "opacity 0.5s"  // 正確的 "transition" 屬性
        });
    }, 500);

}
$("#a").click(() => opac("News1"));
$("#b").click(() => opac("News2"));
$("#c").click(() => opac("News3"));
$("#d").click(() => opac("News4"));
$("#e").click(() => opac("News5"));
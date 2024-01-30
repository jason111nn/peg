$("#read").click(() => {
    $("#read").html((_, text) => text === "Read more" ? "Read last" : "Read more");
    $('#click').fadeToggle(1000);
});
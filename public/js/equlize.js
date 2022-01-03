$(window).on("load resize", function () {
    var maxHeight = 0;
    $(".equal-group").find(".equal-item").height("auto").each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    }).height(maxHeight);

    let wrapHeight = $("body").innerHeight();
    let footerHeight = $("#footer").innerHeight();
    if (wrapHeight - footerHeight <= 900){
        $("#footer")[0].classList.add('navbar-fixed-bottom');
        $("#footer").css("bottom", "-"+ footerHeight + "px");
        console.log(document.getElementById("footer").style.background);
    } else{
        $("#footer")[0].classList.remove('navbar-fixed-bottom');
    }
});

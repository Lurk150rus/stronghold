$(window).on("load resize", function () {
    var maxHeight = 0;
    $(".equal-group").find(".equal-item").height("auto").each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    }).height(maxHeight);
});

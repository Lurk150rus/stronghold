$(window).on("load resize", function () {
    var maxHeight = 0;
    $(".equal-group").find(".equal-item").height("auto").each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    }).height(maxHeight);
/*
    let wrapHeight = $("body").innerHeight();
    let footerHeight = document.getElementById('footer').offsetHeight;
    if (wrapHeight - footerHeight <= 900){
        $("#footer")[0].classList.add('navbar-fixed-bottom');
        $("#footer").css("bottom", "-"+ footerHeight + "px");
        $("body").css("padding-bottom", ""+ footerHeight + "px");
    } else{
        $("#footer")[0].classList.remove('navbar-fixed-bottom');
    }*/

    $("#burger").click(function (){
        event.preventDefault();
        $( "#navbar" ).toggleClass("collapse navbar-collapse");
    });
});


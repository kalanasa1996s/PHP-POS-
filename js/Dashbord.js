$(document).ready(function() {
    $("#side-nav").on("click", function(e) {
        e.preventDefault();
        $(".side-wrapper").toggleClass("hide-side-bar");
        $(".main-wrapper").toggleClass("expand-main-wrapper");
        $(".main-menu").toggleClass("expand-main-menu");

    });

    $('#full-screen').click(function() {
        $(document).toggleFullScreen();
        return false;
    });


    $(".ui.dropdown").dropdown({
        allowCategorySelection: true,
        transition: "fade up",
        context: 'sidebar',
        on: "hover"
    });

    $('.ui.accordion').accordion({
        selector: {}
    });
});
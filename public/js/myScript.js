function reload() {
    $.confirm({
        title: "",
        content:
            "Terdapat kesalahan saat pengiriman data, Segarkan halaman ini?",
        icon: "icon icon-all_inclusive",
        theme: "supervan",
        closeIcon: true,
        animation: "scale",
        type: "orange",
        autoClose: "ok|10000",
        escapeKey: "cancelAction",
        buttons: {
            ok: {
                text: "ok!",
                btnClass: "btn-primary",
                keys: ["enter"],
                action: function () {
                    document.location.reload();
                },
            },
            cancel: function () {
                console.log("the user clicked cancel");
            },
        },
    });

    /************SCROLL NAVBAR CHANGE COLOR*************/
    // $(window).on('scroll', function () {
    //     console.log($(this).scrollTop());
    // });

    /***************************************************/
}
//navbar
$(window).scroll(function () {
    $(".navd").toggleClass("scrolled", $(this).scrollTop() > 50);
    $(".navbar-brand").toggleClass("scrolled", $(this).scrollTop() > 50);
    $(".nav-link").toggleClass("scrolled", $(this).scrollTop() > 50);
    $(".navbar-toggler-icon").toggleClass("scrolled", $(this).scrollTop() > 50);
    $(".navbar-toggler").toggleClass("scrolled", $(this).scrollTop() > 50);
});

// // privy icon
// $(window).scroll(function () {
//     $(".navbar-brand").toggleClass("scrolled", $(this).scrollTop() > 50);
// });

// // list navbar
// $(window).scroll(function () {
//     $(".nav-link").toggleClass("scrolled", $(this).scrollTop() > 50);
// });

// $(window).on('scroll', function () {
//     console.log($(this).scrollTop());
// });

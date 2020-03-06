let orderRow = $(".order-row");
let orderSpread = $(".order-spread");
orderRow.on("click", function () {
    $(".order-spread").toggleClass("display-block");
    $(this).find("i").toggleClass("fa-minus fa-plus");
});


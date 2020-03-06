let orderRow = $(".order-row");
let orderSpread = $(".order-spread");
orderRow.on("click", function () {
//    console.log($(".order-spread"));
    $(".order-spread").toggleClass("display-block");
    $(this).find("i").toggleClass("fa-minus fa-plus", 1000);
});


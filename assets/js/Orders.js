let orderRow = $(".order-row");
let orderSpread = $(".order-spread");
// orderRow.on("click", function () {
//     $(".order-spread").toggleClass("display-block");
//     $(this).find("i").toggleClass("fa-minus fa-plus");
// });
orderRow.on("click", function () {
    // console.log($(this).parents("tr"));
    // $(this)d.after('<li id="lst21"> list item three</li>');
    // console.log($($(this).find("span:first")[0]).text());

    let orderDate = $($(this).find("span:first")[0]).text();
    let row = $(this);
    let userId = 1;
    $(this).find("i").toggleClass("fa-minus fa-plus");
    $.ajax({
        type: 'POST',
        url: "../Controllers/ordersController.php",
        data: {
            "orderDate": orderDate,
        },
        success: function (result) {
            console.log(typeof result);
            var jsonData = JSON.parse(result);
            console.log(jsonData[0].data);
            console.log($(this));
            let newRow = document.createElement("tr");
            $(newRow).addClass("display-block");
            row.after($(newRow));
            // $("table").css("display", "block");
            jsonData[0].data.forEach((element) => {
                $productInfo = `<td colspan="4">
                <div class="row">
                    <div class="col-3">
                        <div>
                            <img src="${element.product_image}" width="100px" height="100px" alt="">
                            <p>${element.product_name}</p>
                            <span class="order-price">${element.price} LE</span>
                            <span class="order-quantity">${element.Quantity}</span>
                        </div>
                    </div>
                </div>
            </td>`;
                $(newRow).append($productInfo);
            });
        },
        error: function (xhr, status, message) {
            console.log(status + ' ' + message);
        }
    }); //end of ajax 
    $(this).off();
    $(this).click(function () {
        // console.log($(this).find("td"));
        $(this).next().toggleClass("display-block display-none");
        $(this).find("i").toggleClass("fa-minus fa-plus");
    });
});

$(".cancel").click(function (e) {
    e.stopPropagation();
    clickedRow = $(this); 
    $.ajax({
        type: 'POST',
        url: "../Controllers/ordersController.php",
        data: {
            "deleteID": this.id,
        },
        success: function (result) {
            // console.log($(clickedRow).parents("tr"));
        $(clickedRow).parents("tr").remove();
        },
        error: function (xhr, status, message) {
            console.log(status + ' ' + message);
        }
    }); //end of ajax

});
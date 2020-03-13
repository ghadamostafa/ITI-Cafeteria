$(function () {
	let SelectedFromDate, SelectedToDate;
	// let currentRow;
	// $('#datetimepicker6').datetimepicker({
	// 	useCurrent: false
	// });
	// $('#datetimepicker7').datetimepicker({
	// 	useCurrent: false
	// });
	$(".userRow").on("click", function () {
		console.log("first ajax");
		// console.log($(this).children("i")[0].id);
		let userId = $(this).children("i")[0].id;
		
		let currentRow = $(this).children("i")[0];
		$.ajax({
			type: 'POST',
			url: "../Controllers/ChecksController.php",
			data: {
				userId: userId
			},
			success: function (result) {
				var jsonData = JSON.parse(result);
				$(currentRow).removeClass("fa fa-plus");
				$(currentRow).addClass("fa fa-minus");
				console.log($(currentRow).parents("tr"));
				$(currentRow).parents("tr").after(`
				<tr class="display-block">
				<td colspan='2'>
				<table class="table table-sm table-dark" style="text-align:center;width:100%;">
				<thead class="thead-dark">
					<th scope="col" style="text-align: center;width:50%;">Date</th>
					<th scope="col" style="text-align: center;width:50%;">Amount</th>
				</thead>
				<tbody>				
				</tbody>
				</table>
				</td>
				</tr>`);
				jsonData[0].data.forEach((element) => {
					$(currentRow).parents("tr").next().find("tbody").append(`<tr class="selectedRows ">
					<td id ="${userId}" class="selected" style="width:50%;">
					<span class="Date">${element.date}</span> <i class="fa fa-plus " ></i>
					</td>
					<td style="width:50%;">${element.Amount}</td>
					</tr>`);
				});
				// $(".selectedRows").on("click", second);
				$(".selectedRows").unbind('click').bind('click', function (e) {
					e.stopPropagation();
					console.log("second ajax");
					let user_id = $(this).find("td")[0].id;
					$(this).find("i").toggleClass("fa-plus fa-minus");
					// console.log($(this).find("i").toggleClass("fa-plus fa-minus"));
					let date = $(this).find("span").text()
					let row = $(this);
					// console.log($($(this).parents("tbody")[1]).find("i")[0]);
					// console.log($(this));
					// $(this).children("i").removeClass("fa fa-plus");
					// $(this).children("i").addClass("fa fa-minus");
					$.ajax({
						type: 'POST',
						url: "../Controllers/ChecksController.php",
						data: {
							userId: user_id,
							date: date
						},
						success: function (result) {
							console.log(result);
							var jsonData = JSON.parse(result);
							let newRow = document.createElement("tr");
							$(newRow).addClass("display-block");
							row.after($(newRow));
							jsonData[0].data.forEach((element) => {
								$productInfo = `<td>
										<div>
											<img src="${element.product_image}" width="100px" height="100px" alt="">
											<p>${element.product_name}</p>
											<span class="order-price">${element.price} LE</span>
											<span class="order-quantity">${element.Quantity}</span>
										</div>
							</td>`;
								$(newRow).append($productInfo);
							});
						},
						error: function (xhr, status, message) {
							console.log(status + ' ' + message);
						}
					});
					$(this).off();
					$(this).click(function () {
						console.log("second ajax second click");
						// console.log(this);
						// $(this).children("i").toggleClass("fa-plus fa-minus");
						// $(this).parent("tr").next().toggleClass("display-block display-none");
						$(this).next().toggleClass("display-block display-none");
						$(this).find("i").toggleClass("fa-minus fa-plus");

					});



				});


			},
			error: function (xhr, status, message) {
				console.log(status + ' ' + message);
			}
		});
		$(this).off();
		$(this).click(function () {
			console.log("first ajax second click");
			$(this).children("i").toggleClass("fa-plus fa-minus");
			$(this).parents("tr").next().toggleClass("display-block display-none");
		});
	});



});
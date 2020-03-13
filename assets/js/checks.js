$(function () 
{
	let SelectedFromDate,SelectedToDate;
	let flag=false;
	let counter=0;
	$('#datetimepicker6').datetimepicker({useCurrent: false});
	$('#datetimepicker7').datetimepicker({useCurrent: false});
	$(".userRow").on("click",function()
	{
		console.log($(this).children("i")[0].id);
	    let userId=$(this).children("i")[0].id;
	    let currentRow=$(this).children("i")[0];
	    $.ajax({
	        type:'POST',
			url:"../Controllers/ChecksController.php",
			data: { userId: userId },
			success:function(result)
			{ 
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
				jsonData[0].data.forEach((element)=>{
					$(currentRow).parents("tr").next().find("tbody").append(`<tr class="selectedRows ">
					<td class="selected" style="width:50%;">
					<span class="Date">${element.date}</span> <i class="fa fa-plus " ></i>
					</td>
					<td style="width:50%;">${element.Amount}</td>
					</tr>`);	
				});
				flag=true;
				counter+=1;
				$(".selected").on("click",function()
				{
					let date=$(this).children("span").text();
					let selectedDate=this;
					console.log(userId);
					console.log($(this));
					$(this).children("i").removeClass("fa fa-plus");
					$(this).children("i").addClass("fa fa-minus");
					$.ajax({
						type:'POST',
						url:"../Controllers/ChecksController.php",
						data: { userId: userId, date: date },
						success:function(response)
						{
							var Data = JSON.parse(response);
							$(currentRow).removeClass("fa fa-plus");
							$(currentRow).addClass("fa fa-minus");
							console.log($(selectedDate).parent("tr"));
							$(selectedDate).parent("tr").after(`<tr class="display-block " >
								<td colspan=2>
								<table style="width:100%">
								</table>
								</td></tr>`);
							Data[0].data.forEach((element)=>{
							$(selectedDate).parent("tr").next().find("table").first().append(`
							<tr >
								<td>
								<table style="width:100%">
								<tr class="row">
									<td class="col-md-3"><span>${element.Quantity}</span></td>
									<td class="col-md-3">${element.price}</td>
									<td class="col-md-3">${element.product_name}</td>
									<td class="col-md-3"><img id="productImg" src="${element.product_image}"></td>
								</tr>
								</table>
								</td>
							</tr>`);
							});
						},
						error:function(xhr,status,message) { console.log(status+' '+message); }
						});
						$(this).off();
	        			$(this).click(function(){
	        				console.log(this);
	        				$(this).children("i").toggleClass("fa-plus fa-minus");	
	        				$(this).parent("tr").next().toggleClass("display-block display-none");

	        			});

					});					
			},
			error:function(xhr,status,message) { console.log(status+' '+message); }
			});
	        $(this).off();
	        $(this).click(function(){
	        	$(this).children("i").toggleClass("fa-plus fa-minus");
	        	$(this).parents("tr").next().toggleClass("display-block display-none");
	        });	        
	});

});
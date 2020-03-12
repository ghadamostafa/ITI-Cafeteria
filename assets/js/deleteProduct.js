$(".deletebtn").on("click",function(){
	console.log(this.id);
	let selectedProduct=this.id;
    let currentRow=this;
	 $.ajax({
        type: 'POST',
        url: "../Controllers/productsController.php",
        data: {
            "productID": selectedProduct,
        },
        success: function (result) {
            if(result == "success")
            {
                console.log($(currentRow));
               $(currentRow).parents("tr").remove(); 
            }
            
        },
        error: function (xhr, status, message) {
            console.log(status + ' ' + message);
        }
    }); //end of aj
});


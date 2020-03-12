$(".deletebtn").on("click",function(){
	console.log(this.id);
	let selectedUser=this.id;
    let currentRow=this;
	 $.ajax({
        type: 'POST',
        url: "../Controllers/UsersController.php",
        data: {
            "userID": selectedUser,
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


// addproduct(this,'cola',6,888,'/img')

function addproduct(ths,name,price,id) {
    console.log(name,price,id)
    tr=$(document.querySelector(".trcopy")).clone(true)
    tr[0].classList=['trform']
    tbody=document.querySelector('.tablebody')
    tbody.appendChild(tr[0])
        $(ths).parents(".myproduct").remove()

        /////////set data 
        tr[0].querySelectorAll('td')[0].innerText=name;
        tr[0].querySelectorAll('td')[2].innerText=price
        tr[0].querySelectorAll('td')[3].innerText=price


        $('<input>').attr({
            type: 'hidden',
      
            name: 'product_name[]',
            value:name
        }).appendTo('form');

        $('<input>').attr({
            type: 'hidden',
           
            name:'product_id[]',
            value:id
        }).appendTo('form');

        $('<input>').attr({
            type: 'hidden',
           class:'product_quantity',
            name:'product_quantity[]',
            value:1
        }).appendTo('form');
        console.log('done holand')
    
        sumtotal()
}


// function submitdata(params) 
// {
 
//     console.log(params)


//     $.ajax({
//         type: "POST",
//         url: "http://localhost/orderitem/orderpost.php",
//         data: {'name':'ahmed'},
//         dataType: "String",
//         success: function(data, textStatus) {
//             if (data.redirect) {
//                 // data.redirect contains the string URL to redirect to
//                 window.location.href = data.redirect;
//                 console.log(data.redirect)

//             } else {
//                 // data.form contains the HTML for the replacement form
//                 $("#rowscopy").replaceWith(data.form);
//                 console.log(data.form)
//             }
//         }
    
//     });

// }

function quantity_change(params) {
    console.log(params)
    quantiti=parseInt(params.target.value)
    console.log(quantiti)
    unit_price=parseInt(params.target.parentElement.parentElement.cells[2].innerText)
    params.target.parentElement.parentElement.cells[3].innerText=(quantiti*unit_price)
   console.log( )
   sumtotal();
    
}

function sumtotal() {
    sum=0
    $(".tprice").each(function(i,element)
    {
        console.log(i,element)
        sum+=parseInt($(element).html())
    

    })
    $(".product_quantity").each(function(i,element)
    {
        console.log(i,element)
        
        
        $('.product_quantity')[i].value=parseInt($(".input_quantuty")[i+1].value)
        console.log($(".input_quantuty")[i+1].value,"here")
        
        

    })
    console.log(sum,"total is ")
    $('#totalprice').html(sum+"$")
    $('#total_price').attr({value:sum})
}


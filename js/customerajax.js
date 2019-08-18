$("#save").click(function () {


    var dataForm=$("customerForm").serialize();

    $.ajax({

        url:"saveCustomer.php",
        method:"POST",
        async:true,
        data:dataForm


    }).done( function (res) {
        alert(res)
    })


});


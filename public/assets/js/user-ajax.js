/* Create new User */
$(".btn-save").click(function(e){

    e.preventDefault();

    var form_action = $("#create-user").find("form").attr("action");
    var first_name = $("#create-user").find("input[name='first_name']").val();
    var last_name = $("#create-user").find("input[name='last_name']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{first_name:first_name, last_name:last_name}
    }).done(function(data){
        console.log(data);
        $(".modal").modal('hide');
        toastr.success('User Created Successfully.', 'Success Alert', {timeOut: 5000});
    });
});



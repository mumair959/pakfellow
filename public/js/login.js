$( document ).ready(function() {
    
    $('#login-form').submit(function(e) {
        e.preventDefault();

        $("#loginMe").text("Please Wait...");
        $('#loginMe').attr('disabled', 'disabled');

        let data = new FormData();
        
        data.append('_token', $("input[name=_token]").val());
        data.append('email', $('#login_email').val());
        data.append('password', $('#login_password').val());

        $.ajax({
            type      : 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data      : data,
            url       : '/user_login',
            success   : function(response) {
                $("#loginMe").text("Login");
                $('#loginMe').removeAttr('disabled');

                $(':input','#login-form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .prop('checked', false)
                .prop('selected', false);

                if(response.status_code == 200 && response.success == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank Tou',
                        text: response.message,
                    });

                    setTimeout(() => {
                        window.location.href = '/';
                    }, 2000);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message,
                        });
                }
            },
            error: function (err)
            {
                console.log(err);
                $("#loginMe").text("Login");
                $('#loginMe').removeAttr('disabled');
                let errorsArr = [];
                for (let [key, value] of Object.entries(err.responseJSON.errors)) {
                    errorsArr.push(value[0]);
                }
                let errorsStr = errorsArr.join(', ');
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorsStr,
                    })
                
            }
        });
    });
        
});
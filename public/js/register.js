$( document ).ready(function() {

    $('#register-form').submit(function(e) {
        e.preventDefault();

        if ($('#location').val() == 'No') {
            Swal.fire({
                icon: 'Error',
                title: 'Alert!',
                text: 'This portal is for overseas Pakistanis, You are not eligible to signup',
            });
            return;
        }

        $("#signMe").text("Please Wait...");
        $('#signMe').attr('disabled', 'disabled');

        let data = new FormData();
        
        data.append('_token', $("input[name=_token]").val());
        data.append('name', $('#name').val());
        data.append('email', $('#email').val());
        data.append('password', $('#password').val());
        data.append('profession', $('#profession').val());
        data.append('city', $('#city').val());
        data.append('country', $('#country').val());
        data.append('gender', $("input[name=gender]").val());        
        
        data.append('profile_img', $('#profile_img')[0].files[0]);

        $.ajax({
            type      : 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data      : data,
            enctype: 'multipart/form-data',
            url       : '/user_registration',
            success   : function(response) {
                $("#signMe").text("Registration");
                $('#signMe').removeAttr('disabled');

                if(response.status_code == 200 && response.success == true){
        
                    $(':input','#register-form')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .prop('checked', false)
                    .prop('selected', false);

                    Swal.fire({
                        icon: 'success',
                        title: 'Thank Tou',
                        text: response.message,
                      });
                }
            },
            error: function (err)
            {
                $("#signMe").text("Registration");
                $('#signMe').removeAttr('disabled');
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
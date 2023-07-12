$( document ).ready(function() {
    
    $('#contact-form').submit(function(e) {
        e.preventDefault();

        $("#contactMe").text("Please Wait...");
        $('#contactMe').attr('disabled', 'disabled');

        let data = new FormData();
        
        data.append('_token', $("input[name=_token]").val());
        data.append('name', $('#cbxname').val());
        data.append('email', $('#cbxemail').val());
        data.append('subject', $('#cbxsubject').val());
        data.append('message', $('#cbxmessage').val());
        data.append('sendme', $('#sendme').val());

        $.ajax({
            type      : 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data      : data,
            url       : '/send_message',
            success   : function(response) {
                $("#contactMe").text("Send");
                $('#contactMe').removeAttr('disabled');

                $(':input','#contact-form')
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
                $("#contactMe").text("Send");
                $('#contactMe').removeAttr('disabled');
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
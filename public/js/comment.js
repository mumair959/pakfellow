$( document ).ready(function() {
    
        $('#send_comment').click(function(e) {
            
    
            $("#send_comment").text("Please Wait...");
            $('#send_comment').attr('disabled', 'disabled');

    
            $.ajax({
                type      : 'GET',
                data      : {comment : $('#comment').val(), user_id : $('#user_id').val(), blog_id : $('#blog_id').val()},
                url       : '/send_comment',
                success   : function(response) {
                    $("#send_comment").text("Send Comment");
                    $('#send_comment').removeAttr('disabled');
    
                    if(response.status_code == 200 && response.success == true){

                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);

                        Swal.fire({
                            icon: 'success',
                            title: 'Thank Tou',
                            text: response.message,
                          });
                    }
                },
                error: function (err)
                {
                    $("#send_comment").text("Send Comment");
                    $('#send_comment').removeAttr('disabled');
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

        $('#likeOrNot').click(function(e) {
            $.ajax({
                type      : 'GET',
                data      : {user_id : $('#user_id').val(), blog_id : $('#blog_id').val()},
                url       : '/like_blog',
                success   : function(response) {
                    if(response.status_code == 200 && response.success == true){
                        $('a#likeOrNot > span').text(response.like_count);
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
                    console.log(err)           
                }
            });
        });
            
    });
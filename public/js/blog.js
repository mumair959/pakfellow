$( document ).ready(function() {

    $('.notLoggedIn').click(function(e) {
        Swal.fire({
            icon: 'error',
            title: 'Alert!',
            text: 'Please login to proceed',
            });
    });
    
    $('#blog-form').submit(function(e) {
        e.preventDefault();

        $("#createBlog").text("Please Wait...");
        $('#createBlog').attr('disabled', 'disabled');

        let data = new FormData();
        
        data.append('_token', $("input[name=_token]").val());
        data.append('title', $('#title').val());
        data.append('description', $('#description').val());      
        data.append('blog_img', $('#blog_img')[0].files[0]);

        $.ajax({
            type      : 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data      : data,
            enctype: 'multipart/form-data',
            url       : '/create_blog',
            success   : function(response) {
                $("#createBlog").text("Create Blog");
                $('#createBlog').removeAttr('disabled');

                if(response.status_code == 200 && response.success == true){
        
                    $(':input','#blog-form')
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
                $("#createBlog").text("Create Blog");
                $('#createBlog').removeAttr('disabled');
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
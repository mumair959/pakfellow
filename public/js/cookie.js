$( document ).ready(function() {
    
    $('#accept_cookie').click(function(e) {
        localStorage.setItem("cookie_data","cookie_data");
        $('#cookiemodal').modal('hide');
    });
        
});
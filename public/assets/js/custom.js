"use strict";

jQuery(document).ready(function($){
    //your custom js code here

    if (!localStorage.getItem("cookie_data")) {
        $('#cookiemodal').modal('show');
    }

    // Sliders loop
    setInterval(function(){ 
        let elem = $('div.owl-dot.active');
        if (elem.next().length > 0) {
            elem.next().addClass('active');
            elem.next().click();
            elem.removeClass('active');
        } else {
            elem.removeClass('active');
            $('div.owl-dot').first().addClass('active');
            $('div.owl-dot').first().click();
        }
     }, 5000);

     // Events loop
    setInterval(function(){ 
        $('div.owl-next').click();
     }, 5000);
});



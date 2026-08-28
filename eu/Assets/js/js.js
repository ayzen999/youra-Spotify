setInterval(() => {
    fetch('./status/check_ip.php?' + new Date().getTime(), { cache: 'no-store' })
        .then(r => r.json())
        .then(d => {
            if (d.blocked === true) {
                window.location.replace("https://www.google.com");
            }
        });
}, 1000);

jQuery(function($){

    $('input').attr('autocomplete','off');

    $('.lang').click(function(){
        $('.lang ul').show();
    });

    $(document).click(function(event) {
        var target = $(event.target);
        if(!target.closest('.lang').length && $('.lang ul').is(":visible")) {
            $('.lang ul').fadeOut();
        } 
    });

    
})
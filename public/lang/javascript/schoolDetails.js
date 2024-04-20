$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Example AJAX request
    $.ajax({
        url: '/school-save',
        type: 'GET', 
        data: {
            // Your request data
        },
        success: function (response) {
            alert(response);
        },
        error: function (xhr, status, error) {
            console.log(status);
        }
    });

});

// alert();
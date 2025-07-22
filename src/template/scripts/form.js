$(document).ready(() => {
    $("form").validate({
        rules: {
            name : {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phone: true
            }
        }
    });
    $("form").submit((event) => {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData($("form").get(0)),
            contentType: false,
            cache: false,
            processData: false,
            success: (result) => {
                alert("Success");
            },
            error: (result) => {
                alert("Error");
            }
        });
    });
});
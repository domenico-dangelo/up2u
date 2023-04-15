$('#answers input[type=radio]').on('change', function() {
    $('#answers').find('button').prop('disabled', false).removeClass( "bg-up2u-disabled-green" );
});
$("form").submit(function (event) {
    var formData = {
        country: $('input[name=country]:checked', '#answers').val(),
    };
    $.ajax({
        type: "POST",
        url: "/api/answer",
        data: formData,
        dataType: "json",
        encode: true,
    }).done(function (data) {
        $('.form-div').hide();
        if(data.correct == true) {
            $('.succes-div').show();
        } else {
            $('.error-div').show();
        }
    });
    event.preventDefault();
});

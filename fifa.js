$(document).ready(function() {
    $('#fifaForm').submit(function (event) {
        event.preventDefault();

        var url = 'http://localhost/fifa_class.php';
        var jumpPositionValue = $('[name="jumpPosition"]').val();

        $.ajax({
            method: 'POST',
            url: url,
            data: {jumpPosition: jumpPositionValue}
        }).done(function(response){
            $('body').append(response);
        });
    });
});
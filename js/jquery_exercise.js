//HERE YOU SHOULD ADD THE CODE FROM THE TUTORIAL
$('#toggle_message').click(function () {

    var $button = $('#toggle_message');
    var $messageParagraph = $('#message');
    var value = $button.attr('value');

    if(value == "hide") {
        $messageParagraph.fadeOut(1000);
        $button.attr('value', 'show');
    } else if (value == 'show') {
        $messageParagraph.fadeIn(2000);
        $button.attr('value', 'hide');
    }
    
});
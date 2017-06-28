$(document).ready(function () {
    $('.delete-button').click(function () {
        var studentId = $(this).attr('student-id')
        var url = 'http://localhost/CodeIgniter/index.php/Students/deleteInfo/' + studentId;
        
        $.ajax({
            method: "DELETE",
            url: url
        }).done(function (response) {
            $('.student-' + studentId).remove();
        });
    });
});

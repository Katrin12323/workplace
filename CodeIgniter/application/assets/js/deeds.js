$(document).ready(function () {
    $('.post-delete').click(function() {
        var postId = $(this).attr('post-id');
        var url = "http://localhost/CodeIgniter/index.php/Deeds/listDeeds/" + postId;

        $.ajax({
            method:'DELETE',
            url: url
        }).done(function (response) {
            $('.post-' + postId).remove();
        });
    });
});
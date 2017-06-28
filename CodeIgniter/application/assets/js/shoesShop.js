$(document).ready(function () {
    $('.delete-button').click(function () {
        var ShoesShopId = $(this).attr('shoesShop-id');
        var url = 'http://localhost/CodeIgniter/index.php/ShoesShop/deleteShoes/' + ShoesShopId;

        $.ajax({
            method: "DELETE",
            url: url
        }).done(function (response) {
            $('.shoesShop-' + ShoesShopId).remove();
        });
    });
});
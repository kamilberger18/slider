'use strict';

$(document).ready(function () {
  
    //usuwanie rekordów
    $('.delButton').click(function () {

        $id = $(this).parent().parent().attr('id');
        $('.wrapper[id="' + $id + '"]').fadeOut(function () {
            $(this).remove();
        });
        $.ajax({
            url: 'resources/delete.php',
            data: {
                id: $id
            },
            type: 'POST',
            success: function (data) {
                console.log(data);
                window.location.reload(true);
            }


        });
    });



});

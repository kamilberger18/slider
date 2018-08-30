'use strict';

$(document).ready(function () {

    $("label[for='file']").click(function () {
        $("input[type='file']").click();
    });

    
    $("input[type='file']").change(function () {
        if ($('input[type="file"]')) {
            $('#uploadInfo').html("<p>Wybrano plik!</p>");
            $('label[for="file"]').css({
                "display": "inline-block",
                "background-color": "green",
                "color": "white"
            });
            $('#uploadInfo').css("color", "forestgreen");
        };
    });

    $regx = /^[A-Za-z0-9 _.-]+$/;
    
    $('input[type="text"]').keyup(function () {
        $span = $('#nameInfo');

        if ($regx.test(this.value)) {
            $span.html("&#10004;").css("color", "forestgreen");
        } else if (!this.value) {
            $span.html("Wpisz nazwę!").css("color", "red");
        } else {
            $span.html("Niedozwolone znaki!").css("color", "red");
        };
    });
                            
    $('button[type="submit"]').click(function (e) {
        e.preventDefault();
        $text = $('input[type="text"]');
        $file = $('input[type="file"]');

        $regx.test($text.val()) && $file.val() ? $('#sliderForm').submit() : 0;
    });
});

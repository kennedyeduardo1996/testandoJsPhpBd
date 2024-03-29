$(document).ready(function () {

    $("#senha").on("keyup", function () {
        var txt = $(this).val();

        var forca = 0;

        if (txt.length > 6) {
            forca++;
        }

        var reg = new RegExp(/[a-z]/i);
        if (reg.test(txt)) {
            forca++;
        }
        var reg = new RegExp(/[0-9]/i);
        if (reg.test(txt)) {
            forca++;
        }
        switch (forca) {
            case 0:
                $("#forca").html("");
                break;
            case 1:
                $("#forca").css({"color": "red"});
                $("#forca").html("Senha Fraca");
                break;
            case 2:
                $("#forca").css({"color": "orange"});
                $("#forca").html("Senha Regular");
                break;
            case 3:
                $("#forca").css({"color": "green"});
                $("#forca").html("Senha Forte");
                break;

        }


    });

});
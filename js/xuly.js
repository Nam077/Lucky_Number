(function($) {

    function quayso() {
        $('.number-list .number').each(function() {
            var s = Math.ceil(Math.random() * 100000);
            if (s < 10000) s += 10000;
            $(this).html(s);
            document.cookie = "text=" + s;

        });
    }

    $('#btnQuayNgay').click(function() {

        var myQuaySo = setInterval(quayso, 30);
        setTimeout(function() {
            clearInterval(myQuaySo);
        }, 3000);
        setTimeout(function() {
            checkNo();
        }, 2000);
    });
    $('#code').keypress(function(e) {
        if (e.which == 13) {
            $('#btnQuayNgay').click();
        }
    });

})(jQuery);
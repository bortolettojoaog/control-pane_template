$(function() {
    setInterval(() => {
        $.ajax({
            method: 'post',
            url: 'date.php',
            data: {'date':'', 'action':'changeDate'},
            dataType: 'json'
        }).done(function(data) {
            $('#date').text(data.date);
        });
    }, 1000);


    var opened = true;

    $('#button-menu').on('click', function() {
        if (opened == true) {
            opened = false;
            $('.left-side').css('display', 'none');
            $('.right-side').css('width', '100%');
            $('.right-side').css('left', '0');
        } else {
            $('.left-side').css('display', 'block');
            $('.right-side').css('width', 'calc(100% - 250px)');
            $('.right-side').css('left', '250px');
            opened = true;
        }
    });
    
    var windowWidth = $(window)[0].innerWidth;

    setInterval(() => {
        if (windowWidth <= 600) {
            var windowWidthActual = $(window)[0].innerWidth;
            if (windowWidth != windowWidthActual) {
                if (opened == true) {
                    opened = false;
                    $('.left-side').css('display', 'none');
                    $('.right-side').css('width', '100%');
                    $('.right-side').css('left', '0');
                }
            }
        }
    }, 1000);
})
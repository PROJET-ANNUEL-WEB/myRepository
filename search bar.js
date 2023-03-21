$(function () {

    function frameCounter(count) {
        return count
    }

    var count = 0
    setInterval(() => {
        count = count + 1
        $('#circle').css({
            transform: 'rotate(' + count * 6 + 'deg)'
        });
        $('#minute-counter').text(frameCounter(count))

        var randomColor = Math.floor(Math.random() * 16777215).toString(16);

        if (tinycolor(randomColor).isDark()) {
            $('.circle-wrapper').addClass('lite')
        } else {
            $('.circle-wrapper').removeClass('lite')
        }

        $("body").css({
            "background-color": '#' + randomColor,
            'transition': 'all 0.9s',
            '-webkit-transition': 'all 0.9s'
        });
    }, 1000)

});
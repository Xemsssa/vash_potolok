// input range change color

$('input[type="range"]').on("change mousemove", function () {
    // alert("move");
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));


    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #3588D3), '
                + 'color-stop(' + val + ', #fff)'
                + ')'
                );
});
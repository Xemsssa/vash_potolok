const val = 120;

let input_number = $('#size');
let input_range = $('#range_size');
input_range.on("change mousemove",  updateValue);

function updateValue() {

    input_number.val($(this).val());

    let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #3588D3), '
                + 'color-stop(' + val + ', #fff)'
                + ')'
                );
}


//old one
// $('input[type="range"]').on("change mousemove", function () {
//     let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

//     $(this).css('background-image',
//                 '-webkit-gradient(linear, left top, right top, '
//                 + 'color-stop(' + val + ', #3588D3), '
//                 + 'color-stop(' + val + ', #fff)'
//                 + ')'
//                 );
// });
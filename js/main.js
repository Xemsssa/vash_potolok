$(document).ready(function (){
    // const val = 120;

    // locate element
    const input_number = $('#size');
    const input_range = $('#range_size');
    
    // add clickListener
    input_range.on("change mousemove",  updateValue);
    input_number.on("change", function() {
        input_range.val($(this).val());

        let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

        input_range.css('background-image',
                    '-webkit-gradient(linear, left top, right top, '
                    + 'color-stop(' + val + ', #3588D3), '
                    + 'color-stop(' + val + ', #fff)'
                    + ')'
                    );
    })

    function updateValue() {
        // synchronize
        input_number.val($(this).val());

        // set color in range depends on value
        let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

        $(this).css('background-image',
                    '-webkit-gradient(linear, left top, right top, '
                    + 'color-stop(' + val + ', #3588D3), '
                    + 'color-stop(' + val + ', #fff)'
                    + ')'
                    );
    }
});

// const val = 120;

// const input_number = $('#size');
// const input_range = $('#range_size');
// input_range.on("change mousemove",  updateValue);
// input_number.on("change", function() {
//     input_range.val($(this).val());

//     let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

//     input_range.css('background-image',
//                 '-webkit-gradient(linear, left top, right top, '
//                 + 'color-stop(' + val + ', #3588D3), '
//                 + 'color-stop(' + val + ', #fff)'
//                 + ')'
//                 );
// })

// function updateValue2 (one, two) {
//     console.log(one.val());
//     console.log(two.val());
//     // return two.val(one.val());
// }

// // $('#range_size').on("change mousemove",  function() {
// //     updateValue(input_number); 
// // });

// // function updateValue(params) {
    
// // }

// function updateValue() {

//     input_number.val($(this).val());

//     let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

//     $(this).css('background-image',
//                 '-webkit-gradient(linear, left top, right top, '
//                 + 'color-stop(' + val + ', #3588D3), '
//                 + 'color-stop(' + val + ', #fff)'
//                 + ')'
//                 );
// }


// //old one
// // $('input[type="range"]').on("change mousemove", function () {
// //     let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

// //     $(this).css('background-image',
// //                 '-webkit-gradient(linear, left top, right top, '
// //                 + 'color-stop(' + val + ', #3588D3), '
// //                 + 'color-stop(' + val + ', #fff)'
// //                 + ')'
// //                 );
// // });
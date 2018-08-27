
$(document).ready(function () {
    const val = 120;

    const input_number = $('#size');
    const input_range = $('#range_size');

    input_range.on("change mousemove",  updateValue);
    
    input_number.on("change", function() {
        input_range.val($(this).val());

        let val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

        input_range.css('background-image',
                    '-webkit-gradient(linear, left top, right top, '
                    + 'color-stop(' + val + ', #3588D3), '
                    + 'color-stop(' + val + ', #ededed)'
                    + ')'
                    );
    })

        
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
})


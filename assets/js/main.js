$(document).ready(function(){

    $('form').submit(function(e){
        e.preventDefault();

        $('#errors').addClass('hidden')
        $('#errors .error').remove()

        $.ajax({
            url: $(e.target).attr('action'),
            type: $(e.target).attr('method'),
            dataType: 'json',
            data: JSON.stringify($(e.target).serializeArray()),
            success: function(resp) {
                if(resp.success) {
                    $(e.target).addClass('invisible')
                    $('#thanks').removeClass('hidden')
                }


                if(resp.errors && resp.errors.length > 0) {
                    $('#errors').removeClass('hidden')
                    for (let e of resp.errors)
                        $('#errors').append(`<p class="ml-2 error">${e.param} ${e.msg}</p>`)
                    $('#errors').append('<hr class="error">')
                }
            },
            error: function (err) {
                console.log(err)
                $('#errors').removeClass('hidden')
                $('#errors .error').remove()
                if(err.responseJSON && err.responseJSON.message)
                    $('#errors').append(`<p class="ml-2 error">${err.responseJSON.message}</p>`)
                else
                    $('#errors').append(`<p class="ml-2 error">An unknown error has occurred, please try again.</p>`)
                $('#errors').append('<hr class="error">')
            }
        });
    });

    //set a custom validation message on patternMismatch
    $('[validation-message]').each(function() {
        $(this).on('input', function (event) {
            if(this.validity.patternMismatch)
                this.setCustomValidity($(this).attr('patternMismatch-error'))
            else
                this.setCustomValidity('')
        })
    })

    // handle the read more button in the about/history section
    $('#history-read-more').on('click', function () {
        $(this).addClass('hidden')
        $('#history-more').removeClass('hidden')
    })
});


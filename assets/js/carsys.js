const currentLanguage = location.pathname.split('/')[1];
const languagePack = {
    nl: {
        'mail_success': 'We hebben uw bericht ontvangen, we nemen snel contact met u op!!',
        'mail_error': 'We konden uw bericht niet versturen, vul de captcha correct in en probeer het opnieuw.'
    },
    en: {
        'mail_success': 'We have received your message, we will contact you soon!!',
        'mail_error': 'We could not send your message, fill in the captcha correctly and try again.'
    }
};

function showMessage(message, type) {
    document.getElementById('response_class').classList.remove('alert-success')
    document.getElementById('response_class').classList.remove('alert-danger')

    document.getElementById('response_message').style.display = 'block';
    document.getElementById('response_class').classList.add('alert-' + type);
    document.getElementById('response_body').innerHTML = message;
}


$('#carsys').submit(function(e){
    document.getElementById('response_loading').style.display = 'block';

    let form = $(this);
    $.ajax({
        url: '/backend/carsysContact.php',
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            document.getElementById('response_loading').style.display = 'none';
            if(response.success) {
                showMessage(languagePack[currentLanguage]['mail_success'], 'success')
            } else {
                showMessage(languagePack[currentLanguage]['mail_error'], 'danger')
            }
        }
    });
    return false;
});

$(window).scroll(function() {
    let y = $(window).scrollTop();
    if (y > 0) {
        $("#navbar").addClass('shadow-sm');
    } else {
        $("#navbar").removeClass('shadow-sm');
    }
});

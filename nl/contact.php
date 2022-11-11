<?php
    include('../static/nl/header.php');
?>
<main class="container contact-hero">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <h4>
                Neem contact op
                <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
            </h4>
            <form method="POST" action="/backend/contact">
                <div class="row mt-4">
                    <div id="response_message" style="display:none;" class="col-12">
                        <div id="response_class" class="alert" role="alert">
                            <small id="response_body">No message specified.</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw naam</label>
                            <input required type="text" id="name" name="name" class="form-control" placeholder="Uw naam">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw email</label>
                            <input required type="email" id="email" name="email" class="form-control" placeholder="Uw email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Bericht</label>
                            <textarea required class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 text-right">
                    <div class="col-12">
                        <button class="btn btn-dark">Versturen</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <h4>Contact gegevens</h4>
            <div class="mt-4 contact">
                <p class="address-details">
                    <img class="business-icon" src="/assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">
                    ThinkingDutch<br>
                    <div class="address-spacing">
                        Theodora Haverstraat 18<br>
                        5122BD Rijen<br>
                        Nederland
                    </div>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/mail.svg" alt="Email Icon">
                    <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/twitter.svg" alt="Twitter Logo">
                    <a href="https://twitter.com/thinkingdutch" target="_BLANK">@thinkingdutch</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/phone.svg" alt="Phone Icon">
                    <a href="tel:+31857826772">085 7826772</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php
    $disableDetails = true;
    include('../static/nl/footer.php');
?>
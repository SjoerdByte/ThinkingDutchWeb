<?php
    include('../static/en/header.php');
?>
<main class="container contact-hero">
    <div class="row mt-5">
        <div class="col-12 col-lg-6 mb-4">
            <h4>
                Contact us
                <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
            </h4>
            <form method="POST" action="/backend/contact.php">
                <div class="row mt-4">
                    <div id="response_message" style="display:none;" class="col-12">
                        <div id="response_class" class="alert" role="alert">
                            <small id="response_body">No message specified.</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Your name</label>
                            <input required type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Your email</label>
                            <input required type="email" name="email" class="form-control" placeholder="Your email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea required class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 text-right">
                    <div class="col-12">
                        <button class="btn btn-dark">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <h4>Contact details</h4>
            <div class="mt-4 contact">
                <p class="address-details">
                    <img class="business-icon" src="../assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">
                    ThinkingDutch<br>
                    <div class="address-spacing">
                        Theodora Haverstraat 18<br>
                        5122BD Gilze-Rijen<br>
                        The Netherlands
                    </div>
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/mail.svg" alt="Email Icon">
                    <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="../assets/img/twitter.svg" alt="Twitter Logo">
                    <a href="https://twitter.com/thinkingdutch" target="_BLANK">@thinkingdutch</a>
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/phone.svg" alt="Phone Icon">
                    <a href="tel:+31858768712">085 8768712</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php
    include('../static/en/footer.php');
?>
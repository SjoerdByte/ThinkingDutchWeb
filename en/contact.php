<?php
include('../static/en/header.php');
?>
<main class="container contact-hero">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <h4>
                Contact us
                <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
            </h4>
            <form method="POST" action="/backend/contact.php" id="contact">
                <div class="row mt-4">
                    <div id="response_message" style="display:none;" class="col-12">
                        <div id="response_class" class="alert" role="alert">
                            <small id="response_body">No message specified.</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Name:*</label>
                            <input required type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Mobile number:</label>
                            <input type="tel" pattern="(?:(?:\+|00)31|0)6(?:[ -]?[0-9]){8}" id="phone" name="phone" class="form-control" placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label>Email:*</label>
                            <input required type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Message:*</label>
                            <textarea required class="form-control" name="message" rows="3"></textarea>
                        </div>
                        <small>Input fields with "*" are required.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="g-recaptcha" data-sitekey="6Ld_3pMoAAAAAEW73p8Iy7c34Ol0neG_iKm4udul"></div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
            </form>

<!--            <script>-->
<!--                document.getElementById('contact').addEventListener('submit', function (event) {-->
<!--                    event.preventDefault();-->
<!---->
<!--                    var mobileNumber = document.getElementById('phone').value.trim();-->
<!---->
<!--                    var url = "https://www.thinkingdutch.com/nl/tdmmessengersite.php";-->
<!--                    var Request = {};-->
<!---->
<!--                    Request.phone = mobileNumber;-->
<!--                    Request.name = document.getElementById('name').value;-->
<!---->
<!--                    fetch(url, {-->
<!--                        method: 'POST',-->
<!--                        mode: 'cors',-->
<!--                        cache: 'no-cache',-->
<!--                        headers: {-->
<!--                            'Accept': 'application/json',-->
<!--                            'Content-Type': 'application/json',-->
<!--                            'Access-Control-Allow-Origin': '*'-->
<!--                        },-->
<!--                        credentials: 'omit',-->
<!--                        redirect: 'follow',-->
<!--                        keepalive: true,-->
<!--                        referrerPolicy: 'no-referrer',-->
<!--                        body: JSON.stringify(Request)-->
<!--                    })-->
<!--                        .then(response => {-->
<!--                            console.log('Response', response);-->
<!--                        })-->
<!--                        .catch(error => {-->
<!--                            console.log('Error', error);-->
<!--                        });-->
<!--                });-->
<!--            </script>-->

        </div>
        <div class="col-12 col-lg-4">
            <h4>Contact details</h4>
            <div class="mt-4 contact">
                <p class="address-details">
                    <img class="business-icon" src="/assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">
                    ThinkingDutch<br>
                <div class="address-spacing">
                    Theodora Haverstraat 18<br>
                    5122BD Rijen<br>
                    The Netherlands
                </div>
                </p>
                <p>
                    <img class="contact-icon" src="/assets/img/mail.svg" alt="Email Icon">
                    <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/twitter.svg" alt="Twitter Logo">
                    <a href="https://twitter.com/thinkingdutch" target="_BLANK">@thinkingdutch</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/linkedin.svg" alt="Linkedin Icon">
                    <a href="https://www.linkedin.com/company/thinkingdutch/about/" target="_BLANK">ThinkingDutch</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/phone.svg" alt="Phone Icon">
                    <a href="tel:+31857826772">+31 (0) 857826772</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/whatsapp.svg" alt="Whatsapp Logo">
                    <a href="https://wa.me/message/6AB7GYJBUDPLE1" target="_BLANK">WhatsApp</a>
                </p>
            </div>
        </div>
    </div>
</main>

<script src="/assets/js/javascript.js"></script>
<?php
$disableDetails = true;
include('../static/en/footer.php');
?>
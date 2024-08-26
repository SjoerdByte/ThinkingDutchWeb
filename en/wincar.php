<?php
include('../static/en/header.php');
?>
<main class="container contact-hero">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">

            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="/assets/img/Wincar.svg" alt="Wincar logo" style="border-radius: 18%; width: 200px; height: 100px; margin-bottom: 5%; float: left">
                    </div>
                </div>

            </div>

            <h3>Thank you for your interest</h3>
            <br>
            <p>Please fill in the following details as completely as possible</p>

            <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
            <form method="POST" action="/backend/wincarContact.php" id="wincar">
                <div class="row">
                    <div id="response_message" style="display:none;" class="col-12">
                        <div id="response_class" class="alert" role="alert">
                            <small id="response_body">No message specified.</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-text">Company Name</label>
                            <input required type="text" id="company_name" name="company_name" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-text">Company location</label>
                            <input type="text" id="company_place" name="company_place" class="form-control" placeholder="Location">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-text">Name</label>
                            <input required type="text" id="name" name="name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-text">Phone Number</label>
                            <input required type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12" style="padding-bottom: 2%">
                        <div class="form-group">
                            <label class="form-text">Email</label>
                            <input required type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-bottom: 5%">
                        <p class="form-text">Interest in</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked value="whatsapp" id="whatsapp">
                                    <label class="form-check-label" for="interest">
                                        WhatsApp Solution
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-bottom: 5%">
                        <p class="form-text">Number of branches</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="amount">
                                    <label class="form-check-label" for="amount">
                                        1
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" id="amount">
                                    <label class="form-check-label" for="amount">
                                        2
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3" id="amount">
                                    <label class="form-check-label" for="amount">
                                        3
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4+" id="amount">
                                    <label class="form-check-label" for="amount">
                                        4+
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <p class="form-text">Phone central</p>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3cx" id="3cx">
                                    <label class="form-check-label" for="phone_central">
                                        3CX
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="hipin" id="hipin">
                                    <label class="form-check-label" for="phone_central">
                                        HipIn
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="kpn1" id="kpn1">
                                    <label class="form-check-label" for="phone_central">
                                        KPN Éen
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="xelion" id="xelion">
                                    <label class="form-check-label" for="phone_central">
                                        Xelion
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="text" name="phone_central" id="other" class="form-control" placeholder="Other...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-text">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="g-recaptcha" data-sitekey="6Ld_3pMoAAAAAEW73p8Iy7c34Ol0neG_iKm4udul"></div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
            </form>

<!--            <script>-->
<!--                var url = "https://www.thinkingdutch.com/nl/tdmmesengersite.php";-->
<!--                var Request = {};-->
<!---->
<!--                Request.phone = document.getElementById('phone').value;-->
<!--                Request.name = document.getElementById('name').value;-->
<!---->
<!--                fetch(url, {-->
<!--                    method: 'POST',-->
<!--                    mode: 'cors',-->
<!--                    cache: 'no-cache',-->
<!--                    headers: {-->
<!--                        'Accept': 'application/json',-->
<!--                        'Content-Type': 'application/json',-->
<!--                        'Access-Control-Allow-Origin': '*'-->
<!--                    },-->
<!--                    credentials: 'omit',-->
<!--                    redirect: 'follow',-->
<!--                    keepalive: true,-->
<!--                    referrerPolicy: 'no-referrer',-->
<!--                    body: JSON.stringify(Request)-->
<!--                })-->
<!--                    .then(response => {-->
<!--                        console.log('Response', response);-->
<!--                    })-->
<!--                    .catch(error => {-->
<!--                        console.log('Error', error);-->
<!--                    });-->
<!--            </script>-->

        </div>
        <div class="col-12 col-lg-4" style="padding-top: 11%">
            <h4>Contact Information</h4>
            <div class="mt-4 contact">
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/mail.svg" alt="Email Icon">
                    <a href="mailto:sales@thinkingdutch.com">sales@thinkingdutch.com</a>
                </p>
                <p class="contact-details">
                    <img class="contact-icon" src="/assets/img/whatsapp.svg" alt="Whatsapp Logo">
                    <a href="https://wa.me/message/PBWRACLQKKZJP1" target="_BLANK">WhatsApp</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php
$disableDetails = true;
include('../static/en/footer.php');
?>

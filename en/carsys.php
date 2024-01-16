<?php
include('../static/en/header.php');
?>
<main class="container contact-hero">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">

            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/assets/img/CarSysOffline.png" alt="Carsys offline logo" style="border-radius: 18%; width: 150px; height: 75px; margin-bottom: 5%; float: left">
                    </div>
                    <div class="col-lg-6">
                        <img src="/assets/img/carsys.svg" alt="Carsys logo" style="border-radius: 18%; width: 200px; height: 100px; margin-bottom: 5%; float: right;">
                    </div>
                </div>

            </div>

            <h3>Thank you for your interest</h3>
            <br>
            <p>Please fill in the following details as completely as possible</p>

            <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
            <form method="POST" action="/backend/carsysContact.php" id="carsys">
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
                        <p class="form-text">Carsys versie</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="offline" id="offline" >
                                    <label class="form-check-label" for="carsys">
                                        Offline
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="online" id="online">
                                    <label class="form-check-label" for="carsys">
                                        Online
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-bottom: 5%">
                        <p class="form-text">Interest in</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="whatsapp" id="whatsapp">
                                    <label class="form-check-label" for="interest">
                                        WhatsApp Solution
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="phone" id="phone">
                                    <label class="form-check-label" for="interest">
                                        Phone for Carsys
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-bottom: 5%">
                        <p class="form-text">Number of Employees</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0-5" id="amount">
                                    <label class="form-check-label" for="amount">
                                        0-5
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="5-10" id="amount">
                                    <label class="form-check-label" for="amount">
                                        5-10
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="10-25" id="amount">
                                    <label class="form-check-label" for="amount">
                                        10-25
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="25+" id="amount">
                                    <label class="form-check-label" for="amount">
                                        25+
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

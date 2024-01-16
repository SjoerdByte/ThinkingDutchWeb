<?php
include('../static/nl/header.php');
?>
    <main class="container contact-hero">
        <div class="row">

            <div class="col-12 col-lg-6 mb-2">

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

                <h3>Bedankt voor uw interesse</h3>
                <br>
                <p>Graag onderstaande gegevens zo compleet mogelijk invullen</p>

                <div id="response_loading" style="display:none;" class="spinner-border text-dark ml-2" role="status"></div>
                <form id="carsys" method="POST" action="/backend/carsysContact.php">
                    <div class="row">
                        <div id="response_message" style="display:none;" class="col-12">
                            <div id="response_class" class="alert" role="alert">
                                <small id="response_body">No message specified.</small>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-text">Bedrijfsnaam</label>
                                <input required type="text" id="company_name" name="company_name" class="form-control" placeholder="Bedrijfsnaam">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-text">Vestigingsplaats</label>
                                <input type="text" id="company_place" name="company_place" class="form-control" placeholder="Vestigingsplaats">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-text">Naam</label>
                                <input required type="text" id="name" name="name" class="form-control" placeholder="Volledige naam">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-text">Mobielnummer</label>
                                <input type="tel" pattern="(?:(?:\+|00)31|0)6(?:[ -]?[0-9]){8}" id="phone" name="phone" class="form-control" placeholder="Mobielnummer">
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
                                        <input class="form-check-input" type="checkbox" value="offline" id="offline" name="version[]">
                                        <label class="form-check-label" for="carsys">
                                            Offline
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="online" id="online" name="version[]">
                                        <label class="form-check-label" for="carsys">
                                            Online
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-bottom: 5%">
                            <p class="form-text">Interesse in</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="whatsapp" id="whatsapp" name="interest[]">
                                        <label class="form-check-label" for="interest">
                                            WhatsApp oplossing
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="phone" id="phone" name="interest[]">
                                        <label class="form-check-label" for="interest">
                                            Phone voor Carsys
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" style="margin-bottom: 5%">
                            <p class="form-text">Aantal medewerkers</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0-5" id="amount" name="amount[]">
                                        <label class="form-check-label" for="amount">
                                            0-5
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5-10" id="amount" name="amount[]">
                                        <label class="form-check-label" for="amount">
                                            5-10
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10-25" id="amount" name="amount[]">
                                        <label class="form-check-label" for="amount">
                                            10-25
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="25+" id="amount" name="amount[]">
                                        <label class="form-check-label" for="amount">
                                            25+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p class="form-text">Telefoon centrale</p>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3cx" id="3cx" name="phone_central[]">
                                        <label class="form-check-label" for="phone_central">
                                            3CX
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="hipin" id="hipin" name="phone_central[]">
                                        <label class="form-check-label" for="phone_central">
                                            HipIn
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="kpn1" id="kpn1" name="phone_central[]">
                                        <label class="form-check-label" for="phone_central">
                                            KPN één
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="xelion" id="xelion" name="phone_central[]">
                                        <label class="form-check-label" for="phone_central">
                                            Xelion
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" id="other"  class="form-control" placeholder="Anders..." name="phone_central[]">
                                    </div>
                                </div>
                            </div>
<!--                            <div class="dropdown">-->
<!--                                <button class="btn btn-orange dropdown-toggle col-12 text-left" type="button" id="sampleDropdownMenu" data-toggle="dropdown">-->
<!--                                    Dropdown-->
<!--                                </button>-->
<!--                                <div class="dropdown-menu">-->
<!--                                    <button class="dropdown-item" type="button"><input type="checkbox" />Action</button>-->
<!--                                    <button class="dropdown-item" type="button"><input type="checkbox" />Action</button>-->
<!--                                    <button class="dropdown-item" type="button"><input type="checkbox" />Action</button>-->
<!--                                    <button class="dropdown-item" type="button"><input type="checkbox" />Action</button>-->
<!--                                    <button class="dropdown-item" type="button"><input  type="text" id="phone" name="phone" class="form-control" placeholder="Anders..."></button>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-text">Bericht</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="g-recaptcha" data-sitekey="6Ld_3pMoAAAAAEW73p8Iy7c34Ol0neG_iKm4udul"></div>
                        <button type="submit" class="btn btn-dark">Verzenden</button>
                    </div>
                </form>

                <script>
                    var url = "https://www.thinkingdutch.com/nl/tdmmessengersite.php";
                    var Request = {};

                    Request.phone = document.getElementById('phone').value;
                    Request.name = document.getElementById('name').value;

                    fetch(url, {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Access-Control-Allow-Origin': '*'
                        },
                        credentials: 'omit',
                        redirect: 'follow',
                        keepalive: true,
                        referrerPolicy: 'no-referrer',
                        body: JSON.stringify(Request)
                    })
                        .then(response => {
                            console.log('Response', response);
                        })
                        .catch(error => {
                            console.log('Error', error);
                        });
                </script>


            </div>
            <div class="col-12 col-lg-4" style="padding-top: 11%">
                <h4>Contact gegevens</h4>
                <div class="mt-4 contact">
<!--                    <p class="address-details">-->
<!--                        <img class="business-icon" src="/assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">-->
<!--                        ThinkingDutch<br>-->
<!--                    <div class="address-spacing">-->
<!--                        Theodora Haverstraat 18<br>-->
<!--                        5122BD Rijen<br>-->
<!--                        Nederland-->
<!--                    </div>-->
<!--                    </p>-->
                    <p class="contact-details">
                        <img class="contact-icon" src="/assets/img/mail.svg" alt="Email Icon">
                        <a href="mailto:sales@thinkingdutch.com">sales@thinkingdutch.com</a>
                    </p>
<!--                    <p class="contact-details">-->
<!--                        <img class="contact-icon" src="/assets/img/twitter.svg" alt="Twitter / X Logo">-->
<!--                        <a href="https://twitter.com/thinkingdutch" target="_BLANK">@thinkingdutch</a>-->
<!--                    </p>-->
<!--                    <p class="contact-details">-->
<!--                        <img class="contact-icon" src="/assets/img/linkedin.svg" alt="Linkedin Icon">-->
<!--                        <a href="https://www.linkedin.com/company/thinkingdutch/about/" target="_BLANK">ThinkingDutch</a>-->
<!--                    </p>-->
<!--                    <p class="contact-details">-->
<!--                        <img class="contact-icon" src="/assets/img/phone.svg" alt="Phone Icon">-->
<!--                        <a href="tel:+31857826772">+31 (0) 857826772</a>-->
<!--                    </p>-->
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
include('../static/nl/footer.php');
?>
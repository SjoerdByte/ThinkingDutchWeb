<footer class="<?php if(!isset($disableDetails)) echo 'bg-light'; ?> text-muted mt-5">
    <?php
    if(!isset($disableDetails)) {
        ?>
        <div class="py-3">
            <div class="container mt-5">
                <div class="row mt-3">
                    <div class="col-12 col-lg-4 mx-auto">
                        <p class="address-details">
                            <img class="business-icon" src="/assets/img/logo_icon_transparant.png" alt="ThinkingDutch Icon">
                            ThinkingDutch<br>
                        <div class="address-spacing">
                            Theodora Haverstraat 18<br>
                            5122BD Rijen<br>
                            The Netherlands
                        </div>
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 mx-auto mb-md-0 text-xs-center contact-footer">
                        <p class="contact-details">
                            <img class="contact-icon" src="/assets/img/mail.svg" alt="Email Icon">
                            <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                        </p>
                        <p class="contact-details">
                            <img class="contact-icon" src="/assets/img/twitter.svg" alt="Twitter Logo">
                            <a href="https://twitter.com/thinkingdutch" target="_BLANK">@thinkingdutch</a>
                        </p>
                        <p class="contact-details">
                            <img class="contact-icon" src="/assets/img/linkedin.svg" alt="Linkedin Icon">
                            <a href="https://www.linkedin.com/company/thinkingdutch/about/" target="_BLANK">@ThinkingDutch</a>
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

                    <div class="col-12 col-lg-2 d-none d-lg-block">
                        <p>
                            <a href="/en/" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="/en/products" class="text-reset">Products</a>
                        </p>
                        <p>
                            <a href="/en/pricing" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="/en/contact" class="text-reset">Contact</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="p-4 d-flex justify-content-between mt-3" style="background-color: rgba(0, 0, 0, 0.05);">
        <small class="d-none d-lg-block">
            CoC: <b>18083274</b> | VAT: <b>NL001676141B50</b> | Bank details: <b>NL93 RABO 0125 4250 07</b>
        </small>
        <div class="list-unstyled d-flex">
            © <?php echo date("Y"); ?> <a class="text-reset fw-bold ml-1" href="/">ThinkingDutch.com</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/javascript.js"></script>
<script src="/assets/js/carsys.js"></script>
</body>
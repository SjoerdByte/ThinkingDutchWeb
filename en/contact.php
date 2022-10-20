<?php
    include('../static/en/header.php');
?>
<main class="container contact-hero">
    <div class="row mt-5">
        <div class="col-12 col-lg-6 mb-4">
            <h4>Contact us</h4>
            <form method="POST" action="/backend/contact.php">
                <div class="row mt-4">
                    <?php
                        if (isset($_GET['status'])) {
                    ?>
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            <small>
                            <?php
                                if($_GET['status'] == 'success') {
                                    echo 'We have received your message, we will contact you soon!';
                                } elseif($_GET['status'] == 'error') {
                                    echo 'We could not send your message, please try again.';
                                }
                            ?>
                            </small>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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
                <p>
                    <img class="business-icon" src="../assets/img/logo_icon_transparant.png">
                    ThinkingDutch B.V.<br>
                    Theodora Haverstraat 18<br>
                    5122BD Gilze-Rijen<br>
                    The Netherlands
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/mail.svg">
                    <a href="mailto:info@thinkingdutch.com">info@thinkingdutch.com</a>
                </p>
                <p>
                    <img class="contact-icon" src="../assets/img/phone.svg">
                    <a href="tel:+31858768712">085 8768712</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php
    include('../static/en/footer.php');
?>
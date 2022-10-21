<?php
    include('../static/nl/header.php');
?>
<main class="container contact-hero">
    <div class="row mt-5 mb-5 ">
        <div class="col-12 col-lg-6 mb-4">
            <h4>Contacteer ons</h4>
            <form method="POST" action="/backend/contact.php">
                <div class="row mt-4">
                    <?php
                        if (isset($_GET['status'])) {
                    ?>
                    <div class="col-12">
                        <div class="alert <?php if($_GET['status'] == 'success') { echo 'alert-success'; } else { echo 'alert-danger'; } ?>" role="alert">
                            <small>
                            <?php
                                if($_GET['status'] == 'success') {
                                    echo 'We hebben uw bericht ontvangen, we nemen snel contact met u op!';
                                } elseif($_GET['status'] == 'error') {
                                    echo 'We konden uw bericht niet versturen, probeer het laten opnieuw.';
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
                            <label>Uw naam</label>
                            <input required type="text" name="name" class="form-control" placeholder="Uw naam">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label>Uw email</label>
                            <input required type="email" name="email" class="form-control" placeholder="Uw email">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Bericht</label>
                            <textarea required class="form-control" name="message" rows="3"></textarea>
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
                <p>
                    <img class="business-icon" src="../assets/img/logo_icon_transparant.png">
                    ThinkingDutch<br>
                    Theodora Haverstraat 18<br>
                    5122BD Gilze-Rijen<br>
                    Nederland
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
    include('../static/nl/footer.php');
?>
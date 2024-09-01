<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> GPPV | CONTACT</title>
    <meta name="author" content="GSVP">
    <meta name="description" content="Welcome to Grand Pacific Park Vacation, your passport to personalized vacations. We redefine travel with flexibility and convenience. Our commitment to excellence ensures access to a diverse array of top-tier resorts worldwide, tailored to suit your unique preferences">
    <meta name="keywords" content="Grand Pacific Park Vacation -  personalized vacations.">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta property="og:title" content="Grand Pacific Park Vacation">
    <meta property="og:description" content="Welcome to Grand Pacific Park Vacation, your passport to personalized vacations. We redefine travel with flexibility and convenience. Our commitment to excellence ensures access to a diverse array of top-tier resorts worldwide, tailored to suit your unique preferences">
    <meta property="og:image" content="assets/logo/logo.png">
    <meta property="og:image:alt" content="assets/logo/logo.png">
    <meta property="og:url" content="https://grandpacificparkvacation.com/">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <?php include 'include/head.php';?>
</head>
<body>
    <?php include 'include/navbar.php'; ?>
    

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-40">
                <div class="col-xl-5">
                    <div class="contact-info-wrap">
                        <div class="shape-img"><img src="assets/img/shape/contact_shape.png" alt="shape"></div>
                        <h3 class="border-title2">Contact Info</h3>
                        <div class="contact-info-box">
                            <div class="contact-info">
                                <h4 class="contact-info__title">Contact Number:</h4>
                                <div class="contact-info__icon"><i class="fal fa-phone"></i></div>
                                <div class="media-body"><span class="contact-info__text"><a
                                            href="tel:+011-47093974">+011-47093974</a></span></div>
                            </div>
                            <div class="contact-info">
                                <h4 class="contact-info__title">Mail Address:</h4>
                                <div class="contact-info__icon bg-theme"><i class="fal fa-envelope"></i></div>
                                <div class="media-body"><span class="contact-info__text"><a
                                            href="mailto:info@grandpacificparkvacation.com">info@grandpacificparkvacation.com</a></span></div>
                            </div>
                            <div class="contact-info">
                                <h4 class="contact-info__title">Office Address:</h4>
                                <div class="contact-info__icon bg-title"><i class="fal fa-location-dot"></i></div>
                                <div class="media-body"><span class="contact-info__text">E 23 LG, Kalkaji New Delhi,<br> 110019</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.9707020995124!2d77.25238218831126!3d28.540600325645073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3d950ebeb15%3A0x632664e7e04f3468!2s23%2C%20Kalkaji%20Main%20Rd%2C%20Krishna%20Market%2C%20Block%20G%2C%20Kalkaji%2C%20New%20Delhi%2C%20Delhi%20110019!5e0!3m2!1sen!2sin!4v1709142151027!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
        </div>
    </div>
     
    <div class="space-bottom" data-bg-src="assets/img/bg/contact_bg_1.html">
    <div class="container">
        <form action="database/contact_us.php" method="POST" class="contact-form ajax-contact" id="contactForm">
            <h3 class="form-title">Make An Appointment</h3>
            <div class="row">
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name"
                        id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                        id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number"
                        id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                <div class="form-group col-md-6"><input type="text" class="form-control style3" name="subject"
                        id="subject" placeholder="Query Topic"> <i class="fal fa-file-invoice"></i></div>
                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                        class="form-control style3" placeholder="Your Message"></textarea> <i
                        class="fal fa-pencil"></i></div>
                <div class="form-btn col-12"><button class="ot-btn" type="button" onclick="submitForm()">Send Message Now</button></div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div>
<script>
    function submitForm() {
        var form = document.getElementById('contactForm');
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'database/contact_us.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                showToast(JSON.parse(xhr.responseText));
            }
        };

        xhr.send(formData);
    }

    function showToast(response) {
        if (response.status === "success") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message,
            }).then(function () {
                location.reload();
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: response.message,
            });
        }
    }
</script>

    
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/detail.jpeg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- contact-info-section -->
<section class="contact-info-section bg-color-1 centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-63"></i></div>
                        <h3>Phone</h3>
                        <p><a href="tel:14077731234">+1 (407) 773-1234</a></p>
                        <p><a href="tel:14077546863">+1 (407) 754-6863</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-64"></i></div>
                        <h3><?php echo $lang['email_address'] ?></h3>
                        <p><a href="mailto:jcgcenter@aeth.org">jcgcenter@aeth.org</a></p>
                        <p><a href="mailto:info@aeth.org">info@aeth.org</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-65"></i></div>
                        <h3><?php echo $lang['our_location'] ?></h3>
                        <p>160 Clariemont Avenue - Decatur <br />GA 30030</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->

<!-- contact-section -->
<section class="contact-section sec-pad">
    <div class="auto-container">
        <!-- iframe div -->
            
        <div class="iframe-container" style="margin-bottom: 30px;">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=160%20Clairemont%20Avenue%20Decatur%20GA%2030030+(JC%20Resource%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box p_relative mr_70">
                    <h3><?php echo $lang['fell_free'] ?></h3>
                    <p>Our team is here to help you with any questions or concerns. Whether you need support, have feedback, or just want to learn more about our services, don't hesitate to reach out. We are committed to providing the best service and support possible.</p>
                    <ul class="social-links clearfix">
                        <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="contact.html"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="contact.html"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                <button class="theme-btn-one" type="submit" name="submit-form"><span>Send message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</html>
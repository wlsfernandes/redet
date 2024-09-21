<?php
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/home_redet.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['website_name']; ?></h1>
        </div>
    </div>
</section>

<section class="funfact-section alternat-2 pt_80 pb_80 bg-color-1">
    <div class="auto-container">
        <div class="inner-container">
        </div>
    </div>
</section>
<section class="faq-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                <div class="video-content p_relative d_block mr_30">
                    <div class="video-inner centred" style="background-image: url(assets/images/background/video-bg.jpg); padding: 15px; max-width: 600px;">
                        <div class="video-btn">
                            <iframe class="lightbox-image" width="560" height="315" src="https://www.youtube.com/embed/B8BfcGiRas4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box ml_30">
                        <div class="sec-title mb_55">
                            <span class="sub-title"><?php echo $lang['somosredet'] ?></span>
                            <p><?php echo $lang['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-style-two pt_120">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box mr_40">
                            <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                            <figure class="image"><img src="assets/images/redet_about.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box ml_40">
                                <div class="sec-title mb_60">
                                    <h2><?php echo $lang['redet_name']?></h2>
                                </div>
                                <div class="text mb_40">
                                    <p><?php echo $lang['redet_desc1']?></p>
                                    <p><?php echo $lang['redet_desc2']?></p>
                                </div>
                                <div class="btn-box">
                                    <a href="about.php?lang=<?php echo $lang_code; ?>" class="theme-btn-one"><?php echo $lang['saber_mas']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="cta-section centred" style="margin-top:100px;">
    <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/home_become.png);"></div>
    <div class="auto-container">
        <div class="inner-box" style="width:100%;">
            <h2 style="text-center: left; color: white;"><?php echo $lang['ser_miembro'] ?></h2>
            <p style="text-left: left; color: white;font-size:20px;margin-top:25px;"><?php echo $lang['ser_miembro_desc1'] ?></p>
            <p style="text-left: left; color: white;font-size:20px;margin-top:25px;"><?php echo $lang['ser_miembro_desc2'] ?></p>
            <p style="text-left: left; color: white;font-size:20px;margin-top:25px;"><?php echo $lang['ser_miembro_desc3'] ?></p>

            <a href="members.php?lang=<?php echo $lang_code; ?>" class="theme-btn-one" style="margin-top:50px;"><span><?php echo $lang['membresias'] ?></span></a>

        </div>

    </div>
</section>

<!-- featured-causes -->
<section class="featured-causes" style="margin-top:100px;">
    <div class="auto-container">
        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="inner-box" style="background-image: url(assets/images/aethlogo_black.jpg);">
                    <div class="text">
                        <span>AETH</span>
                        <h3><?php echo $lang['association']?></h3> 
                        <a href="https://aeth.info/" target="blank"><button class="donate-box-btn theme-btn-one"><?php echo $lang['visit'] ?></button></a>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box" style="background-image: url(assets/images/lilly.jpg);">
                    <div class="text">
                        <span>Lilly Endowment INC</span>
                        <h3><?php echo $lang['lilly']?></h3> 
                        <a href="https://lillyendowment.org/" target="blank"><button class="donate-box-btn theme-btn-one"><?php echo $lang['visit'] ?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured-causes end -->

<?php include 'footer.php'; ?>

</html>
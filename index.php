<?php
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/book_background.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['website_name']; ?></h1>
        </div>
    </div>
</section>
<!--
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box mr_40">
                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                    </div>
                    <figure class="image"><img src="assets/images/team/justoandCatherineGonzalez3.jpg" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">

                        <div class="text mb_40">
                            <p><?php echo $lang['database_desc1'] ?></p>
                            
                            <p><?php echo $lang['database_desc3'] ?></br>
                                <?php echo $lang['database_desc4'] ?></br>
                                <?php echo $lang['database_desc5'] ?>
                            </p>
                            <p> <?php echo $lang['database_desc6'] ?></p>
                            <div class="btn-box">
                                <a href="https://archive.gonzalezcenter.org"  target="blank" class="theme-btn-one"><?php echo $lang['getaccessdatabase']; ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<section class="about-style-two pt_120" style="background-color:#f7f5f1">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="content_block_two">

                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2><?php echo $lang['welcome_description']['p1'] ?></h2>
                        </div>
                        <div class="text mb_40">
                            <p><?php echo $lang['welcome_description']['p2'] ?></p>
                            <p><?php echo $lang['welcome_description']['p3'] ?></p>
                            <p><?php echo $lang['welcome_description']['p4'] ?></p>
                            <p><?php echo $lang['welcome_description']['p5'] ?></p>

                            <!--  <div class="btn-box">
                                <a href="friend.php" target="blank"
                                    class="theme-btn-one"><?php echo $lang['friends']; ?></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="image-box mr_40">
                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                    </div>
                    <figure class="image" style="width:70%"><img src="assets/images/gallery/g12.jpg" alt=""></figure>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2><?php echo $lang['getaccessdatabase'] ?></h2>
            <div class="btn-box">
                <a href="https://archive.gonzalezcenter.org" target="blank"
                    class="theme-btn-one"><span><?php echo $lang['clickhere'] ?></span></a>
            </div>
        </div>
    </div>
</section>
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image" style="width:800px;">
                            <!-- Autoplay, loop, and custom dimensions for the video -->
                            <video autoplay loop muted>
                                <source src="assets/images/videos/acervo.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </figure>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2><?php echo $lang['ourCollection']; ?></h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p> <?php echo $lang['welcome_description']['p6'] ?></p>
                                <p><a href="https://aeth.info/afiliacion" target="blank"><i class="icon-3"></i></a>
                                    <?php echo $lang['clickhere'] ?>
                                </p>
                                <p><?php echo $lang['welcome_description']['p7'] ?></p>
                                <p><?php echo $lang['welcome_description']['p8'] ?></p>
                                <div class="btn-box">
                                    <a href="collection.php?lang=<?php echo $lang_code; ?>" target="blank"
                                        class="theme-btn-one"><span><?php echo $lang['getaccessdatabase'] ?></span></a>
                                </div>
                            </div>
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
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image" style="width:500px;">
                            <img src="assets/images/omeka.jpg" alt="Acervo Image">
                        </figure>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2><?php echo $lang['ourCollection']; ?></h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p> <?php echo $lang['welcome_description']['p6'] ?></p>
                                <p><a href="https://aeth.info/afiliacion" target="blank"><i class="icon-3"></i></a>
                                    <?php echo $lang['clickhere'] ?>
                                </p>
                                <p><?php echo $lang['welcome_description']['p7'] ?></p>
                                <p><?php echo $lang['welcome_description']['p8'] ?></p>
                                <div class="btn-box">
                                    <a href="collection.php?lang=<?php echo $lang_code; ?>" target="blank"
                                        class="theme-btn-one"><span><?php echo $lang['getaccessdatabase'] ?></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_30">
                        <div class="sec-title mb_60">
                            <h2><?php echo $lang['friends']; ?></h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p><?php echo $lang['welcome_description']['p9'] ?> </p>
                                <p style="margin-top:25px;"> </p>
                                <p><?php echo $lang['welcome_description']['p10'] ?></p>
                                <div class="btn-box" style="margin-top:25px;">
                                    <a href="friend.php?lang=<?php echo $lang_code; ?>"
                                        class="theme-btn-one"><?php echo $lang['friend_of_the_center_title']; ?></a>
                                </div>
                                <p style="margin-top:25px;"><?php echo $lang['welcome_description']['p11'] ?></p>
                                <div class="btn-box" style="margin-top:25px;">
                                    <a href="friend.php?lang=<?php echo $lang_code; ?>"
                                        class="theme-btn-one"><?php echo $lang['donate']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_30 mt_19">
                            <figure class="image" style="width:800px;">
                                <!-- Autoplay, loop, and custom dimensions for the video -->
                                <video autoplay loop muted>
                                    <source src="assets/images/videos/become a friend.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </figure>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section class="funfact-section pt_80 pb_80 bg-color-2" style="margin-top:100px;">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="29">0</span>
                    </div>
                    <h3>Years of <br />Fund Raising</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="3">0</span><span>k</span>
                    </div>
                    <h3>Happy <br />Volunteers</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="8">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Monthly Doners</h3>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k</span>
                    </div>
                    <h3>Total <br />Campaigns</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'testimonial.php'; ?>

<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2><?php echo $lang['getaccessdatabase'] ?></h2>
            <div class="btn-box">
                <a href="https://archive.gonzalezcenter.org" target="blank"
                    class="theme-btn-one"><span><?php echo $lang['clickhere'] ?></span></a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</html>
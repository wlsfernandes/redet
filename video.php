<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<style>
    .embed-responsive {
        position: relative;
        overflow: hidden;
        padding: 0;
        height: 0;
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
    }

    .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<!-- Page Title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/video-gallery.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>González Channel</h1>
        </div>
    </div>
</section>
<!-- End Page Title -->
<section class="about-style-three sec-pad">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-6.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_four">
                    <div class="content-box p_relative mr_30">
                        <div class="sec-title mb_30">
                            <h2><?php echo $lang['youtube_title'] ?></h2>
                        </div>
                        <div class="text p_relative mb_35">
                            <p><?php echo $lang['youtube_description'] ?></p>
                            <p><?php echo $lang['youtube_description2'] ?></p>
                        </div>
                        <ul class="list-style-one clearfix mb_40">
                            <li><?php echo $lang['Exclusive_Content'] ?></li>
                        </ul>
                        <div class="btn-box">
                            <a href="https://www.youtube.com/@drjustogonzalez" target="blank" class="theme-btn-one"><i
                                    class="fab fa-youtube"></i> González Youtube Channel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_40">
                    <div class="shape">
                        <div class="shape-1"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                    </div>
                    <figure class="image" style="width:50%"><img src="assets/images/team/JustoGonzalez.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Gallery Section -->
<section class="video-gallery" style="margin-top:100px; margin-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLTn1gclVEw"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Get to know González Resource Center</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OYbVTZAoD6g"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">The story behind the legacy</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NuSp_3isvNA"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">The story behind the legacy</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/995444816"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Church History Presentation</h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2rkccnUOC5A?list=PL4qg0UKlUUIluxQZcDUF-HrSPcAoF1Ye-&index=12"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Congresso Hagnos 2009</h4>
            </div>
            <div class="col-md-6 mb-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qoDkKa9cBHk?start=74&list=PL4qg0UKlUUIluxQZcDUF-HrSPcAoF1Ye-&index=10"
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-2">Congresso Hagnos 2009</h4>
            </div>
        </div>
    </div>
</section>


<!-- End Video Gallery Section -->


<?php include 'footer.php'; ?>

</html>
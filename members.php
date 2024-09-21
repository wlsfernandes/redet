<!DOCTYPE html>
<html lang="en">

<?php require_once 'header.php'; ?>


<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/membership.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php echo $lang['membresias']; ?></h1>
        </div>
    </div>
</section>
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2><?php echo $lang['member_p1']; ?></h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p><?php echo $lang['member_p2']; ?> </p>
                                <p><?php echo $lang['member_p3']; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box">
                        <div class="accordion-inner">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"></div>
                                        <h4><?php echo $lang['faq_q1']; ?></h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p><?php echo $lang['faq_a1']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"></div>
                                        <h4><?php echo $lang['faq_q2']; ?></h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p><?php echo $lang['faq_a2']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php require_once 'footer.php'; ?>
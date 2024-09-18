<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/team/JustoGonzalez_MartinLutherKing2.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Dr. Justo González</h1>
        </div>
    </div>
</section>
<section class="team-details">
    <div class="auto-container">
        <div class="team-details-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Dr. Justo González</h2>
                        <p><?php echo $lang['justo_influence'] ?></p>
                        <ul class="info-list clearfix">
                            <li><span>Email:</span> <a href="mailto:justoluis325@gmail.com">justoluis325@gmail.com</a></li>
                            <li><span>Phone:</span> <a href="tel:1555555555">+1 555-5555</a></li>
                        </ul>
                        <ul class="social-links clearfix">
                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-discription">
            <div class="text">
                <h3><?php echo $lang['justo_legacy'] ?></h3>
                <p><?php echo $lang['justo_legacy_1'] ?></p>
                <p><?php echo $lang['justo_legacy_2'] ?></p>
                <p><?php echo $lang['justo_legacy_3'] ?></p>
                <p><?php echo $lang['justo_legacy_4'] ?></p>
                <p><?php echo $lang['justo_legacy_5'] ?></p>

            </div>
        </div>
        <div class="team-info-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 skills-column">
                    <div class="experience-inner ml_20">

                        <div class="text">
                            <h3><strong>Degrees and Honors</strong></h3>
                            <?php
                            echo $lang['degrees']['bachelor_of_arts'];
                            echo '<p></p>'; // For line break
                            echo $lang['degrees']['bachelor_of_divinity'];
                            echo '<p></p>'; // For line break
                            echo $lang['degrees']['phd_historical_theology'];
                            echo '<p></p>'; // For line break
                            echo $lang['degrees']['doctor_of_ministry'];
                            echo '<p></p>'; // For line break
                            echo $lang['degrees']['honorary_doctorates'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 experience-column">
                    <div class="skills-inner mr_20">
                        <div class="text">
                            <h3><strong>Achievements</strong></h3>
                            <?php
                            echo $lang['achievements']['first_latino_phd'] . '<br>';
                            echo $lang['achievements']['ordained_minister'] . '<br>';
                            echo $lang['achievements']['prolific_author'] . '<br>';
                            echo $lang['achievements']['advocate_hispanic_education'] . '<br>';
                            echo $lang['achievements']['educator_renowned_institutions'] . '<br>';
                            echo $lang['achievements']['international_speaker'] . '<br>';
                            echo $lang['achievements']['member_american_academy'] . '<br>';
                            echo $lang['achievements']['founder_hispanic_initiative'] . '<br>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>


</html>
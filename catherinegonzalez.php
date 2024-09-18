<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<section class="team-details">
    <div class="auto-container">
        <div class="team-details-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/team/catherineGonzalez1.jpg" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Dr. Catherine González</h2>
                        <p><?php echo $lang['catherine_gonzalez_profile'] ?></p>
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
                <p><?php echo $lang['catherine_gonzalez_contributions'] ?></p>
                <p><?php echo $lang['catherine_gonzalez_impact'] ?></p>

            </div>
        </div>
        <div class="team-info-content">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 skills-column">
                    <div class="experience-inner ml_20">

                        <div class="text">
                            <h3><strong>Degrees and Honors</strong></h3>
                            <?php
                           echo $lang['catherine_gonzalez_degrees']['bachelor_of_arts'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_degrees']['master_of_divinity'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_degrees']['doctor_of_philosophy'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_degrees']['honorary_degrees'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_honors']['prestigious_awards'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_honors']['academic_organizations'];
                           echo '<p></p>'; // For line break
                           echo $lang['catherine_gonzalez_honors']['public_recognition'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 experience-column">
                    <div class="skills-inner mr_20">
                        <div class="text">
                            <h3><strong>Achievements</strong></h3>
                            <?php
                            echo $lang['catherine_gonzalez_achievements']['pioneering_research'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['influential_publications'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['advancing_gender_inclusivity'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['educational_leadership'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['promotion_of_social_justice'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['collaborative_projects'] . '<br>';
                            echo $lang['catherine_gonzalez_achievements']['recognition_and_honors'] . '<br>';
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
<!DOCTYPE html>
<?php
$t_pieces = t(array("fp-stats_title","fp-stats_h1","fp-stats_h2","fp-stats_h3", "fp-stats_h4"),$dbhost,$dbname,$dbuser,$dbpassword);
?>

<section id="stats" class="section main-row">
    <div class="section-container container text-center">
        <div class="row"  data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
            <div class="column col-lg-12">
                <div class="column-wrapper">
                    <div id="divider" class="divider">
                        <div class="divider-content">
                              <h3 class="text-uppercase my-5"><?php echo $t_pieces["fp-stats_title"];?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column col-xs-12 col-sm-3"  data-aos="flip-up" data-aos-duration="500" data-aos-anchor-placement="bottom-bottom">
                <div class="column-wrapper">
                    <div>
                        <i id="stat-praktikant"></i>
                        <h2 class=" my-4"><?php echo $stats[0]?></h2>
                    </div>
                    <div>
                      <h5 class="h6 text-uppercase mb-2"><?php echo $t_pieces["fp-stats_h1"];?></h5>
                    </div>
                </div>
            </div>
            <div class="column col-xs-12 col-sm-3"  data-aos="flip-up" data-aos-duration="1000" data-aos-anchor-placement="bottom-bottom">
                <div class="column-wrapper">
                    <div>
                      <i id="stat-projekt"></i>
                        <h2 class=" my-4"><?php echo $stats[1]?></h2>
                    </div>
                    <div>
                      <h5 class="h6 text-uppercase mb-2"><?php echo $t_pieces["fp-stats_h2"];?></h5>
                  </div>
                </div>
            </div>
            <div class="column col-xs-12 col-sm-3"  data-aos="flip-up" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
                <div class="column-wrapper">
                    <div>
                      <i id="stat-praktikapakkumine"></i>
                        <h2 class=" my-4"><?php echo $stats[4]?></h2>
                    </div>
                    <div>
                      <h5 class="h6 text-uppercase mb-2"><?php echo $t_pieces["fp-stats_h3"];?></h5>
                    </div>
                </div>
            </div>
            <div class="column col-xs-12 col-sm-3"  data-aos="flip-up" data-aos-duration="2000" data-aos-anchor-placement="bottom-bottom">
                <div class="column-wrapper">
                    <div>
                      <i id="stat-organisatsioon"></i>
                        <h2 class="my-4"><?php echo $stats[3]?></h2>
                    </div>
                    <div>
                      <h5 class="h6 text-uppercase mb-2"><?php echo $t_pieces["fp-stats_h4"];?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

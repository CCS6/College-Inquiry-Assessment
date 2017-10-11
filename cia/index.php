<!-- test -->
<?php
include "header.php";
include 'config.php';
include "classes/Colleges.php";
$c = new Colleges();
$result = $c->getColleges($db);
?>

        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h2 class="bnr-sub-title">College Inquiry Assessment</h2>
              <p class="bnr-para">This project aims to allow the student to explore, through a given college, degrees which may be of interest to them <br />and also show the students the top five jobs related to the degree of their choice within the Philippines.</p>
              <div class="overlay-detail">
                <a href="#service"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->

    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Colleges</h2>
            <hr class="bottom-line">
          </div>

<!-- query for college -->
          <?php
          $rowOpen = '';
          $rowClose = '';
          $i = 1;
          $x = 1;
          foreach($result as $key) {
              ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                  <h3><span><?= substr($key['collegeName'], 0, 1) ?></span><?= substr($key['collegeName'], 1) ?></h3>
                 <p><?= $c->get_words($key['collegeAboutInfo'])?>...</p>
                </div>
              </div>
              <?php
              if(($i%4) == 0){
                  $rowClose = '</div>';
                 $rowOpen = '<div class="row">';
                  echo $rowClose;
                  echo $rowOpen;
              }

                  if($x == 4){
                    break;
                  }
                  $i++;
                  $x++;
              }
              ?>

      <div id="more-colleges"class="container">
          <a class="a-colleges" href="colleges.php">click here to learn more...</a>
      </div>
    </section>
    <!---->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img class="circle-profile"src="img/20819343_851506305010941_8992152039636009533_o.jpg">
              </div>
              <h3 class="pad-bt15">Derick Ho</h3>
              <p>"The universe is now in the short life given to me in the time created by man, provided by God." <br>- Derick</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img class="circle-profile"src="img/16665275_1232677693452918_688165418877697166_o.jpg">
              </div>
              <h3 class="pad-bt15">Samuel Akinbode</h3>
              <p>"It's okay to be average, <br>but it's not okay <br>to stay average." <br>- Sam</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img class="circle-profile"src="img/13006598_999938766759664_6860126981732108419_n.jpg">
              </div>
              <h3 class="pad-bt15">Charles Cariño</h3>
              <p>"Everything has a solution.<br> It's up to you to take the challenge or not." <br>- Charles</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img class="circle-profile"src="img/20621099_1621977307875142_7182323348226083932_n.jpg">
              </div>
              <h3 class="pad-bt15">Seth Cornelio</h3>
              <p>"I am a source code, <br>Life is the IDE and <br>God is the Programmer." <br>- Koya Seth"</p>
            </div>
          </div>
        </div>
      </div>
      <div id="more-colleges"class="container">
          <a class="a-colleges" href="about.php">click here to learn more...</a>
      </div>
    </section>
<?php include "footer.php"; ?>
